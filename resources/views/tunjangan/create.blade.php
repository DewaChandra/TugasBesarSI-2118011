@extends('templates.default')

@section('content')
<h1>Buat Data Tunjangan Karyawan</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('tunjangan.store') }}" class="" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">ID Tunjangan</label>
                <input type="text" name="ID_Tunjangan" class="form-control @error('ID_Tunjangan') is-invalid @enderror" 
                    name="example-text-input" placeholder="Masukkan ID Tunjangan">
                @error('ID_Tunjangan')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Tunjangan</label>
                <input type="text" name="Nama_Tunjangan" class="form-control @error('Nama_Tunjangan') is-invalid @enderror" 
                    name="example-text-input" placeholder="Masukkan Nama Tunjangan">
                @error('Nama_Tunjangan')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Besar Tunjangan</label>
                <input type="integer" name="Besar_Tunjangan" class="form-control @error('Besar_Tunjangan') is-invalid @enderror" 
                    name="example-text-input" placeholder="Masukkan Besar Tunjangan">
                @error('Besar_Tunjangan')
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