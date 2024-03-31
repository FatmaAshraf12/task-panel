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
        try {
    
           $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'admin_id'=>'required|exists:users,id',
                'user_id'=>'required|exists:users,id'
            ]);

            $this->task->create($validatedData);
            return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('tasks.create')->with('error', 'Please Try Again!');

        }
    }


    public function index()
    {   
        try {

            $tasks =  $this->task->paginate(10);
        } catch (\Throwable $th) {
            $tasks =  [];
          }
          return view('tasks.index' , compact('tasks')); 
        
    }

}