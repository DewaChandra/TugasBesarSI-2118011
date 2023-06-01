<?php

namespace App\Http\Controllers;

use App\Models\Pengajuanizin;
use Illuminate\Http\Request;
use PDF;

class PengajuanizinController extends Controller
{
    public function index()
    {
        return view('pengajuanizin.index', [
            'pengajuanizins'=>Pengajuanizin::get(),
        ]);
    }

    public function create(){
        return view('pengajuanizin.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'ID_PengajuanIzin' => ['required'],
            'Tgl_Pengajuan' => ['required'],
            'Tgl_Mulai' => ['required'],
            'Tgl_Akhir' => ['required'],
            'Alasan_Cuti' => ['required'],
            'NIP' => ['required'],
            'Validasi' => ['required'],
        ]);

        $pengajuanizin = new Pengajuanizin();

        $pengajuanizin->ID_PengajuanIzin = $request->ID_PengajuanIzin;
        $pengajuanizin->Tgl_Pengajuan = $request->Tgl_Pengajuan;
        $pengajuanizin->Tgl_Mulai = $request->Tgl_Mulai;
        $pengajuanizin->Tgl_Akhir = $request->Tgl_Akhir;
        $pengajuanizin->Alasan_Cuti = $request->Alasan_Cuti;
        $pengajuanizin->NIP = $request->NIP;
        $pengajuanizin->Validasi = $request->Validasi;

        $pengajuanizin->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('pengajuanizin.index');
    }

    public function edit($id){
        $pengajuanizin = Pengajuanizin::find($id);
        return view('pengajuanizin.edit', [
            'pengajuanizin' => $pengajuanizin,
        ]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'ID_PengajuanIzin' => ['required'],
            'Tgl_Pengajuan' => ['required'],
            'Tgl_Mulai' => ['required'],
            'Tgl_Akhir' => ['required'],
            'Alasan_Cuti' => ['required'],
            'NIP' => ['required'],
            'Validasi' => ['required'],
        ]);
        
        $pengajuanizin = Pengajuanizin::find($id);

        $pengajuanizin->ID_PengajuanIzin = $request->ID_PengajuanIzin;
        $pengajuanizin->Tgl_Pengajuan = $request->Tgl_Pengajuan;
        $pengajuanizin->Tgl_Mulai = $request->Tgl_Mulai;
        $pengajuanizin->Tgl_Akhir = $request->Tgl_Akhir;
        $pengajuanizin->Alasan_Cuti = $request->Alasan_Cuti;
        $pengajuanizin->NIP = $request->NIP;
        $pengajuanizin->Validasi = $request->Validasi;

        $pengajuanizin->save();
        session()->flash('info', 'Data Berhasil Diperbarui');
        return redirect()->route('pengajuanizin.index');
    }

    public function destroy($id){
        $pengajuanizin = Pengajuanizin::find($id);
        $pengajuanizin->delete();
        session()->flash('danger', 'Data Berhasil Dihapus');
        return redirect()->route('pengajuanizin.index');
    }

    public function exportpdf(){
        $pengajuanizin = Pengajuanizin::all();
        view()->share('pengajuanizins', $pengajuanizin);
        $pdf = PDF::loadview('pengajuanizin.cetak');
        return $pdf->download('PengajuanIzinKaryawan.pdf');
    }
}
