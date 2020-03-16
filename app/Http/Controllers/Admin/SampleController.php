<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sample;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class SampleController extends Controller
{
    public function index()
    {
        $samples = Sample::latest()->paginate(5);
        return view('samples.index', compact('samples'))
            ->with('no', (request()->input('page', 1) - 1) * 5);
    }

    public function admin()
    {
        $samples = Sample::latest()->paginate(5);
        return view('samples.index', compact('samples'))
            ->with('no', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        Alert::success('Create Data Success', 'Data Sample Created Succssfully.');
        Sample::create($request->all());

        return redirect()->route('samples.index');
    }

    public function edit(Sample $sample)
    {
        return view('samples.edit', compact('sample'));
    }

    public function update(Request $request, Sample $sample)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        Alert::info('Update Data Success', 'Data Sample Updated Succssfully.');

        $sample->update($request->all());

        return redirect()->route('samples.index');
    }

    public function destroy(Sample $sample)
    {
        Alert::toast('Data Sample Deleted Successfully', 'info');

        $sample->delete();
        return redirect()->route('samples.index');
    }
}
