<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{

    protected $fillable = ['user_id', 'from_user_id', 'content', 'article_id', 'comment_id', 'type'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }


    public function article()
    {
        return $this->belongsTo(Article::class);
    }


    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }


    public function operate()
    {
        switch ($this->type) {
            case 'comment_article':
                return 'commented';
            case 'favorite_article':
                return 'collected';
        }
    }


}
