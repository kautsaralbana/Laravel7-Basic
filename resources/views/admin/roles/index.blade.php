@extends('layouts.mtdark', (['title' => 'Data Roles']))

@section('content')
{{-- Bread crumb and right sidebar toggle --}}
<div class="row page-titles">
    <x-breadcrumb title="Roles">
        <x-bcItemOff name="Data Master" />
        <x-bcItemOn name="Samples" />
    </x-breadcrumb>

    <div class="col-md-7 col-4 align-self-center">
        <div class="d-flex m-t-10 justify-content-end">
            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                {{-- Top Right Button --}}
                <x-a-button class="primary" :href="route('admin.roles.create')">Create Role</x-a-button>
                {{-- End of Top Right Button --}}
            </div>
            <div>
                <button
                    class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i
                        class="ti-settings text-white"></i></button>
            </div>
        </div>
    </div>
</div>
{{-- End Bread crumb and right sidebar toggle --}}

<x-card title="Data Roles" subtitle="Roles Data which function for Users">
    <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th width="45px">No</th>
                <th style="text-align: center;">Name</th>
                <th width="280px">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($roles as $key => $role)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td style="text-align: center;">{{ $role->name }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('admin.roles.show',$role->id) }}" disabled><i
                                class="fa fa-eye"></i></a>
                        <a class="btn btn-warning" href="{{ route('admin.roles.edit',$role->id) }}"><i
                                class="fa fa-edit"></i></a>
                        <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST"
                            style="display:inline">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" name="delete">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $roles->links() }}
</x-card>
@endsection
