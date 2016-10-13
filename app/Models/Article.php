<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

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


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function comment()
    {
        return $this->hasOne(Comment::class)->recent();
    }


    public function getArticles($limit)
    {
        return $this->withoutDisabled()->with('user', 'comment')->paginate($limit);
    }


    public function scopeWithoutDisabled($query)
    {
        return $query->where('is_disabled', 'no');
    }



}
