<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clean;
use App\Incident;
use App\Inventaris;
use App\Clean_inventaris;
use App\Incident_inventaris;

class ProfileController extends Controller
{

    public function index()
    {
    	$data_inventaris = \App\Inventaris::all();
        $data_clean = \App\Clean::all();
        $data_incident = \App\Incident::all();
        $data_karyawan = \App\Karyawan::all();
    	return view('profile',['data_inventaris' => $data_inventaris, 
                                'data_clean' => $data_clean, 
                                'data_incident' => $data_incident, 
                                'data_karyawan' => $data_karyawan]);
    }

}
