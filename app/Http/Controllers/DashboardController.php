<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $data_inventaris = \App\Inventaris::all();
        $data_clean = \App\Clean::all();

    	return view('dashboards.index',['data_inventaris' => $data_inventaris, 
                                        'data_clean' => $data_clean,
                                        ]);

    }

}
