@extends('layouts.mtdark', (['title' => 'Data Sample']))

@section('content')
{{-- Bread crumb and right sidebar toggle --}}
<div class="row page-titles">
    <x-breadcrumb title="Sample">
        <x-bcItemOff name="Data Master" />
        <x-bcItemOn name="Samples" />
    </x-breadcrumb>

    <div class="col-md-7 col-4 align-self-center">
        <div class="d-flex m-t-10 justify-content-end">
            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                {{-- Modal --}}
                <x-modalBtn class="primary pull-right" dataTarget="create" icon="mdi mdi-plus-circle-outline" name="Create New Sample" />
                <x-modal id="create" size="" color="primary" title="Create Data Sample">
                    <form class="form-material mt-4" action="{{ route('staff.samples.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Sample Name" name="name">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                        </div>
                        <x-button class="primary pull-right" type="submit">Submit</x-button>
                    </form>
                </x-modal>
                {{-- The End of Modal --}}
            </div>
            <div>
                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
    </div>
</div>
{{-- End Bread crumb and right sidebar toggle --}}

<x-card title="Data Sample" subtitle="Sample Data which function for Master">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Detail</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($samples as $sample)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $sample->name }}</td>
                    <td>{{ $sample->detail }}</td>
                    <td>
                        <form action="{{ route('staff.samples.destroy', $sample->id) }}" method="POST">
                            <x-a-button class="warning" :href="route('staff.samples.edit', $sample->id )">Edit</x-a-button>
                            @csrf
                            @method('DELETE')
                            <x-button class="danger" type="submit">Delete</x-button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $samples->links() }}
</x-card>
@endsection
