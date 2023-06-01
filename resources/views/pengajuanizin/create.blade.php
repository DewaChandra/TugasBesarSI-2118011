@extends('templates.default')

@section('content')
<h1>Buat Data Pengajuan Izin Karyawan</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('pengajuanizin.store') }}" class="" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">ID Pengajuan Izin</label>
                <input type="text" name="ID_PengajuanIzin" class="form-control @error('ID_PengajuanIzin') is-invalid @enderror"
                    name="example-text-input" 
                    placeholder="Masukkan ID Pengajuan Izin">
                @error('ID_PengajuanIzin')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Tgl Pengajuan</label>
                <input type="date" name="Tgl_Pengajuan" class="form-control @error('Tgl_Pengajuan') is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan Tanggal Pengajuan">
                @error('Tgl_Pengajuan')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Tgl Mulai</label>
                <input type="date" name="Tgl_Mulai" class="form-control @error('Tgl_Mulai') is-invalid @enderror"
                    name="example-text-input"
                    placeholder="Masukkan Tanggal Mulai Izin">
                @error('Tgl_Mulai')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Tgl Akhir</label>
                <input type="date" name="Tgl_Akhir" class="form-control @error('Tgl_Akhir') is-invalid @enderror" 
                    name="example-text-input"
                    placeholder="Masukkan Tanggal Akhir Izin">
                @error('Tgl_Akhir')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Alasan Cuti</label>
                <input type="text" name="Alasan_Cuti" class="form-control @error('Alasan_Cuti') is-invalid @enderror" 
                    name="example-text-input"
                    placeholder="Masukkan Alasan Cuti">
                @error('Alasan_Cuti')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" name="NIP" class="form-control @error('NIP') is-invalid @enderror"
                    name="example-text-input"
                    placeholder="Masukkan NIP">
                @error('NIP')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Validasi</label>
                <input type="text" name="Validasi" class="form-control @error('Validasi') is-invalid @enderror"
                    name="example-text-input"
                    placeholder="Keterangan Validasi Perizinan">
                @error('Validasi')
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