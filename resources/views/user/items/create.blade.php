@extends('layout.master')

@section('title', 'Create New')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('user.items.index') }}">All Items</a></li>
            <li class="breadcrumb-item active">Create New</li>
        </ol>
    </nav>
    <h2 class="mt-5">Create a New Item</h2>
    <form class="col-md-12" method="POST" action="{{ route('user.items.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6 col-xl-6 mb-3 mb-md-4">
                <div class="col-12 mb-3">
                    <div class="card p-5">
                        <div class="mb-3 mb-md-4 d-flex justify-content-between">
                            <div class="h5 mb-0">Primary Info</div>
                        </div>

                        @csrf
                        <div class="form-group">
                            <label for="name">Name of the Item</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Item name"
                                value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Parent Inventory</label>
                            <select name="inventory_id" class="form-control" id="exampleFormControlSelect1">
                                <option value="">--- Select an inventory ---</option>
                                @foreach ($inventories as $inventory)
                                    <option value={{ $inventory->id }}>{{ $inventory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card p-5">
                        <div class="mb-3 mb-md-4 d-flex justify-content-between">
                            <div class="h5 mb-0">Detail Info</div>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Enter Quantity"
                                value="{{ old('quantity') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" rows="5" name="description" value="{{ old('description') }}"
                                placeholder="Write a short Description (optional)."></textarea>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-6 mb-3 mb-md-4">
                <div class="card p-5 h-100">
                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h5 mb-0">Image</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center" id="preview">
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <div class="col-md-8 mt-5">
                                <input style="cursor: pointer;" type="file" class="form-control-file" id="fileInput" name="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex col-md-12 justify-content-center" style="padding-right: 0 !important;">
            <button type="submit" class="btn btn-primary px-5">Create</button>
            <a href="{{ url()->previous() }}" class="btn btn-danger px-5 ml-3">Cancel</a>
        </div>
    </form>
@endsection
@push('scripts')
    <script src="{{ asset('assets/assets') }}/js/imagePreview.js"></script>
@endpush
