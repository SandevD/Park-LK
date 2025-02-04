<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\ParkingLocation;
use App\Models\User;

class ParkingLocationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any ParkingLocation');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ParkingLocation $parkinglocation): bool
    {
        return $user->checkPermissionTo('view ParkingLocation');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create ParkingLocation');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ParkingLocation $parkinglocation): bool
    {
        return $user->checkPermissionTo('update ParkingLocation');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ParkingLocation $parkinglocation): bool
    {
        return $user->checkPermissionTo('delete ParkingLocation');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any ParkingLocation');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ParkingLocation $parkinglocation): bool
    {
        return $user->checkPermissionTo('restore ParkingLocation');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any ParkingLocation');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, ParkingLocation $parkinglocation): bool
    {
        return $user->checkPermissionTo('replicate ParkingLocation');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder ParkingLocation');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ParkingLocation $parkinglocation): bool
    {
        return $user->checkPermissionTo('force-delete ParkingLocation');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any ParkingLocation');
    }
}
