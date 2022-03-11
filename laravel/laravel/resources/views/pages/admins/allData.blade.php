@extends('layouts.master')
@section('mainContent')

<div class="container">
    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">All Make Data</span>
            </h3>
            <div class="float-end">
                <a href="{{ route('exportUesrs') }}" class="btn btn-sm btn-primary">Export</a>
            </div>
        </div>
        <div class="card-body py-3">
            @if (\Session::has('success'))
                <span class="text-success border-success">{!! \Session::get('success') !!}</span>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                <span class="d-block text-danger">Something went wrong! Please try again.</span>
                @endforeach
                <br>
            @endif
            <div class="table-responsive">
                <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                    <thead>
                        <tr class="fw-bolder text-muted">
                            <th class="min-w-150px">Id</th>
                            <th class="min-w-150px">Name</th>
                            <th class="min-w-140px">Username</th>
                            <th class="min-w-140px">Email</th>
                            <th class="min-w-100px text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($allUsers as $row)
                        <tr>
                            <td>
                                <span class="text-dark fw-bolder text-hover-primary fs-6">{{ $row->id }}</span>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder text-hover-primary fs-6">{{ $row->name }}</span>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{ $row->username }}</span>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{ $row->email }}</span>
                            </td>
                            <td class="text-end">
                                <form action="{{ route('deleteUser') }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" value="{{ $row->id }}" name="user_id">
                                    <button type="submit" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection