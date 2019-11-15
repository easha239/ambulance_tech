<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\drivers;

class DriverController extends Controller
{
    /**
     * Display a listing of the drivers
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = drivers:: all();
        return view('drivers/index', compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        drivers::create([
            'name' =>  $request->name,
            'nid' =>  $request->nid,
            'license_no' =>  $request->license_no,
            'phone' =>  $request->phone
        ]);
        return redirect()->route('drivers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $drivers = drivers::findOrFail($id);
        return view('drivers.show', compact('drivers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drivers = drivers::findOrFail($id);
        return view('drivers.edit', compact('drivers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $drivers = drivers::findOrFail($id);
        $drivers->update([
            'name' =>  $request->name_updated,
            'nid' =>  $request->nid_updated,
            'license_no' =>  $request->license_no_updated,
            'phone' =>  $request->phone_updated
        ]);
        return redirect()->route('drivers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drivers = drivers::findOrFail($id);
        $drivers->delete();
        return redirect()->route('drivers.index');
    }
}
