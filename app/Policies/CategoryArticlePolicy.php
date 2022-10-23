<?php

namespace App\Policies;

use App\Models\CategoryArticle;
use App\Models\UserLogin;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryArticlePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\UserLogin  $userLogin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(UserLogin $userLogin)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\UserLogin  $userLogin
     * @param  \App\Models\CategoryArticle  $categoryArticle
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(UserLogin $userLogin, CategoryArticle $categoryArticle)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\UserLogin  $userLogin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(UserLogin $userLogin)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\UserLogin  $userLogin
     * @param  \App\Models\CategoryArticle  $categoryArticle
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(UserLogin $userLogin, CategoryArticle $categoryArticle)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\UserLogin  $userLogin
     * @param  \App\Models\CategoryArticle  $categoryArticle
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(UserLogin $userLogin, CategoryArticle $categoryArticle)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\UserLogin  $userLogin
     * @param  \App\Models\CategoryArticle  $categoryArticle
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(UserLogin $userLogin, CategoryArticle $categoryArticle)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\UserLogin  $userLogin
     * @param  \App\Models\CategoryArticle  $categoryArticle
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(UserLogin $userLogin, CategoryArticle $categoryArticle)
    {
        //
    }
}
