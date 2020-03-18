@extends('layouts.mtdark', (['title' => 'Profile']))

@section('content')
{{-- Bread crumb and right sidebar toggle --}}
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Dashboard</h3>
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
            <div class="">
                <button class="right-side-toggle waves-effect waves-light btn-primary btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
    </div>
</div>
{{-- End Bread crumb and right sidebar toggle --}}
<div class="row">
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <center class="m-t-30">
                    <img src="{{asset('storage/pics/'.Auth::user()->image)}}" class="user-image img-circle" alt="User Image" width="150">
                    <h4 class="card-title m-t-10">{{ Auth::user()->name }}</h4>
                    <h6 class="card-subtitle">{{ Auth::user()->email }}</h6>
                </center>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <div class="card-body">
                <form action="{{route('profile.update')}}" class="form-material" method="POST" enctype="multipart/form-data" role="form">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name" class="col-md-12">Full Name</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="Enter full name" value="{{ old('name', Auth::user()->name) }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name">
                            @if($errors->has('name'))
                                <span class="invalid-feedback">
                                    {{$errors->first('name')}}
                                </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input type="email" placeholder="Enter Email" value="{{ old('email', Auth::user()->email) }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email">
                            @if($errors->has('email'))
                                <span class="invalid-feedback">
                                    {{$errors->first('email')}}
                                </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Password</label>
                        <div class="col-md-12">
                            <input type="password" placeholder="Enter to change password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}">
                            @if($errors->has('password'))
                                <span class="invalid-feedback">
                                    {{$errors->first('password')}}
                                </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="image">Custom File upload</label>
                        <div class="fileinput fileinput-new input-group col-md-12" data-provides="fileinput">
                            <div class="form-control" data-trigger="fileinput">
                                <i class="fa fa-file fileinput-exists"></i>
                                <span class="fileinput-filename"></span>
                            </div>
                            <span class="input-group-addon btn btn-secondary btn-file">
                                <span class="fileinput-new">Select file</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image" class="custom-file-input {{$errors->has('image') ? 'is-invalid' : ''}}" id="image">
                            </span>
                            <a href="#" class="input-group-addon btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                    <x-button class="primary pull-right" type="submit">Submit</x-button>
                </form>
            </div>
        </div>
    </div>
    @endsection
