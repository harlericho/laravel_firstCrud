<?php

namespace App\Http\Controllers;

use App\Models\Programming;
use Illuminate\Http\Request;

class ProgrammingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Programming::orderBy('id', 'desc')->paginate(5);
        return view('welcome', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $programming = new Programming();
        $programming->name = $request->post('name');
        $programming->description = $request->post('description');
        $programming->save();
        return redirect()->route('index')->with('success', 'Data saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programming  $programming
     * @return \Illuminate\Http\Response
     */
    public function show(Programming $programming)
    {
        //
        $data = Programming::find($programming->id);
        return view('delete', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programming  $programming
     * @return \Illuminate\Http\Response
     */
    public function edit(Programming $programming)
    {
        //
        $data = Programming::find($programming->id);
        return view('update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programming  $programming
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programming $programming)
    {
        //
        $programming = Programming::find($request->post('id'));
        $programming->name = $request->post('name');
        $programming->description = $request->post('description');
        $programming->update();
        return redirect()->route('index')->with('success', 'Data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programming  $programming
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Programming $programming)
    {
        //
        $programming = Programming::find($request->post('id'));
        $programming->delete();
        return redirect()->route('index')->with('success', 'Data delete');
    }
}
