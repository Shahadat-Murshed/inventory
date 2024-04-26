@extends('layout.master')

@section('title', 'Create New')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('user.items.index') }}">All Items</a></li>
            <li class="breadcrumb-item active">View Item</li>
        </ol>
    </nav>
    <h2 class="mt-5">Viewing {{ $item->name }}</h2>
    <div class="d-flex col-md-12 justify-content-start" style="padding-right: 0 !important;">
        <a href="{{ url()->previous() }}" class="btn btn-danger px-5 mb-5"><i class="fa-solid fa-angle-left mr-3"></i>Back</a>
    </div>
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
                            value="{{ $item->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Parent Inventory</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Item name"
                            value="{{ $item->inventory->name }}" readonly>
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
                            value="{{ $item->quantity }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" rows="5" name="description" placeholder="Write a short Description (optional)."
                            readonly>{{ $item->description }}</textarea>
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
                        <img src="{{ $item->image }}" alt="Item Image" height="600px" width="auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('assets/assets') }}/js/imagePreview.js"></script>
@endpush
