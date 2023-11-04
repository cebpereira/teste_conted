<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;

class UserService
{
    private $repoUser;

    public function __construct(
        UserRepositoryInterface $repoUser,
    )
    {
        $this->repoUser = $repoUser;
    }

    // Add your functions here...
}
