<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [
        'article_id',
        'user_id',
        'comment_id',
        'origin_content',
        'short_content',
    ];


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

}
