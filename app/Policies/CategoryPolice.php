<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolice
{
    use HandlesAuthorization;


    public function update(User $user, Category $category)
    {
        return $user->id === $category->user_id;
    }


    public function delete(User $user, Category $category)
    {
        return $user->id === $category->user_id;
    }
}
