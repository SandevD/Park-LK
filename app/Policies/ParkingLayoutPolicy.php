<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\ParkingLayout;
use App\Models\User;

class ParkingLayoutPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any ParkingLayout');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ParkingLayout $parkinglayout): bool
    {
        return $user->checkPermissionTo('view ParkingLayout');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create ParkingLayout');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ParkingLayout $parkinglayout): bool
    {
        return $user->checkPermissionTo('update ParkingLayout');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ParkingLayout $parkinglayout): bool
    {
        return $user->checkPermissionTo('delete ParkingLayout');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any ParkingLayout');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ParkingLayout $parkinglayout): bool
    {
        return $user->checkPermissionTo('restore ParkingLayout');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any ParkingLayout');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, ParkingLayout $parkinglayout): bool
    {
        return $user->checkPermissionTo('replicate ParkingLayout');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder ParkingLayout');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ParkingLayout $parkinglayout): bool
    {
        return $user->checkPermissionTo('force-delete ParkingLayout');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any ParkingLayout');
    }
}
