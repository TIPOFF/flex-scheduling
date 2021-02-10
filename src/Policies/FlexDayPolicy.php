<?php

namespace Tipoff\FlexScheduling\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Tipoff\FlexScheduling\Models\FlexDay;

class FlexDayPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('view flex days') ? true : false;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FlexDay  $flexDay
     * @return mixed
     */
    public function view(User $user, FlexDay $flexDay)
    {
        return $user->hasPermissionTo('view flex days') ? true : false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FlexDay  $flexDay
     * @return mixed
     */
    public function update(User $user, FlexDay $flexDay)
    {
        return $user->hasPermissionTo('update flex days') ? true : false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FlexDay  $flexDay
     * @return mixed
     */
    public function delete(User $user, FlexDay $flexDay)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FlexDay  $flexDay
     * @return mixed
     */
    public function restore(User $user, FlexDay $flexDay)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FlexDay  $flexDay
     * @return mixed
     */
    public function forceDelete(User $user, FlexDay $flexDay)
    {
        return false;
    }
}
