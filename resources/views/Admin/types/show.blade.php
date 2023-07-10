@extends('admin.layouts.base')

@section('contents')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $type->name }}</th>
                <td>{{ $type->description }}</td>

                <td>
                    <a class="btn btn-warning" href="{{ route('admin.type.edit', ['type' => $type->id]) }}">Edit</a>
                    <form action="{{ route('admin.type.destroy', ['type' => $type->id]) }}" method="post"
                        class="d-inline-block">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
