<?php

namespace App\Http\Controllers;

use App\Models\Tunjangan;
use Illuminate\Http\Request;
use PDF;

class TunjanganController extends Controller
{
    public function index()
    {
        return view('tunjangan.index', [
            'tunjangans' => Tunjangan::get(), 
        ]);
    }

    public function create(){
        return view('tunjangan.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'ID_Tunjangan' => ['required'],
            'Nama_Tunjangan' => ['required'],
            'Besar_Tunjangan' => ['required'],
        ]);

        $tunjangan = new Tunjangan();

        $tunjangan->ID_Tunjangan = $request->ID_Tunjangan;
        $tunjangan->Nama_Tunjangan = $request->Nama_Tunjangan;
        $tunjangan->Besar_Tunjangan = $request->Besar_Tunjangan;

        $tunjangan->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('tunjangan.index');
    }

    public function edit($id){
        $tunjangan = Tunjangan::find($id);
        return view('tunjangan.edit', [
            'tunjangan' => $tunjangan,
        ]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'ID_Tunjangan' => ['required'],
            'Nama_Tunjangan' => ['required'],
            'Besar_Tunjangan' => ['required'],
        ]);
        
        $tunjangan = Tunjangan::find($id);

        $tunjangan->ID_Tunjangan = $request->ID_Tunjangan;
        $tunjangan->Nama_Tunjangan = $request->Nama_Tunjangan;
        $tunjangan->Besar_Tunjangan = $request->Besar_Tunjangan;

        $tunjangan->save();
        session()->flash('info', 'Data Berhasil Diperbarui');
        return redirect()->route('tunjangan.index');
    }

    public function destroy($id){
        $tunjangan = Tunjangan::find($id);
        $tunjangan->delete();
        session()->flash('danger', 'Data Berhasil Dihapus');
        return redirect()->route('tunjangan.index');
    }
}
