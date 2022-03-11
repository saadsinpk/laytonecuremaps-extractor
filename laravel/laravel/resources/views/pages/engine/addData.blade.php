@extends('layouts.master')
@section('mainContent')
<div class="container">
    <div class="card">
        <div class="card-header"><h3 class="card-title">Add New Modal</h3></div>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="engine_name" class="form-label">Name</label>
                    <input type="text" class="form-control" id='engine_name' name='engine_name'>
                </div>
                <div class="form-group">
                    <label for="engine_fuel_type_id" class="form-label">Fuel Type Id</label>
                    <input type="text" class="form-control" id='engine_fuel_type_id' name='engine_fuel_type_id'>
                </div>
                <div class="form-group">
                    <label for="engine_fuel_type_name" class="form-label">Fulet Type Name</label>
                    <input type="text" class="form-control" id='engine_fuel_type_name' name='engine_fuel_type_name'>
                </div>
                <br>
                <button class="btn btn-primary" type="submit">Add New</button>
            </form>
        </div>
    </div>
</div>
@endsection