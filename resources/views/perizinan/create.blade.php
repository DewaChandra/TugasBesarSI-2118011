@extends('templates.default')

@section('content')
<h1>Buat Data Perizinan Karyawan</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('perizinan.store') }}" class="" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">ID Izin</label>
                <input type="text" name="ID_Izin" class="form-control @error('ID_Izin') is-invalid @enderror" 
                    name="example-text-input" placeholder="Masukkan ID Izin">
                @error('ID_Izin')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Total Izin</label>
                <input type="integer" name="Total_Izin" class="form-control @error('Total_Izin') is-invalid @enderror" 
                    name="example-text-input" placeholder="Masukkan Total Izin yang Tersisa">
                @error('Total_Izin')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Izin</label>
                <input type="integer" name="Jumlah_Izin" class="form-control @error('Jumlah_Izin') is-invalid @enderror" 
                    name="example-text-input" placeholder="Masukkan Jumlah Izin yang Diambil">
                @error('Jumlah_Izin')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror     
            </div>
            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" name="NIP" class="form-control @error('NIP') is-invalid @enderror" 
                    name="example-text-input" placeholder="Masukkan NIP">
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