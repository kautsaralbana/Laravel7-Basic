@extends('layouts.mtdark', (['title' => 'Data Roles']))

@section('content')
{{-- Bread crumb and right sidebar toggle --}}
<div class="row page-titles">
    <x-breadcrumb title="Create Role">
        <x-bcItemOff name="Management Roles" />
        <x-bcItemOn name="Create" />
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

<x-card title="Create Data Role" subtitle="Role is function for manage level for each Users">
    <form class="form-material mt-4" action="{{ route('admin.roles.store') }}" method="POST">
        @csrf
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <input placeholder="Name" class="form-control" name="name" type="text">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permission:</strong><br/>
                <div class="form-group">
                    @foreach($permission as $value)
                    <input type="checkbox" class="check" value="{{ $value->id }}" name="permission[]" id="square-checkbox-{{ $value->id }}" data-checkbox="icheckbox_square-green">
                        <label for="square-checkbox-{{ $value->id }}">
                            {{$value->name}}
                        </label><br/>
                    @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
        </div>
    </form>
</x-card>
@endsection
