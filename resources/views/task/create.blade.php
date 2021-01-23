@extends('layouts.app')

@section('content')
<h1 class="text-center">Create Task</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Create New Task</div>
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
                <form action="/store-tasks" method="POST">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Place your task name">
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control" id="description" cols="5" rows="5"
                            placeholder="Describe your task"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-success">Create task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection