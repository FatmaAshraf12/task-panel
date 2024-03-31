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
        try {

            return User::role('user')->get();
        } catch (\Throwable $th) {
            return [];
        }
    }

    public function getAdmins()
    {
        try {
            return  User::role('admin')->get();
        } catch (\Throwable $th) {
            return [];
        }
    }

    public function getHeighestUsersWithTasks()
    {   try {
    
            return User::role('user')
            ->whereHas('tasks')
            ->withCount('tasks')
            ->orderByDesc('tasks_count')
            ->limit(10)
            ->get();
                //code...
        } catch (\Throwable $th) {
            return [];
        }
    }

}