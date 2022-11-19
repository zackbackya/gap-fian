<?php

namespace App\Policies;

use App\Models\Testimoni;
use App\Models\UserLogin;
use Illuminate\Auth\Access\HandlesAuthorization;

class TestimoniPolicy
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
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(UserLogin $userLogin, Testimoni $testimoni)
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
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(UserLogin $userLogin, Testimoni $testimoni)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\UserLogin  $userLogin
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(UserLogin $userLogin, Testimoni $testimoni)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\UserLogin  $userLogin
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(UserLogin $userLogin, Testimoni $testimoni)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\UserLogin  $userLogin
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(UserLogin $userLogin, Testimoni $testimoni)
    {
        //
    }
}
