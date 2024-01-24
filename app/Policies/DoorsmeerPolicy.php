<?php

namespace App\Policies;

use App\Models\User;
use App\Models\doorsmeer;
use Illuminate\Auth\Access\Response;

class DoorsmeerPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, doorsmeer $doorsmeer): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, doorsmeer $doorsmeer): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, doorsmeer $doorsmeer): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, doorsmeer $doorsmeer): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, doorsmeer $doorsmeer): bool
    {
        //
    }
}
