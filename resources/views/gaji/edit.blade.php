@extends('templates.default')

@section('content')
<h1>Edit Data Gaji Karyawan</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('gaji.update', $gaji->id) }}" class="" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">ID_Gaji</label>
                <input type="text" name="ID_Gaji" class="form-control @error('ID_Gaji') is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan ID Gaji" value="{{ old('ID_Gaji') ?? $gaji->ID_Gaji }}">
                @error('ID_Gaji')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" name="NIP" class="form-control @error('NIP') is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan NIP" value="{{ old('NIP') ?? $gaji->NIP }}">
                @error('NIP')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Gaji Pokok</label>
                <input type="integer" name="Gaji_Pokok" class="form-control @error('Gaji_Pokok') is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan Gaji Pokok" value="{{ old('Gaji_Pokok') ?? $gaji->Gaji_Pokok }}">
                @error('Gaji_Pokok')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">ID Tunjangan</label>
                <input type="text" name="ID_Tunjangan" class="form-control @error('ID_Tunjangan') is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan ID Tunjangan" value="{{ old('ID_Tunjangan') ?? $gaji->ID_Tunjangan }}">
                @error('ID_Tunjangan')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Jabatan</label>
                <input type="text" name="Jabatan" class="form-control @error('Jabatan') is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan Jabatan" value="{{ old('Jabatan') ?? $gaji->Jabatan }}">
                @error('Jabatan')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Total Gaji</label>
                <input type="integer" name="Total_Gaji" class="form-control @error('Total_Gaji') is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan Total Gaji" value="{{ old('Total_Gaji') ?? $gaji->Total_Gaji }}">
                @error('Total_Gaji')
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