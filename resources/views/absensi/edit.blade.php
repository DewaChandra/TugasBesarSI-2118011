@extends('templates.default')

@section('content')
<h1>Edit Data Absensi Karyawan</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('absensi.update', $absensi->id) }}" class="" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">ID Absensi</label>
                <input type="text" name="ID_Absensi" class="form-control @error('ID_Absensi') is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan ID Absensi" value="{{ old('ID_Absensi') ?? $absensi->ID_Absensi }}">
                @error('ID_Absensi')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" name="Tgl" class="form-control @error('Tgl') is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan Tanggal" value="{{ old('Tgl') ?? $absensi->Tgl }}">
                @error('Tgl')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" name="NIP" class="form-control @error('NIP') is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan NIP" value="{{ old('NIP') ?? $absensi->NIP }}">
                @error('NIP')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Jam Masuk</label>
                <input type="time" name="Jam_Masuk" class="form-control @error('Jam_Masuk') is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan Jam Masuk" value="{{ old('Jam_Masuk') ?? $absensi->Jam_Masuk }}">
                @error('Jam_Masuk')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <input type="text" name="Keterangan" class="form-control @error('Keterangan') is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan Keterangan" value="{{ old('Keterangan') ?? $absensi->Keterangan }}">
                @error('Keterangan')
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