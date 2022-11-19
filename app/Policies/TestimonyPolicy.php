<?php

namespace App\Policies;

use App\Models\Testimony;
use App\Models\UserLogin;
use Illuminate\Auth\Access\HandlesAuthorization;

class TestimonyPolicy
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
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(UserLogin $userLogin, Testimony $testimony)
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
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(UserLogin $userLogin, Testimony $testimony)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\UserLogin  $userLogin
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(UserLogin $userLogin, Testimony $testimony)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\UserLogin  $userLogin
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(UserLogin $userLogin, Testimony $testimony)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\UserLogin  $userLogin
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(UserLogin $userLogin, Testimony $testimony)
    {
        //
    }
}
