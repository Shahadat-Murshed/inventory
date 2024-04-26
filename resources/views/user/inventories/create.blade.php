@extends('layout.master')

@section('title', 'Create New')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('user.inventories.index') }}">All Inventories</a></li>
            <li class="breadcrumb-item active">Create New</li>
        </ol>
    </nav>
    <h2 class="mt-5">Create a New Inventory</h2>
    <div class="d-flex justify-content-center mt-5">
        <div class="col-md-8 card p-5">
            <form class="col-md-12" method="POST" action="{{ route('user.inventories.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name of the Inventory</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name of the inventory"
                        value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="description" value="{{ old('description') }}"
                        placeholder="Write a short Description (optional)."></textarea>
                </div>
                <div class="d-flex col-md-12 justify-content-end" style="padding-right: 0 !important;">
                    <button type="submit" class="btn btn-primary px-5">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
