@extends('templates.default')

@section('content')
<h1>Edit Data Training Karyawan</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('training.update', $training->id) }}" class="" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">ID Training</label>
                <input type="text" name="ID_Training" class="form-control @error('ID_Training') is-invalid @enderror" 
                    name="example-text-input" placeholder="Masukkan ID Training" value="{{ old('ID_Training') ?? $training->ID_Training }}">
                @error('ID_Training')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Tgl Pengajuan</label>
                <input type="date" name="Tgl_Training" class="form-control @error('Tgl_Training') is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan Tanggal Training" value="{{ old('Tgl_Training') ??$training->Tgl_Training }}">
                @error('Tgl_Training')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Training</label>
                <input type="text" name="Nama_Training" class="form-control @error('Nama_Training') is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan Nama Training" value="{{ old('Nama_Training') ??$training->Nama_Training }}">
                @error('Nama_Training')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" name="NIP" class="form-control @error('NIP') is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan NIP" value="{{ old('NIP') ??$training->NIP }}">
                @error('NIP')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb3">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

@endsection