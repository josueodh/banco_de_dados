<?php

namespace App\Policies;

use App\PublishingCompany;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PublishingCompanyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\PublishingCompany  $publishingCompany
     * @return mixed
     */
    public function view(User $user, PublishingCompany $publishingCompany)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\PublishingCompany  $publishingCompany
     * @return mixed
     */
    public function update(User $user, PublishingCompany $publishingCompany)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\PublishingCompany  $publishingCompany
     * @return mixed
     */
    public function delete(User $user, PublishingCompany $publishingCompany)
    {
        return $user->is_admin;
    }
}
