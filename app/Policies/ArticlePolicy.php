<?php

namespace App\Policies;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlePolicy
{
    use HandlesAuthorization;


    public function create(User $user, Category $category)
    {
        return $user->id === $category->user_id;
    }


    public function delete(User $user, Article $article)
    {
        return $user->id === $article->user_id;
    }
}
