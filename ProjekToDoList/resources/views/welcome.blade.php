@extends('layouts.main')

@push('head')

<title>To Do List App</title>
    
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">All Todo</div>
        <a href="{{ route('todo.create') }}" class="btn btn-primary btn-lg">Add Todo</a>
    </div>

    <table class="table table-striped table-dark">
        <tr>
            <th>Task Name</th>
            <th>Description</th>
            <th>Due Data</th>
            <th>Action</th>
        </tr>

        @foreach ($todos as $todo)
            <tr valign='middle'>
                <td>{{ $todo->name }}</td>
                <td>{{ $todo->work }}</td>
                <td>{{ $todo->due_date }}</td>
                <td>
                    <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-success btn-sm">Update</a>
                    <a href="{{ route('todo.delete', $todo->id) }}" class="btn btn-danger btn-sm">delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>