@extends('layouts.master')
@section('mainContent')

    <div class="d-md-none">
        <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
        <div id="kt_aside_menu_wrapper" class="menu-fit">
            <div class="menu-item menu-accordion {{ Route::is('allMakeData') ? 'show' : '' }}">
                <a class="menu-link {{ Route::is('allMakeData') ? 'active' : '' }}" href="{{ route('allMakeData') }}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Make</span>
                </a>
            </div>
            <div class="menu-item menu-accordion {{ Route::is('allModalData') ? 'show' : '' }}">
                <a class="menu-link {{ Route::is('allModalData') ? 'active' : '' }}" href="{{ route('allModalData') }}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Model</span>
                </a>
            </div>
            <div class="menu-item menu-accordion {{ Route::is('allGenData') ? 'show' : '' }}">
                <a class="menu-link {{ Route::is('allGenData') ? 'active' : '' }}" href="{{ route('allGenData') }}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Generation</span>
                </a>
            </div>
            <div class="menu-item menu-accordion {{ Route::is('allEngineData') ? 'show' : '' }}">
                <a class="menu-link {{ Route::is('allEngineData') ? 'active' : '' }}" href="{{ route('allEngineData') }}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Engine</span>
                </a>
            </div>
            <div class="menu-item menu-accordion {{ Route::is('allDataData') ? 'show' : '' }}">
                <a class="menu-link {{ Route::is('allDataData') ? 'active' : '' }}" href="{{ route('allDataData') }}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Data</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection