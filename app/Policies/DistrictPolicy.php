<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\District;
use App\Models\User;

class DistrictPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any District');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, District $district): bool
    {
        return $user->checkPermissionTo('view District');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create District');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, District $district): bool
    {
        return $user->checkPermissionTo('update District');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, District $district): bool
    {
        return $user->checkPermissionTo('delete District');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any District');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, District $district): bool
    {
        return $user->checkPermissionTo('restore District');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any District');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, District $district): bool
    {
        return $user->checkPermissionTo('replicate District');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder District');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, District $district): bool
    {
        return $user->checkPermissionTo('force-delete District');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any District');
    }
}
