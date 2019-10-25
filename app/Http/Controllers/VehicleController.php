<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Driver;
use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Vehicle::all();
        return view('vehicle.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owners = Owner::all();
        $drivers = Driver::all();
        return view('vehicle.register', [
            'owners' => $owners,
            'drivers' => $drivers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'license_plate' => 'required|min:4|max:10',
            'color'         => 'required|min:3|max:15',
            'brand'         => 'required|min:3|max:25',
            'type'          => 'required',
            'fk_owner'      => 'required',
            'fk_driver'     => 'required'
        ]);
        $report = new Vehicle;
        $report->license_plate = $request->get('license_plate');
        $report->fk_owner = $request->get('fk_owner');
        $report->fk_driver = $request->get('fk_driver');
        $report->color = $request->get('color');
        $report->brand = $request->get('brand');
        $report->type = $request->get('type');
        $report->save();
        return redirect('vehicles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        $owners = Owner::all();
        $drivers = Driver::all();
        return view('vehicle.edit', [
            'dataV' => $vehicle,
            'owners' => $owners,
            'drivers' => $drivers
        ]);
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
        $validatedData = $request->validate([
            'color'         => 'required|min:3|max:15',
            'brand'         => 'required|min:3|max:25',
            'type'          => 'required',
            'fk_owner'      => 'required',
            'fk_driver'     => 'required'
        ]);
        $report = Vehicle::find($id);
        $report->color = $request->get('color');
        $report->brand = $request->get('brand');
        $report->type = $request->get('type');
        $report->fk_owner = $request->get('fk_owner');
        $report->fk_driver = $request->get('fk_driver');
        $report->save();
        return redirect('vehicles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = Vehicle::find($id);
        $registro->delete();
        return redirect('vehicles');
    }
}
