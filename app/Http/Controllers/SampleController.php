<?php

namespace App\Http\Controllers;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     *public function create()
     *{
     *     return view('samples.create');
     *}
     */

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

        // Sample::create($request->all());

        return redirect()->route('samples.index')
          ->with('success', 'Data Sample Created Succssfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Sample  $sample
     * @return \Illuminate\Http\Response
     *
     *public function show(Sample $sample)
     *{
     *     return view('samples.show', compact('sample'));
     *}
     *
     */

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

        $sample->update($request->all());

        return redirect()->route('samples.index')
          ->with('success', 'Data Sample Updated Succssfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sample $sample)
    {
        $sample->delete();

        return redirect()->route('samples.index')
          ->with('success', 'Data Sample Deleted Succssfully.');
    }
}
