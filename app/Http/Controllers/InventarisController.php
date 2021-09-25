<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clean;
use App\Incident;
use App\Inventaris,pivot;
use App\Clean_inventaris;

class InventarisController extends Controller
{

    public function index()
    {
    	$data_inventaris = \App\Inventaris::all();

    	return view('inventaris.index',['data_inventaris' => $data_inventaris
                                        ]);
    }

    public function create(Request $request)
    {
        \App\Inventaris::create($request->all());

        return redirect ('/inventaris')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $inventaris = \App\Inventaris::find($id);

        return view('inventaris/edit', ['inventaris' => $inventaris]);
    }

    public function update(Request $request ,$id)
    {       
        $inventaris = \App\Inventaris::find($id);
        $inventaris->update($request->all());

        return redirect ('/inventaris')->with('sukses', 'Data berhasil di update');
    }

    public function delete($id)
    {
        $inventaris = \App\Inventaris::find($id);
        $inventaris->delete($inventaris);

        return redirect('/inventaris')->with('sukses', 'Data berhasil di hapus');
    }

//////////////////////////////////////////////////////////////////////////////////////////////////

    public function clean($id)
    {
        $clean = \App\Clean::find($id);
        $inventaris = Inventaris::where('id', $id)->first();

//pembersihan
        $pembersihan = \App\Clean::all();     

        return view('inventaris.clean',['clean' => $clean, 
                                        'inventaris' => $inventaris,
                                        'pembersihan' => $pembersihan]);
    }

    public function incident($id)
    {
        $incident = \App\Incident::find($id);
        $inventaris = Inventaris::where('id', $id)->first();

//perbaikan
        $perbaikan = \App\Incident::all();        

        return view('inventaris.incident',['incident' => $incident, 'inventaris' => $inventaris, 'perbaikan' => $perbaikan]);
    }

    public function maint()
    {
        // $clean = \App\Inventaris::all();
        // $inventaris = Inventaris::all();
    	$data_inventaris = \App\Inventaris::all();


        return view('inventaris.maint', compact('data_inventaris'), [
                                        'data_inventaris' => $data_inventaris
        ]);

        // return view('inventaris.maint',[ 
        //                                 'inventaris' => $inventaris
        //                                 ]);
    }

//////////////////////////////////////////////////////////////////////////////////////////////////
        public function deleteclean($idinventaris,$idclean)
    {
        $inventaris = \App\Inventaris::find($idinventaris);
        $inventaris->clean()->detach($idclean);
        return redirect()->back()->with('sukses', 'Data berhasil dihapus');
    }

        public function deleteincident($idinventaris,$idincident)
    {
        $inventaris = \App\Inventaris::find($idinventaris);
        $inventaris->incident()->detach($idincident);
        return redirect()->back()->with('sukses', 'Data berhasil dihapus');
    }
    
//////////////////////////////////////////////////////////////////////////////////////////////////

    public function printclean($id)
    {
        $inventaris = \App\Inventaris::find($id);

//clean
        $rawat1 = \App\Clean::all();
//incident
        $rawat2 = \App\Incident::all();

        return view('inventaris.printclean', ['inventaris' => $inventaris, 'rawat1' => $rawat1, 'rawat2' => $rawat2]);
    }

    public function printlist()
    {
    	$data_inventaris = \App\Inventaris::all();

    	return view('inventaris.printlist',['data_inventaris' => $data_inventaris]);
    }

    public function printincident($id)
    {
        $inventaris = \App\Inventaris::find($id);

//clean
        $rawat1 = \App\Clean::all();
//incident
        $rawat2 = \App\Incident::all();

        return view('inventaris.printincident', ['inventaris' => $inventaris, 'rawat1' => $rawat1, 'rawat2' => $rawat2]);
    }

//////////////////////////////////////////////////////////////////////////////////////////////////


public function addrawat(Request $request ,$idinventaris)
    {
       // dd($request->all());
        $inventaris = \App\Inventaris::find($idinventaris);   

//tambah foto      
//    if($request->hasFile('ss_sebelum')){
        $request->file('ss_sebelum')->move('images/', $request->file('ss_sebelum')->getClientOriginalName());
        $request->file('ss_setelah')->move('images/', $request->file('ss_setelah')->getClientOriginalName());
        $request->file('sebelum')->move('images/', $request->file('sebelum')->getClientOriginalName());
        $request->file('setelah')->move('images/', $request->file('setelah')->getClientOriginalName());

        $inventaris->clean()->attach
        ($request->clean, 
            ['ss_sebelum' => $request->file('ss_sebelum')->getClientOriginalName(), 
            'ss_setelah' => $request->file('ss_setelah')->getClientOriginalName(), 
            'sebelum' => $request->file('sebelum')->getClientOriginalName(),
            'setelah' => $request->file('setelah')->getClientOriginalName(),
            'waktu' => $request->waktu 
            ]
        );
        return redirect('inventaris/'.$idinventaris.'/clean')->with('sukses', 'Data CCTV Berhasil Ditambahkan!');


    }


    public function addganti(Request $request ,$idinventaris)
    {
       // dd($request->all());
        $inventaris = \App\Inventaris::find($idinventaris);   

//tambah foto      
//    if($request->hasFile('ss_sebelum')){
        $request->file('ss_sebelum')->move('images/', $request->file('ss_sebelum')->getClientOriginalName());
        $request->file('ss_setelah')->move('images/', $request->file('ss_setelah')->getClientOriginalName());
        $request->file('sebelum')->move('images/', $request->file('sebelum')->getClientOriginalName());
        $request->file('setelah')->move('images/', $request->file('setelah')->getClientOriginalName());

        $inventaris->incident()->attach
        ($request->incident, 
            ['ss_sebelum' => $request->file('ss_sebelum')->getClientOriginalName(), 
            'ss_setelah' => $request->file('ss_setelah')->getClientOriginalName(), 
            'sebelum' => $request->file('sebelum')->getClientOriginalName(),
            'setelah' => $request->file('setelah')->getClientOriginalName(),
            'waktu' => $request->waktu 
            ]
        );
        return redirect('inventaris/'.$idinventaris.'/incident')->with('sukses', 'Data CCTV berhasil dimasukkan');
    }

//////////////////////////////////////////////////////////////////////////////////////////////////


}
