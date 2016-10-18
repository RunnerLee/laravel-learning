<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\Access\Authorizable;

class Category extends Model
{

    use Authorizable, SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'title',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function articles()
    {
        return $this->hasMany(Article::class);
    }


    public function comments()
    {
        return $this->hasManyThrough(Comment::class, Article::class);
    }


    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

}
