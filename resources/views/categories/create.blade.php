@extends('layouts.head')
@section('title', 'Create Category')
@section('content')
    <div class="container mt-4">
        {{ Form::open(['route' => 'categories.store']) }}
        
        <div class="form-group">
            {{ Form::label('name', 'Category Name') }}
            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter category name', 'autofocus' => true]) }}
            @if ($errors->first('name'))
                <p class="validation text-danger mt-1">※{{$errors->first('name')}}</p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::submit('Create', ['class' => 'btn btn-success btn-block mt-3']) }}
            <a href="{{ route('categories.index') }}" class="btn btn-danger btn-block mt-3">Cancel</a>
        </div>

        {{ Form::close() }}
    </div>
@endsection
