@extends('layouts.mtdark', (['title' => 'Data Roles']))

@section('content')
{{-- Bread crumb and right sidebar toggle --}}
<div class="row page-titles">
    <x-breadcrumb title="Role Detail">
        <x-bcItemOff name="Management Roles"/>
        <x-bcItemOn name="Detail"/>
    </x-breadcrumb>

    <div class="col-md-7 col-4 align-self-center">
        <div class="d-flex m-t-10 justify-content-end">
            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                {{-- Modal --}}
                
                {{-- The End of Modal --}}
            </div>
            <div>
                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
    </div>
</div>
{{-- End Bread crumb and right sidebar toggle --}}

<x-card title="Data Role" subtitle="Body of this page explain selected Role">
    <div class="table-responsive">
        <table>
            <tr>
                <td width="45%">
                    <strong>Name</strong>
                </td>
                <td width="10%">:</td>
                <td width="45%">{{ $role->name }}</td>
            </tr>
            <tr>
                <td width="45%">
                    <strong>Permissions</strong>
                </td>
                <td width="10%">:</td>
                <td width="45%">
                    @if(!empty($rolePermissions))
                        @foreach($rolePermissions as $permission)
                            <label class="label label-success">{{ $permission->name }}</label>
                        @endforeach
                    @endif
                </td>
            </tr>
        </table>
    </div>
</x-card>
@endsection
