<?php

namespace App\Http\Controllers;

use App\Models\Task;
// use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('task.main')->with('tasks', Task::all());
    }

    public function show($taskId)
    {
        $task = Task::find($taskId);
        return view('task.show')->with('task', $task);
    }
}
