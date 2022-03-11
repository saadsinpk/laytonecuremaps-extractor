@extends('layouts.master')
@section('mainContent')
<div class="container">
    <div class="card mb-5 mb-xl-10">
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Profile Details</h3>
            </div>
        </div>
        <div id="kt_account_profile_details" class="collapse show" style="">
            <form action="{{ route('updateProfile') }}" enctype="multipart/form-data" method="POST" id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                @csrf
                <div class="card-body border-top p-9">
                    @if (\Session::has('success'))
                        <span class="text-success border-success">{!! \Session::get('success') !!}</span>
                    @elseif(\Session::has('error'))
                        <span class="text-danger border-danger">{!! \Session::get('error') !!}</span>
                    @endif
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <span class="d-block text-danger">{{ $error }}</span>
                        @endforeach
                        <span class="text-warning">If you're trying to change password then fill these fields.</span>
                        <br>
                    @endif
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
                        <div class="col-lg-8">
                            <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url({{ Auth::user()->img !== '' || !empty(Auth::user()->img) ? Auth::user()->img : 'assets/media/avatars/blank.png' }})">
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: none;"></div>
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                </label>
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                            </div>
                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Full Name</label>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="{{ Auth::user()->name; }}">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Email</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="Email" value="{{ Auth::user()->email; }}">
                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                    </div>
                    <hr>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Old Password</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="password" name="old_password" class="form-control form-control-lg form-control-solid" placeholder="Old Password" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">New Password</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="password" name="new_password" class="form-control form-control-lg form-control-solid" placeholder="New Password" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Confirm Password</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="password" name="confirm_password" class="form-control form-control-lg form-control-solid" placeholder="Confirm Password" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                    </div>
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                </div>
            <input type="hidden"><div></div></form>
        </div>
    </div>

</div>
@endsection