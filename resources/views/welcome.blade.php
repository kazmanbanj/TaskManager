@extends('layouts.app')

@section('title')
<title>Task Manager App</title>
@endsection

@section('content')
<div class="container overflow-hidden">
  <div class="row gy-5">
    <div class="col-6 p-5 mt-5">
      <div class="p-3 border bg-light text-center"><a href="/tasks" class="btn btn-outline-primary active" role="button" aria-pressed="true">Show All Tasks</a></div>
    </div>
    <div class="col-6 p-5 mt-5">
      <div class="p-3 border bg-light text-center"><a href="/new-task" class="btn btn-outline-info active" role="button" aria-pressed="true">Create New Task</a></div>
    </div>
    <!-- <div class="col-6 p-5">
      <div class="p-3 border bg-light"><button type="button" class="btn btn-outline-secondary">Secondary</button></div>
    </div>
    <div class="col-6 p-5">
      <div class="p-3 border bg-light"><button type="button" class="btn btn-outline-secondary">Secondary</button></div>
    </div> -->
  </div>
</div>

@endsection