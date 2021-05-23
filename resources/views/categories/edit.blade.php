@extends('layouts.main')

@section('title', 'Edit category')

@section('content')

    <div class="container">

        <form method="POST" action="{{ route('categories.update', ['category' => $category->id]) }}">

            @method('put')
            @csrf

            <div class="card">
                <div class="card-header">
                    <span>Edit category</span>
                </div>
                <div class="card-body">
                    @include('categories.form', ['edit' => true])
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('categories.index') }}" type="button" class="btn btn-secondary">Cancel</a>
                </div>
            </div>

        </form>

    </div>

@endsection
