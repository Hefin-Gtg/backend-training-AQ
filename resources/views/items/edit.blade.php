@extends('layouts.head')
@section('title', 'Product Edit')
@section('content')
    {{ Form::open(['route' => ['items.update', $item->id], 'method' => 'put']) }}
    <div class="form-group">
        {{ Form::label('name', 'Name：') }}
        {{ Form::text('name', $item->name, ['class' => 'form-control']) }}
        @if ($errors->first('name'))
            <p class="validation text-danger mt-1">※{{$errors->first('name')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('description', 'Description：') }}
        {{ Form::textarea('description', $item->description, ['class' => 'form-control']) }}
        @if ($errors->first('description'))
            <p class="validation text-danger mt-1">※{{$errors->first('description')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('price', 'Price：') }}
        {{ Form::number('price', $item->price, ['class' => 'form-control']) }}
        @if ($errors->first('price'))
            <p class="validation text-danger mt-1">※{{$errors->first('price')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('stock_quantity', 'Stock：') }}
        {{ Form::number('stock_quantity', $item->stock_quantity, ['class' => 'form-control']) }}
        @if ($errors->first('stock_quantity'))
            <p class="validation text-danger mt-1">※{{$errors->first('stock_quantity')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('image_url', 'Image URL:') }}
        {{ Form::text('image_url', $item->image_url, ['class' => 'form-control']) }}
        @if ($errors->first('image_url'))
            <p class="validation text-danger mt-1">※{{$errors->first('image_url')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('category_id', 'Category') }}
        {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
        @if ($errors->first('category_id'))
            <p class="validation text-danger mt-1">※{{$errors->first('category_id')}}</p>
        @endif
    </div>
    
    <div class="form-group d-flex justify-content mt-4" style="gap: 20px;">  
        {{ Form::submit('Save', ['class' => 'btn btn-success']) }}
        <a href="{{ route('items.index') }}" class="btn btn-danger">Cancel</a>
    </div>
    {{ Form::close() }}
@endsection