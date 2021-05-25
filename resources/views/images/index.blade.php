@extends('layouts.main')

@section('title', 'Images list')

@section('content')

    <div class="container">

        <div class="card">
            <div class="card-header">
                <span>Images list</span>
                <a class="float-right" href="{{ route('images.create') }}">Add new image</a>
            </div>
            <div class="card-body">
                <table class="table table-borderless custom-table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Filename</th>
                        <th scope="col">Image</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($images as $image)
                        <tr>
                            <th scope="row">{{ $image->id }}</th>
                            <td>{{ $image->full_name }}</td>
                            <td><img src="data:image/{{ $image->extension }};base64,{{ base64_encode($image->content) }}" width="100" /></td>
                            <td class="actions">
                                <a href="{{ route('images.edit', ['image' => $image->id]) }}" class="mr-2"><i
                                        class="bi-pencil icon"></i></a>
                                <form method="post" style="display: inline"
                                      action="{{ route('images.destroy', ['image' => $image->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="delete-prompt" type="submit"
                                            style="border:none; background: none; cursor:pointer;"><i
                                            class="bi-trash icon"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
