<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Services\TaskService;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class TaskController extends Controller
{
    protected $taskService;
    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function create()
    {
        return $this->taskService->create();
    }

    public function store(Request $request)
    {
        return $this->taskService->store($request);
    }

    public function index()
    {
        return $this->taskService->index();

    }

    
    public function statistics()
    {
        return $this->taskService->statistics();

    }


}
