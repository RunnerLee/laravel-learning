<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;

class Article extends Model
{

    use Authorizable;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'original_content',
        'short_content',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    public function collectors()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }


    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function latestComment()
    {
        return $this->hasOne(Comment::class)->Recent();
    }


    public function getArticles($limit)
    {
        return $this->withoutDisabled()->Recent()->with('user', 'latestComment')->paginate($limit);
    }


    public function scopeWithoutDisabled($query)
    {
        return $query->where('is_disabled', 'no');
    }


    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }



}
