@extends('layouts.mtdark', (['title' => 'Home']))

@section('content')
{{-- Bread crumb and right sidebar toggle --}}
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Admin Dashboard</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
        </ol>
    </div>
    <div class="col-md-7 col-4 align-self-center">
        <div class="d-flex m-t-10 justify-content-end">
            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                {{-- --}}
            </div>
            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                {{-- --}}
            </div>
            <div class="">
                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
    </div>
</div>
{{-- End Bread crumb and right sidebar toggle --}}
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Login Info</h4>
                <h6 class="card-subtitle">Just add <code>form-material</code> class to the form that's
                    it.</h6>
                <form class="form-material mt-4">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    Selamat Datang <b>{{ Auth::user()->name }}</b>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
