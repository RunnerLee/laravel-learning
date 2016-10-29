<?php

namespace App\Models;

use App\Models\Traits\Revisionable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\Access\Authorizable;

class Article extends Model
{

    use Authorizable, SoftDeletes, Revisionable;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'original_content',
        'short_content',
    ];

    protected $dates = ['deleted_at'];


    public static function boot()
    {
        parent::boot();
        self::created(function($article) {
            $article->category->update([
                'last_article_at' => $article->create_at,
            ]);
        });
        self::deleted(function($article) {
            $article->category->decrement('article_count', 1);
            $article->comments()->delete();
        });
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function comments()
    {
        return $this->hasMany(Comment::class)->withTrashed()->Recent();
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
        return $this->Recent()->with('user', 'latestComment')->paginate($limit);
    }


    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }



}
