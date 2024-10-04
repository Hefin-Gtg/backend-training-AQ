@extends('layouts.head')
@section('title', 'Category Details')
@section('content')
<div class="container mt-4">
    <div class="card mb-4">
        <div class="card-header">
            <h5>{{ $category->name }}</h5>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $category->id }}</p>
            <p><strong>Created Date:</strong> {{ $category->created_at->format('d M Y') }}</p>
            <p><strong>Updated Date:</strong> {{ $category->updated_at->format('d M Y') }}</p>
        </div>
    </div>

    <h4>Products in this category:</h4>
    <ul class="list-group">
        @foreach($category->items as $item)
            <li class="list-group-item">
                {{ link_to_route('items.show', $item->name, ['item'=> $item->id]) }}
            </li>
        @endforeach
    </ul>
    
    <div class="mt-3">
        <a href="{{ route('categories.index') }}" class="btn btn-danger">Back</a>
    </div>
</div>
@endsection
