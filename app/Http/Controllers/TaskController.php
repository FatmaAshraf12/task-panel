<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create()
    {
        return view('tasks.create');
    }

    public function index()
    {
        return view('tasks.index');
    }

    
    public function statistics()
    {
        return view('tasks.statistics');
    }


}
