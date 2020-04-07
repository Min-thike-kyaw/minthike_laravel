<?php

namespace App\Policies;

use App\Recepie;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RecepiePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any recepies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the recepie.
     *
     * @param  \App\User  $user
     * @param  \App\Recepie  $recepie
     * @return mixed
     */
    public function view(User $user, Recepie $recepie)
    {
        return $recepie->author_id==$user->id;
    }

    /**
     * Determine whether the user can create recepies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the recepie.
     *
     * @param  \App\User  $user
     * @param  \App\Recepie  $recepie
     * @return mixed
     */
    public function update(User $user, Recepie $recepie)
    {
        //
    }

    /**
     * Determine whether the user can delete the recepie.
     *
     * @param  \App\User  $user
     * @param  \App\Recepie  $recepie
     * @return mixed
     */
    public function delete(User $user, Recepie $recepie)
    {
        //
    }

    /**
     * Determine whether the user can restore the recepie.
     *
     * @param  \App\User  $user
     * @param  \App\Recepie  $recepie
     * @return mixed
     */
    public function restore(User $user, Recepie $recepie)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the recepie.
     *
     * @param  \App\User  $user
     * @param  \App\Recepie  $recepie
     * @return mixed
     */
    public function forceDelete(User $user, Recepie $recepie)
    {
        //
    }
}
