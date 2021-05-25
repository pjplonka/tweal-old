@extends('layouts.main')

@section('title', 'Create image')

@section('content')

    <div class="container">

        <form method="POST" action="{{ route('images.store') }}" enctype="multipart/form-data">

            @csrf

            <div class="card">
                <div class="card-header">
                    <span>Create new image</span>
                </div>
                <div class="card-body">
                    @include('images.form')
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('images.index') }}" type="button" class="btn btn-secondary">Cancel</a>
                </div>
            </div>

        </form>

    </div>

@endsection
