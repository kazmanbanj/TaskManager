<?php

namespace App\Http\Controllers;

use App\Models\Task;
// use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('task.main')->with('tasks', $tasks);
    }

    public function show(Task $task)
    {
        return view('task.show')->with('task', $task);
    }

    public function create()
    {
        return view('task.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:8|max:20',
            'description' => 'required',
        ]);
        $data = request()->all();

        $task = new Task();

        $task->name = $data['name'];
        $task->description = $data['description'];
        $task->completed = false;

        $task->save();

        session()->flash('success', 'Task created successfully.');

        return redirect('/tasks');
    }

    public function edit(Task $task)
    {
        return view('task.edit')->with('task', $task);
    }

    public function update(Task $task)
    {
        $this->validate(request(), [
            'name' => 'required|min:8|max:20',
            'description' => 'required',
        ]);
        $data = request()->all();

        $task->name = $data['name'];
        $task->description = $data['description'];
        $task->completed = false;

        $task->save();

        session()->flash('success', 'Task updated successfully.');

        return redirect('/tasks');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        session()->flash('delete', 'Task deleted successfully.');

        return redirect('/tasks');
    }

    public function complete(Task $task)
    {
        $task->completed = true;
        $task->save();

        session()->flash('success', 'Task completed successfully');

        return redirect('/tasks');
    }

    public function settings()
    {
        return view('task.settings');
    }
}
