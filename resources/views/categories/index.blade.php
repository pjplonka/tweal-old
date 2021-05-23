@extends('layouts.main')

@section('title', 'Categories list')

@section('content')

    <div class="container">

        <div class="card">
            <div class="card-header">
                <span>Categories list</span>
                <a class="float-right" href="{{ route('categories.create') }}">Add new category</a>
            </div>
            <div class="card-body">
                <table class="table table-borderless custom-table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                            <td class="actions">
                                <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="mr-2"><i
                                        class="bi-pencil icon"></i></a>
                                <form method="post" style="display: inline"
                                      action="{{ route('categories.destroy', ['category' => $category->id]) }}">
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
