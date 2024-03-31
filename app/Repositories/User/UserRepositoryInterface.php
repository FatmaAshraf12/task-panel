<?php


namespace App\Repositories\User;

interface UserRepositoryInterface
{
    public function getUsers();
    public function getAdmins();
    public function getHeighestUsersWithTasks();

}