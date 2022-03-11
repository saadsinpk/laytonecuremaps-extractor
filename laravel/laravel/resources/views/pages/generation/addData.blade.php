@extends('layouts.master')
@section('mainContent')
<div class="container">
    <div class="card">
        <div class="card-header"><h3 class="card-title">Add New Modal</h3></div>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="gen_name" class="form-label">Name</label>
                    <input type="text" class="form-control" id='gen_name' name='gen_name'>
                </div>
                <div class="form-group">
                    <label for="gen_start_year" class="form-label">Start Year</label>
                    <input type="text" class="form-control" id='gen_start_year' name='gen_start_year'>
                </div>
                <div class="form-group">
                    <label for="gen_end_year" class="form-label">Start Year</label>
                    <input type="text" class="form-control" id='gen_end_year' name='gen_end_year'>
                </div>
                <br>
                <button class="btn btn-primary" type="submit">Add New</button>
            </form>
        </div>
    </div>
</div>
@endsection