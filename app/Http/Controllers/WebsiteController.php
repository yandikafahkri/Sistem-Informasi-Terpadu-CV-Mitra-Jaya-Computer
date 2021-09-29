<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clean;
use App\Inventaris;
use App\Clean_inventaris;

class WebsiteController extends Controller
{

    public function index()
    {
    	$data_inventaris = \App\Inventaris::all();
        $data_clean = \App\Clean::all();
        $data_karyawan = \App\Karyawan::all();
    	return view('website',['data_inventaris' => $data_inventaris, 
                                'data_clean' => $data_clean, 
                                'data_karyawan' => $data_karyawan
                            ]);
    }

}
