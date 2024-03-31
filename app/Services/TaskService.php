<?php


namespace App\Services;

use App\Repositories\Task\TaskRepository;
use App\Repositories\User\UserRepository;

class TaskService
{
    protected $taskRepository , $userRepository;

    public function __construct(TaskRepository $taskRepository , UserRepository $userRepository)
    {
        $this->taskRepository = $taskRepository;
        $this->userRepository = $userRepository;

    }

    public function create()
    {
        $admins = $this->userRepository->getAdmins();
        $users = $this->userRepository->getUsers();

        return view('tasks.create' ,compact('users', 'admins'));
    }

    public function store($request)
    {
        return $this->taskRepository->store($request);
    }

    public function index()
    {
        return $this->taskRepository->index();
    }


    public function statistics()
    {
        $users =  $this->userRepository->getHeighestUsersWithTasks();
        return view('tasks.statistics',compact('users'));
    }
}