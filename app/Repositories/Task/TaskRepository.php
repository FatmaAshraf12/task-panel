<?php

namespace App\Repositories\Task;

use App\Models\Task;

class TaskRepository implements TaskRepositoryInterface
{ 
    protected $task;
    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    public function store($request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'admin_id'=>'required|exists:users,id',
            'user_id'=>'required|exists:users,id'
        ]);

        $this->task->create($validatedData);
        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }


    public function index()
    {
        $tasks =  $this->task->paginate(10);
        return view('tasks.index' , compact('tasks'));
    }

}