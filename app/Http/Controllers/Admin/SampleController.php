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
        return view('admin.samples.index', compact('samples'))
            ->with('no', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $samples = new Sample;
        $samples->name = $request->name;
        $samples->detail = $request->detail;
        $samples->created_by = Auth::id();
        $samples->save();

        Alert::success('Create Data Success', 'Data Sample Created Succssfully.');
        return redirect()->route('admin.samples.index');
    }

    public function edit(Sample $sample)
    {
        return view('admin.samples.edit', compact('sample'));
    }

    public function update(Request $request, Sample $sample)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        Alert::info('Update Data Success', 'Data Sample Updated Succssfully.');

        $sample->update($request->all());

        return redirect()->route('admin.samples.index');
    }

    public function destroy($id)
    {
        $sample = Sample::findOrFail($id);
        $sample->delete();

        Alert::toast('Data Sample Deleted Successfully', 'info');
        return redirect()->route('admin.samples.index');
    }
}
