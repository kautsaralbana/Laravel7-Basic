<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sample;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class SampleController extends Controller
{
    function __construct()
    {
        $this->middleware('verified');
    }

    public function index()
    {
        $samples = Sample::latest()->paginate(5);
        return view('admin.samples.index', compact('samples'))
            ->with('no', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'detail' => 'required',
        ]);

        $samples = new Sample;
        $samples->name = $request->name;
        $samples->detail = $request->detail;
        $samples->created_by = Auth::id();
        $samples->save();

        Alert::alert()->success('Succes', 'Data Sample Successfully Created');
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
        ], [
            'name.required' => 'Sample name is required'
        ]);

        $sample->update($request->all());

        Alert::info('Update Data Success', 'Data Sample Updated Succssfully.');
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
