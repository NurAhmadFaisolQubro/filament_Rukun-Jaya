<?php

namespace App\Policies;

use App\Models\SetoranSlo;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SetoranSloPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasRole(['Admin Cabang Solo']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, SetoranSlo $setoranSlo): bool
    {
        return $user->hasRole(['Admin Cabang Solo']);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasRole(['Admin Cabang Solo']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, SetoranSlo $setoranSlo): bool
    {
        return $user->hasRole(['Admin Cabang Solo']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, SetoranSlo $setoranSlo): bool
    {
        return $user->hasRole(['Admin Cabang Solo']);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, SetoranSlo $setoranSlo): bool
    {
        return $user->hasRole(['Admin Cabang Solo']);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, SetoranSlo $setoranSlo): bool
    {
        return $user->hasRole(['Admin Cabang Solo']);
    }
}
