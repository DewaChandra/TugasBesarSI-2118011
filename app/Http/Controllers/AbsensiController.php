<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;
use PDF;

class AbsensiController extends Controller
{
    public function index()
    {   
        return view('absensi.index', [
            'absensis' => Absensi::get(), 
        ]);
    }

    public function create(){
        return view('absensi.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'ID_Absensi' => ['required'],
            'Tgl' => ['required'],
            'NIP' => ['required'],
            'Jam_Masuk' => ['required'],
            'Keterangan' => ['required'],
        ]);

        $absensi = new Absensi();

        $absensi->ID_Absensi = $request->ID_Absensi;
        $absensi->Tgl = $request->Tgl;
        $absensi->NIP = $request->NIP;
        $absensi->Jam_Masuk = $request->Jam_Masuk;
        $absensi->Keterangan = $request->Keterangan;

        $absensi->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('absensi.index');
    }

    public function edit($id){
        $absensi = Absensi::find($id);
        return view('absensi.edit', [
            'absensi' => $absensi,
        ]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'ID_Absensi' => ['required'],
            'Tgl' => ['required'],
            'NIP' => ['required'],
            'Jam_Masuk' => ['required'],
            'Keterangan' => ['required'],
        ]);

        $absensi = Absensi::find($id);

        $absensi->ID_Absensi = $request->ID_Absensi;
        $absensi->Tgl = $request->Tgl;
        $absensi->NIP = $request->NIP;
        $absensi->Jam_Masuk = $request->Jam_Masuk;
        $absensi->Keterangan = $request->Keterangan;

        $absensi->save();
        session()->flash('info', 'Data Berhasil Diperbarui');
        return redirect()->route('absensi.index');
    }

    public function destroy($id){
        $absensi = Absensi::find($id);
        $absensi->delete();
        session()->flash('danger', 'Data Berhasil Dihapus');
        return redirect()->route('absensi.index');
    }

    public function exportpdf(){
        $absensi = Absensi::all();
        view()->share('absensis', $absensi);
        $pdf = PDF::loadview('absensi.cetak');
        return $pdf->download('AbsensiKaryawan.pdf');
    }
}
