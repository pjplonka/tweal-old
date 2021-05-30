@extends('layouts.main')

@section('title', 'Edit image')

@section('content')

    <div class="container">

        <form method="POST" action="{{ route('images.update', ['image' => $image->id]) }}">

            @method('put')
            @csrf

            <div class="card">
                <div class="card-header">
                    <span>Edit image</span>
                </div>
                <div class="card-body">

                    <div class="mb-4">
                        <img src="{{ $image->renderPath() }}" width="300" />
                    </div>

                    @include('images.form', ['edit' => true])
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('images.index') }}" type="button" class="btn btn-secondary">Cancel</a>
                </div>
            </div>

        </form>

    </div>

@endsection
