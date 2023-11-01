<?php

namespace App\Repositories;

use App\Models\User;

interface UserRepositoryInterface
{
    public function __construct(User $user);

    /**
     * Stores a new instance of User in the database
     * @param \Illuminate\Support\Collection|array|int|string $data
     * @return User
     */
    public function store($data);

    /**
     * Returns all instances of User from the database
     * @param array|string $columns
     * @param array<array> $filters
     * @return \Illuminate\Database\Eloquent\Collection<int, User>
     */
    public function getList($columns=['*'], $filters=null);

    /**
     * Returns an instance of User from the given id
     * @param int|string $id
     * @return User
     */
    public function get($id);

    /**
     * Updates the data of an instance of User
     * @param \Illuminate\Support\Collection|array|int|string $data
     * @param int|string $id
     * @return User
     */
    public function update($data, $id);

    /**
     * Removes an instance of User from the database
     * @param int|string $id
     * @return int
     */
    public function destroy($id);
}
