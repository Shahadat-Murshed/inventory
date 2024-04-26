@extends('layout.master')

@section('title', 'Dashboard |')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.users') }}">All Users</a></li>
        </ol>
    </nav>

    <h1>All Users</h1>
    <table id="usersTable" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>image</th>
                <th>role</th>
                <th>status</th>
                <th>joined</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><img class="avatar-xs rounded-circle" src="{{ $user->image }}" alt="Image Description"></td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->status === 1 ? 'Active' : 'Inactive' }}</td>
                    <td>{{ $user->created_at }}</td>
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
            });
        });
    </script>
@endpush
