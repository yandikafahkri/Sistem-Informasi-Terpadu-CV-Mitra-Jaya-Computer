<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clean;
use App\Incident;
use App\Inventaris;
use App\Clean_inventaris;
use App\Incident_inventaris;

class MaintenanceController extends Controller
{

    public function index()
    {
    	$data_inventaris = \App\Inventaris::all();
        $inventaris = \App\Clean_inventaris::all();

    	return view('maintenance.index',['data_inventaris' => $data_inventaris,                                         
                                        'inventaris' => $inventaris
                                        ]);
    }




}
