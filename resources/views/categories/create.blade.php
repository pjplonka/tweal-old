@extends('layouts.main')

@section('title', 'Create category')

@section('content')

    <div class="container">

        <form method="POST" action="{{ route('categories.store') }}">

            @csrf

            <div class="card">
                <div class="card-header">
                    <span>Create new category</span>
                </div>
                <div class="card-body">
                    @include('categories.form')
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('categories.index') }}" type="button" class="btn btn-secondary">Cancel</a>
                </div>
            </div>

        </form>

    </div>

@endsection
