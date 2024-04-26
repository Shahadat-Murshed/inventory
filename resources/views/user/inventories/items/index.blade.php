@extends('layout.master')

@section('title', 'All ')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">All Items</li>
        </ol>
    </nav>

    <h1>All Items of {{ $inventory->name }}</h1>
    <table id="usersTable" class="table">
        <thead>
            <tr>
                <th>Sl.</th>
                <th>Name</th>
                <th>Inventory</th>
                <th>Description</th>
                <th>image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->inventory->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td><img class="avatar-xl rounded-circle" src="{{ $item->image }}" alt="Item Image"></td>
                    <td>
                        <a href="{{ route('user.items.show', $item->id) }}">
                            <button type="button" class="btn btn-outline-secondary"><i class="fa-regular fa-eye"></i></button>
                        </a>
                        <a href="{{ route('user.items.edit', $item->id) }}">
                            <button type="button" class="btn btn-outline-success"><i class="fa-regular fa-pen-to-square"></i></button>
                        </a>
                        <a href="{{ route('user.items.destroy', $item->id) }}" class="delete-data">
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
                    "width": "15%",
                    "targets": 5
                }]
            });
        });
    </script>
@endpush
