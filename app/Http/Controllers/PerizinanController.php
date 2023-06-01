<?php

namespace App\Http\Controllers;

use App\Models\Perizinan;
use Illuminate\Http\Request;
use PDF;

class PerizinanController extends Controller
{
    public function index()
    {
        return view('perizinan.index', [
            'perizinans' => Perizinan::get(), 
        ]);
    }

    public function create(){
        return view('perizinan.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'ID_Izin' => ['required'],
            'Total_Izin' => ['required'],
            'Jumlah_Izin' => ['required'],
            'NIP' => ['required'],
        ]);

        $perizinan = new Perizinan();

        $perizinan->ID_Izin = $request->ID_Izin;
        $perizinan->Total_Izin = $request->Total_Izin;
        $perizinan->Jumlah_Izin = $request->Jumlah_Izin;
        $perizinan->NIP = $request->NIP;

        $perizinan->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('perizinan.index');
    }

    public function edit($id){
        $perizinan = Perizinan::find($id);
        return view('perizinan.edit', [
            'perizinan' => $perizinan,
        ]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'ID_Izin' => ['required'],
            'Total_Izin' => ['required'],
            'Jumlah_Izin' => ['required'],
            'NIP' => ['required'],
        ]);

        $perizinan = Perizinan::find($id);

        $perizinan->ID_Izin = $request->ID_Izin;
        $perizinan->Total_Izin = $request->Total_Izin;
        $perizinan->Jumlah_Izin = $request->Jumlah_Izin;
        $perizinan->NIP = $request->NIP;

        $perizinan->save();
        session()->flash('info', 'Data Berhasil Diperbarui');
        return redirect()->route('perizinan.index');
    }

    public function destroy($id){
        $perizinan = Perizinan::find($id);
        $perizinan->delete();
        session()->flash('danger', 'Data Berhasil Dihapus');
        return redirect()->route('perizinan.index');
    }

    public function exportpdf(){
        $perizinan = Perizinan::all();
        view()->share('perizinans', $perizinan);
        $pdf = PDF::loadview('perizinan.cetak');
        return $pdf->download('PerizinanKaryawan.pdf');
    }
}