@extends('layouts.main')

@section('title', 'Create article')

@section('content')

    <div class="container">

        <form method="POST" action="{{ route('articles.store') }}">

            @csrf

            <div class="card">
                <div class="card-header">
                    <span>Create new article</span>
                </div>
                <div class="card-body">
                    @include('articles.form')
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('articles.index') }}" type="button" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>

@endsection
