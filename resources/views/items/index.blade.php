@extends('layouts.head')

@section('title', 'Product List')

@section('content')

<div class="d-flex justify-content-end align-items-center mb-4">
    <a href="{{ route('items.create') }}" class="btn btn-success btn-lg">
        <i class="fas fa-plus"></i> New Product
    </a>
</div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ link_to_route('items.show', $item->id, ['item' => $item->id], ['class' => 'text-primary font-weight-bold']) }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ Str::limit($item->description, 80) }}</td>
                    <td>${{ number_format($item->price, 2) }}</td>
                    <td>{{ $item->stock_quantity }} pcs</td>
                    <td>{{ $item->image_url }}</td>
                    <td class="d-flex" style="gap: 10px;">
                        <a href="{{ route('items.edit', ['item' => $item->id]) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a> 
                
                        {{ Form::open(['route' => ['items.destroy', $item->id], 'method' => 'delete']) }}
                            {{ Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'title' => 'Delete', 'onclick' => 'return confirm("Are you sure you want to delete this item?")']) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
