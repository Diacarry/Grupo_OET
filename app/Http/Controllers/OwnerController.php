<?php

namespace App\Http\Controllers;

use App\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Owner::paginate(5);
        return view('owner.index', [
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
        return view('owner.register');
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
            'identification'=> 'required|min:5|max:25',
            'first_name'    => 'required|min:5|max:50',
            'second_name'   => 'required|min:5|max:50',
            'last_name'     => 'required|min:8|max:100',
            'address'       => 'required|min:8|max:100',
            'phone'         => 'required|min:8|max:20',
            'city'          => 'required|min:3|max:50'
        ]);
        $report = new Owner;
        $report->identification = $request->get('identification');
        $report->first_name = $request->get('first_name');
        $report->second_name = $request->get('second_name');
        $report->last_name = $request->get('last_name');
        $report->address = $request->get('address');
        $report->phone = $request->get('phone');
        $report->city = $request->get('city');
        $report->save();
        return redirect('owners');
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
        $owner = Owner::find($id);
        return view('owner.edit', [
            'data' => $owner
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
            'first_name'    => 'required|min:5|max:50',
            'second_name'   => 'required|min:5|max:50',
            'last_name'     => 'required|min:8|max:100',
            'address'       => 'required|min:8|max:100',
            'phone'         => 'required|min:8|max:20',
            'city'          => 'required|min:3|max:50'
        ]);
        $report = Owner::find($id);
        $report->first_name = $request->get('first_name');
        $report->second_name = $request->get('second_name');
        $report->last_name = $request->get('last_name');
        $report->address = $request->get('address');
        $report->phone = $request->get('phone');
        $report->city = $request->get('city');
        $report->save();
        return redirect('owners');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = Owner::find($id);
        $registro->delete();
        return redirect('owners');
    }
}
