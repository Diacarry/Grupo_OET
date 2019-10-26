<?php

namespace App\Http\Controllers;

Use App\Vehicle;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = Vehicle::paginate(15);
        return view('report.index', [
            'data' => $data
        ]);
    }
}
