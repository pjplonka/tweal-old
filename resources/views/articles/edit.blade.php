@extends('layouts.main')

@section('title', 'Edit article')

@section('content')

    <div class="container-fluid">

        <form method="POST" action="{{ route('articles.update', ['article' => $article->id]) }}">

            @method('put')
            @csrf

            <div class="card">
                <div class="card-header">
                    <span>Edit article</span>
                </div>
                <div class="card-body">
                    @include('articles.form', ['edit' => true])
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('articles.index') }}" type="button" class="btn btn-secondary">Cancel</a>
                </div>
            </div>

        </form>

    </div>

@endsection
