<?php

namespace App\Repositories;

use App\Models\User;

class UserRepositoryEloquent implements UserRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Stores a new instance of User in the database
     * @param \Illuminate\Support\Collection|array|int|string $data
     * @return User
     */
    public function store($data)
    {
        return $this->user->create($data);
    }

    /**
     * Returns all instances of User from the database
     * @param array|string $columns
     * @param array<array> $filters
     * @return \Illuminate\Database\Eloquent\Collection<int, User>
     */
    public function getList($columns=['*'], $filters=null)
    {
        return $this->user->where($filters)->get($columns);
    }

    /**
     * Returns an instance of User from the given id
     * @param int|string $id
     * @return User
     */
    public function get($id)
    {
        return $this->user->find($id);
    }

    /**
     * Updates the data of an instance of User
     * @param \Illuminate\Support\Collection|array|int|string $data
     * @param int|string $id
     * @return User
     */
    public function update($data, $id)
    {
        $user = $this->user->find($id);
        $user->update($data);
        return $user;
    }

    /**
     * Removes an instance of User from the database
     * @param int|string $id
     * @return int
     */
    public function destroy($id)
    {
        return $this->user->find($id)->delete();
    }
}
