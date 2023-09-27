@extends('layouts.master')
@push('body')
    class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-open"
@endpush
@section('app')

    @include('layouts.navbar')
    @include('layouts.sidebar')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">@yield('heading')</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                @breadcrumbs
                            </ul>
                            {{-- @yield('page') --}}
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </section>
    </div>
@endsection
