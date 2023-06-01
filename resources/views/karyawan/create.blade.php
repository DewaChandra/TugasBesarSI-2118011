@extends('templates.default')

@section('content')
<h1>Buat Data Karyawan</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('karyawan.store') }}" class="" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" name="NIP" class="form-control @error('NIP') is-invalid @enderror" 
                    name="example-text-input" placeholder="Masukkan NIP">
                @error('NIP')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="Nama" class="form-control @error('Nama') is-invalid @enderror" 
                    name="example-text-input" placeholder="Masukkan Nama">
                @error('Nama')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Tempat Lahir</label>
                <input type="text" name="Tempat_Lahir" class="form-control @error('Tempat_Lahir') is-invalid @enderror" 
                    name="example-text-input" placeholder="Masukkan Tempat Lahir">
                @error('Tempat_Lahir')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="Tanggal_Lahir" class="form-control @error('Tanggal_Lahir') is-invalid @enderror" 
                    name="example-text-input" placeholder="Masukkan Tanggal Lahir">
                @error('Tanggal_Lahir')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <input type="text" name="Jenis_Kelamin" class="form-control @error('Jenis_Kelamin') is-invalid @enderror" 
                    name="example-text-input" placeholder="Masukkan Jenis Kelamin">
                @error('Jenis_Kelamin')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Agama</label>
                <input type="text" name="Agama" class="form-control @error('Agama') is-invalid @enderror" 
                    name="example-text-input" placeholder="Masukkan Agama">
                @error('Agama')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="Alamat" class="form-control @error('Alamat') is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan Alamat">
                @error('Alamat')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Status Kawin</label>
                <input type="text" name="Status_Kawin" class="form-control @error('Status_Kawin') is-invalid @enderror" 
                    name="example-text-input" placeholder="Masukkan Status Kawin">
                @error('Status_Kawin')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Kewarganegaraan</label>
                <input type="text" name="Kewarganegaraan" class="form-control @error('Kewarganegaraan') is-invalid @enderror" 
                    name="example-text-input" placeholder="Masukkan Kewarganegaraan">
                @error('Kewarganegaraan')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Pendidikan</label>
                <input type="text" name="Pendidikan" class="form-control @error('Pendidikan') is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan Pendidikan">
                @error('Pendidikan')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Jurusan</label>
                <input type="text" name="Jurusan" class="form-control @error('Jurusan') is-invalid @enderror" 
                    name="example-text-input"
                    placeholder="Masukkan Jurusan">
                @error('Jurusan')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Jabatan</label>
                <input type="text" name="Jabatan" class="form-control @error('Jabatan') is-invalid @enderror" 
                    name="example-text-input" placeholder="Masukkan Jabatan">
                @error('Jabatan')
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