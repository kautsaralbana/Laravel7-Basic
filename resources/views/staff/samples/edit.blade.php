@extends('layouts.mtdark', (['title' => 'Edit Data Sample']))

@section('content')
{{-- Bread crumb and right sidebar toggle --}}
<div class="row page-titles">
    <x-breadcrumb title="Edit Data Sample">
        <x-bcItemOff name="Data Master" />
        <x-bcItemOff name="Sample" />
        <x-bcItemOn name="Edit" />
    </x-breadcrumb>

    <div class="col-md-7 col-4 align-self-center">
        <div class="d-flex m-t-10 justify-content-end">
            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                {{-- --}}
            </div>
            <div>
                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
    </div>
</div>
{{-- End Bread crumb and right sidebar toggle --}}

{{-- Alert --}}
@if ($message = Session::get('success'))
<x-alert class="success" :message="$message" />
@elseif ($errors->any())
<x-error>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</x-error>
@endif

<div class="row">
    <x-halfCard title="Default Data Sample" subtitle="Sample Data which function for Master">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <td>:</td>
                    <td>{{ $sample->name }}</td>
                </tr>
                <tr>
                    <th>Detail</th>
                    <td>:</td>
                    <td>{{ $sample->detail }}</td>
                </tr>
            </table>
        </div>
    </x-halfCard>
    <x-halfCard title="Edit Data Sample" subtitle="Sample Data which function for Master">
        <form action="{{ route('staff.samples.update', $sample->id) }}" class="form-material mt-4" method="POST" role="form">
            @csrf
            @method('PUT')
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Sample Name" name="name" value="{{ $sample->name }}">
            </div>
            <div class="form-group">
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $sample->detail }}</textarea>
            </div>
            <x-button class="primary pull-right" type="submit">Submit</x-button>
        </form>
    </x-halfCard>
</div>
@endsection
