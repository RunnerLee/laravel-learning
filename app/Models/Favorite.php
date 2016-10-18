<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{

    protected $fillable = ['user_id', 'article_id'];


    public static function boot()
    {
        parent::boot();
        self::created(function($favorite) {
            Notification::create([
                'from_user_id'  => $favorite->user_id,
                'user_id'       => $favorite->article->user_id,
                'article_id'    => $favorite->article_id,
                'comment_id'    => 0,
                'type'          => 'favorite_article',
            ]);
            $favorite->article->user->increment('notification_count', 1);
            $favorite->article->increment('favorite_count', 1);
        });
        self::deleted(function($favorite) {
            $favorite->article->decrement('favorite_count', 1);
        });
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function article()
    {
        return $this->belongsTo(Article::class);
    }


    public function scopeByUserId($query, $userId)
    {
        return $query->where('user_id', $userId);
    }





}
