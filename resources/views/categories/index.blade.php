@extends('layouts.head')
@section('title', 'Category List')
@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-end mb-3">
        {{ link_to_route('categories.create', 'New Category', [], ['class' => 'btn btn-success']) }}
    </div>

    <table class="table table-bordered table-hover">
        <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ link_to_route('categories.show', $category->id, ['category' => $category->id]) }}</td>
                <td>{{ $category->name }}</td>
                <td class="text-center">
                    <div class="d-inline-block">
                        <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a> 
                    </div>
                    
                    <div class="d-inline-block">
                        {{ Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete', 'onsubmit' => 'return confirm("Are you sure you want to delete this category?");', 'class' => 'd-inline']) }}
                        {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'title' => 'Delete Category']) }}
                        {{ Form::close() }}
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
