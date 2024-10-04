@extends('layouts.head')
@section('title', 'Edit Category')
@section('content')
    <div class="container mt-4">
        {{ Form::open(['route' => ['categories.update', $category->id], 'method' => 'put']) }}
        <div class="form-group">
            {{ Form::label('name', 'Name：') }}
            {{ Form::text('name', $category->name, ['class' => 'form-control']) }}
            @if ($errors->first('name'))
                <p class="validation text-danger mt-1">※{{$errors->first('name')}}</p>
            @endif
        </div>
        <div class="form-group">
            {{ Form::submit('Save', ['class' => 'btn btn-success btn-block mt-3']) }}
            <a href="{{ route('categories.index') }}" class="btn btn-danger btn-block mt-3">Cancel</a>
        </div>
        {{ Form::close() }}
    </div>
@endsection