@extends('layouts.master')
@section('mainContent')
<div class="container">
    <div class="card">
        <div class="card-header"><h3 class="card-title">Add New Make</h3></div>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="make_name" class="form-label">Name</label>
                    <input type="text" class="form-control" id='make_name' name='make_name'>
                </div>
                <br>
                <button class="btn btn-primary" type="submit">Add New</button>
            </form>
        </div>
    </div>
</div>
@endsection