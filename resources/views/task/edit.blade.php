@extends('layouts.app')

@section('content')
<h1 class="text-center">Create Task</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Edit Task</div>
            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach($errors->all() as $error)
                        <li class="list-group-item">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="/tasks/{{$task->id}}/update-task" method="POST">
                    @csrf
                    <!-- <input type="hidden" name="task_id" value="{{ $task->id }}"> -->
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Place your task name" value="{{ $task->name }}">
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control" id="description" cols="5" rows="5" placeholder="Describe your task">{{ $task->description }}</textarea>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-success">Update task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection