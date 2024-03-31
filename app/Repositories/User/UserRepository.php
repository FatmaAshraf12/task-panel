<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{ 
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }


    public function getUsers()
    {
        return User::role('user')->get();

    }

    public function getAdmins()
    {
        return  User::role('admin')->get();
    }

    public function getHeighestUsersWithTasks()
    {
        return User::role('user')
        ->withCount('tasks')
        ->orderByDesc('tasks_count')
        ->limit(10)
        ->get();
    }

}