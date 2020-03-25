@extends('layouts.mtdark', (['title' => 'Edit Role']))

@section('content')
{{-- Bread crumb and right sidebar toggle --}}
<div class="row page-titles">
    <x-breadcrumb title="Edit Role">
        <x-bcItemOff name="Management Roles" />
        <x-bcItemOn name="Edit" />
    </x-breadcrumb>

    <div class="col-md-7 col-4 align-self-center">
        <div class="d-flex m-t-10 justify-content-end">
            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                {{-- Top Right Button --}}
                <x-a-button class="info" :href="route('admin.roles.index')">Data Roles</x-a-button>
                {{-- End of Top Right Button --}}
            </div>
            <div>
                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
    </div>
</div>
{{-- End Bread crumb and right sidebar toggle --}}

<x-card title="Update Data Role" subtitle="Role is function for manage level for each Users">
    <form action="{{ route('admin.roles.update', $role->id) }}" class="form-material mt-4" method="POST" role="form">
    @csrf
    @method('PUT')
    <input type="hidden" name="_method" value="PUT">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name">Role Name</label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{ old('name', $role->name) }}" id="name">
                @if($errors->has('name'))
                <span class="invalid-feedback">
                    {{$errors->first('name')}}
                </span>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="permission">Permission:</label></br>
                @foreach($permission as $value)
                    <input type="checkbox" class="name" value="{{ $value->id }}" name="permission[]" id="square-checkbox-{{ $value->id }}" data-checkbox="icheckbox_square-green">
                    <label for="square-checkbox-{{ $value->id }}">
                        {{ $value->name }}
                    </label>
                    <br/>
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary pull-right">Submit</button>
        </div>
    </form>
</x-card>
@endsection
