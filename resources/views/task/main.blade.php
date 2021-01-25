@extends('layouts.app')

@section('title')
<title>Task List</title>
@endsection

@section('content')
<h1 class="text-center">Task List</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Tasks
                
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($tasks as $task)
                    <li class="list-group-item">
                        {{ $task->name }}
                        @if(!$task->completed)
                        <a href="/tasks/{{ $task->id }}/complete" class="btn btn-warning btn-sm float-right">Complete</a>
                        @endif

                        <a href="/tasks/{{ $task->id }}" class="btn btn-primary btn-sm float-right mx-3">View</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection