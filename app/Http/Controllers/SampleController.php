<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Sample;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $samples = Sample::latest()->paginate(5);
        return view('samples.index', compact('samples'))
          ->with('no', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function edit(Sample $sample)
    {
        return view('samples.edit', compact('sample'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Sample  $sample
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sample $sample)
    {
        Alert::info('Delete Success', 'Data Sample Deleted Succssfully.');

        $sample->delete();
        return redirect()->route('samples.index');
    }
}
