@extends('layout.master')

@section('title', 'Profile |')

@section('content')
    <section>
        <div class="mb-3 mb-md-4 d-flex justify-content-between">
            <div class="h3 mb-0">Hi {{ Auth::user()->name }}</div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-6 mb-3 mb-md-4">
                <div class="col-12 mb-3">
                    <div class="card p-5">
                        <div class="mb-3 mb-md-4 d-flex justify-content-between">
                            <div class="h5 mb-0">Edit Profile Details</div>
                        </div>

                        <form class="col-md-12" method="POST" action="{{ route('profile.update') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName">Your Full Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter your name"
                                    value="{{ Auth::user()->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email"
                                    value="{{ Auth::user()->email }}" required>

                            </div>
                            <div class="d-flex col-md-12 justify-content-end" style="padding-right: 0 !important;">
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card p-5">
                        <div class="mb-3 mb-md-4 d-flex justify-content-between">
                            <div class="h5 mb-0">Change Password</div>
                        </div>

                        <form class="col-md-12" method="POST" action="{{ route('profile.password.update') }}">
                            @csrf
                            <div class="form-group">
                                <label for="current_password">Current Password</label>
                                <input type="password" name="current_password" class="form-control" id="current_password"
                                    placeholder="Enter Your Current Password" required>
                            </div>
                            <div class="form-group">
                                <label for="new_password">New Password</label>
                                <input type="password" name="password" class="form-control" id="new_password" placeholder="New Password"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" id="confirm_password"
                                    placeholder="Confirm Password" required>
                            </div>
                            <div class="d-flex col-md-12 justify-content-end" style="padding-right: 0 !important;">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-6 mb-3 mb-md-4">
                <div class="card p-5 h-100">
                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h5 mb-0">Update Image</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center" id="preview">
                            <img src="{{ asset(Auth::user()->image) }}" alt="Admin Avatar" height="600px" width="auto">
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-md-8">
                            <form class="col-md-12" method="POST" action="{{ route('profile.picture') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-5">
                                    <div class="d-flex col-md-12 justify-content-end align-items-center" style="padding-right: 0 !important;">
                                        <input style="cursor: pointer;" type="file" class="form-control-file" id="fileInput" name="image">
                                        <button type="submit" class="btn btn-primary">Upload</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="{{ asset('assets/assets') }}/js/imagePreview.js"></script>
@endpush
