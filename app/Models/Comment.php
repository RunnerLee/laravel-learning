<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'article_id',
        'user_id',
        'original_content',
        'short_content',
        'compiled_content',
    ];


    public static function boot()
    {
        parent::boot();
        self::created(function($comment) {
            Notification::create([
                'from_user_id'  => $comment->user_id,
                'user_id'       => $comment->article->user_id,
                'article_id'    => $comment->article_id,
                'comment_id'    => $comment->id,
                'type'          => 'comment_article',
            ]);
            $comment->article->user->increment('notification_count', 1);
            $comment->article->increment('comment_count', 1);
        });
        self::deleted(function($comment) {
            $comment->article->decrement('comment_count', -1);
        });
    }


    public function article()
    {
        return $this->belongsTo(Article::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }


    public function scopeByUserId($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

}
