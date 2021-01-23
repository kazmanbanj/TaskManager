@extends('layouts.app')

@section('title')
<title>{{ $task->name }}</title>
@endsection

@section('content')
    <h1 class="text-center">Task Item</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    {{ $task->name }}
                    <button type="button" class="btn btn-secondary float-right btn-sm"><i class="fa fa-cog" aria-hidden="false"></i></button>
                </div>
                <div class="card-body">
                    {{ $task->description }}
                    <br><br>
                    <a href="/tasks/{{$task->id}}/delete" class="btn btn-danger float-right">Delete</a>
                    <a href="/tasks/{{$task->id}}/edit" class="btn btn-info float-right mx-3">Edit</a>
                </div>
            </div>
        </div>
    </div>

@endsection