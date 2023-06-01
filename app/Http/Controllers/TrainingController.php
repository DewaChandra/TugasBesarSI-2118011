<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;
use PDF;

class TrainingController extends Controller
{
    public function index()
    {
        return view('training.index', [
            'trainings'=>Training::get(),
        ]);
    }

    public function create(){
        return view('training.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'ID_Training' => ['required'],
            'Tgl_Training' => ['required'],
            'Nama_Training' => ['required'],
            'NIP' => ['required'],
        ]);

        $training = new Training();

        $training->ID_Training = $request->ID_Training;
        $training->Tgl_Training = $request->Tgl_Training;
        $training->Nama_Training = $request->Nama_Training;
        $training->NIP = $request->NIP;

        $training->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('training.index');
    }

    public function edit($id){
        $training = Training::find($id);
        return view('training.edit', [
            'training' => $training,
        ]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'ID_Training' => ['required'],
            'Tgl_Training' => ['required'],
            'Nama_Training' => ['required'],
            'NIP' => ['required'],
        ]);
        
        $training = Training::find($id);

        $training->ID_Training = $request->ID_Training;
        $training->Tgl_Training = $request->Tgl_Training;
        $training->Nama_Training = $request->Nama_Training;
        $training->NIP = $request->NIP;

        $training->save();
        session()->flash('info', 'Data Berhasil Diperbarui');
        return redirect()->route('training.index');
    }

    public function destroy($id){
        $training = Training::find($id);
        $training->delete();
        session()->flash('danger', 'Data Berhasil Dihapus');
        return redirect()->route('training.index');
    }

    public function exportpdf(){
        $training = Training::all();
        view()->share('trainings', $training);
        $pdf = PDF::loadview('training.cetak');
        return $pdf->download('TrainingKaryawan.pdf');
    }
}
