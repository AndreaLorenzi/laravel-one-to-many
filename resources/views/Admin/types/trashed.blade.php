@extends('admin.layouts.base')

@section('contents')
    @if (session('delete_success'))
        @php $type = session('delete_success') @endphp
        <div class="alert alert-danger">
            The Type "{{ $type->name }}" has been permanently deleted
        </div>
    @endif


    @if (session('restore_success'))
        @php $type = session('restore_success') @endphp
        <div class="alert alert-success">
            The Type '{{ $type->name }}' has been restored
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trashedTypes as $type)
                <tr>
                    <th scope="row">{{ $type->name }}</th>
                    <td>{{ $type->description }}</td>
                    <td>
                        <form class="d-inline-block" method="POST"
                            action="{{ route('admin.type.restore', ['type' => $type->id]) }}">
                            @csrf
                            <button class="btn btn-warning">Restore</button>
                        </form>
                        <button type="button" class="btn btn-danger js-delete" data-bs-toggle="modal"
                            data-bs-target="#deleteModal" data-id="{{ $type->id }}">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Delete confirmation</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <form action="" data-template="{{ route('admin.project.harddelete', ['project' => '***']) }}"
                        method="post" class="d-inline-block" id="btn-confirm-delete">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Yes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{ $trashedTypes->links() }}
@endsection
