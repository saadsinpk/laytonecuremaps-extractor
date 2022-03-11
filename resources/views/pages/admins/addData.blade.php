@extends('layouts.master')
@section('mainContent')
<div class="container">
    <div class="card">
        <div class="card-header"><h3 class="card-title">Add New Admins</h3></div>
        <div class="card-body">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                <span class="d-block text-danger">{{ $error }}</span>
                @endforeach
                <br>
            @endif
            <form action="{{ route('storeUser') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id='email' name='email'>
                </div>
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id='username' name='username'>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 form-control form-control-lg form-control-solid" id="password" type="password" name="password" required="required" autocomplete="current-password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 form-control form-control-lg form-control-solid" id="password_confirmation" type="password" name="password_confirmation" required="required" autocomplete="current-password">
                </div>
                <br>
                <button class="btn btn-primary" type="submit">Add New</button>
            </form>
        </div>
    </div>
</div>
@endsection