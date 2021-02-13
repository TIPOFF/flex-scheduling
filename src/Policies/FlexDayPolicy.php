<?php

declare(strict_types=1);

namespace Tipoff\FlexScheduling\Policies;

use Tipoff\Support\Contracts\Models\UserInterface;
use Illuminate\Auth\Access\HandlesAuthorization;
use Tipoff\FlexScheduling\Models\FlexDay;

class FlexDayPolicy
{
    use HandlesAuthorization;

    public function viewAny(UserInterface $user): bool
    {
        return $user->hasPermissionTo('view flex days') ? true : false;
    }

    public function view(UserInterface $user, FlexDay $flexDay): bool
    {
        return $user->hasPermissionTo('view flex days') ? true : false;
    }

    public function create(UserInterface $user): bool
    {
        return false;
    }

    public function update(UserInterface $user, FlexDay $flexDay): bool
    {
        return $user->hasPermissionTo('update flex days') ? true : false;
    }

    public function delete(UserInterface $user, FlexDay $flexDay): bool
    {
        return false;
    }

    public function restore(UserInterface $user, FlexDay $flexDay): bool
    {
        return false;
    }

    public function forceDelete(UserInterface $user, FlexDay $flexDay): bool
    {
        return false;
    }
}
