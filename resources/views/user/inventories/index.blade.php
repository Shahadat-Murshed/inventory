@extends('layout.master')

@section('title', 'All ')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">All Inventories</li>
        </ol>
    </nav>

    <h1>All Inventories</h1>
    <table id="usersTable" class="table">
        <thead>
            <tr>
                <th>Sl.</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventories as $inventory)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $inventory->name }}</td>
                    <td>{{ $inventory->description }}</td>
                    <td>
                        <a href="{{ route('user.inventories.show', $inventory->id) }}">
                            <button type="button" class="btn btn-outline-secondary"><i class="fa-regular fa-eye"></i></button>
                        </a>
                        <a href="{{ route('user.inventories.edit', $inventory->id) }}">
                            <button type="button" class="btn btn-outline-success"><i class="fa-regular fa-pen-to-square"></i></button>
                        </a>
                        <a href="{{ route('user.inventories.destroy', $inventory->id) }}" class="delete-data">
                            <button type="button" class="btn btn-outline-danger"><i class="fa-regular fa-trash-can"></i></button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#usersTable').DataTable({
                responsive: true,
                "columnDefs": [{
                        "width": "40%",
                        "targets": 1
                    },
                    {
                        "width": "40%",
                        "targets": 2
                    },
                    {
                        "width": "20%",
                        "targets": 3
                    }
                ]
            });
        });
    </script>
@endpush
