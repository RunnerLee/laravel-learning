<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function articles()
    {
        return $this->hasMany(Article::class);
    }


    public function categories()
    {
        return $this->hasMany(Category::class);
    }


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    public function latestComment()
    {
        return $this->comments->recent()->first();
    }


    public function favoriteArticles()
    {
        return $this->belongsToMany(Article::class, 'favorites');
    }




}
