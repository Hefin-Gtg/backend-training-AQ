@extends('layouts.head')

@section('title', 'Product Detail')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{ $item->name }}</h3>
            <p class="card-text">
                <strong>ID:</strong> {{ $item->id }} <br>
                <strong>Category:</strong> {{ $item->category->name }} <br>
                <strong>Description:</strong> {{ $item->description }} <br>
                <strong>Price:</strong> ${{ number_format($item->price, 2) }} <br>
                <strong>Stock:</strong> {{ $item->stock_quantity }} pcs <br>
                <strong>Image URL:</strong> {{ $item->image_url }} <br>
            </p>

            <!-- Tanggal Pembuatan dan Pembaruan -->
            <p class="text-muted">
                <small>Created Date: {{ $item->created_at->format('d M Y, H:i:s') }}</small><br>
                <small>Updated Date: {{ $item->updated_at->format('d M Y, H:i:s') }}</small>
            </p>
        </div>
    </div>
</div>
@endsection
