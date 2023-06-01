<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use Illuminate\Http\Request;
use PDF;

class GajiController extends Controller
{
    public function index(){
        return view('gaji.index', [
            'gajis' => Gaji::get(),
        ]);
    }

    public function create(){
        return view('gaji.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'ID_Gaji' => ['required'],
            'NIP' => ['required'],
            'Gaji_Pokok' => ['required'],
            'ID_Tunjangan' => ['required'],
            'Jabatan' => ['required'],
            'Total_Gaji' => ['required'],
        ]);

        $gaji = new Gaji();

        $gaji->ID_Gaji = $request->ID_Gaji;
        $gaji->NIP = $request->NIP;
        $gaji->Gaji_Pokok = $request->Gaji_Pokok;
        $gaji->ID_Tunjangan = $request->ID_Tunjangan;
        $gaji->Jabatan = $request->Jabatan;
        $gaji->Total_Gaji = $request->Total_Gaji;

        $gaji->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('gaji.index');
    }

    public function edit($id){
        $gaji = Gaji::find($id);
        return view('gaji.edit', [
            'gaji' => $gaji,
        ]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'ID_Gaji' => ['required'],
            'NIP' => ['required'],
            'Gaji_Pokok' => ['required'],
            'ID_Tunjangan' => ['required'],
            'Jabatan' => ['required'],
            'Total_Gaji' => ['required'],
        ]);
        
        $gaji = Gaji::find($id);

        $gaji->ID_Gaji = $request->ID_Gaji;
        $gaji->NIP = $request->NIP;
        $gaji->Gaji_Pokok = $request->Gaji_Pokok;
        $gaji->ID_Tunjangan = $request->ID_Tunjangan;
        $gaji->Jabatan = $request->Jabatan;
        $gaji->Total_Gaji = $request->Total_Gaji;

        $gaji->save();
        session()->flash('info', 'Data Berhasil Diperbarui');
        return redirect()->route('gaji.index');
    }

    public function destroy($id){
        $gaji = Gaji::find($id);
        $gaji->delete();
        session()->flash('danger', 'Data Berhasil Dihapus');
        return redirect()->route('gaji.index');
    }

    public function exportpdf(){
        $gaji = Gaji::all();
        view()->share('gajis', $gaji);
        $pdf = PDF::loadview('gaji.cetak');
        return $pdf->download('gaji.pdf');
    }
}
