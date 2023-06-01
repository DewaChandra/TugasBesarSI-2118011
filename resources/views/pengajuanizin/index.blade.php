@extends('templates.default')

@section('content')
<h1>Pengajuan Izin</h1>
<div class="card">
    <div class="table-responsive">
        <table class="table table-vcenter card-table">
            <thead>
                <tr>
                    <th>ID Pengajuan</th>
                    <th>Tgl Pengajuan</th>
                    <th>Tgl Mulai</th>
                    <th>Tgl Akhir</th>
                    <th>Alasan Cuti</th>
                    <th>NIP</th>
                    <th>Validasi</th>
                    <th class="w-1"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengajuanizins as $pengajuanizin)
                <tr>
                    <td>{{ $pengajuanizin->ID_PengajuanIzin }}</td>
                    <td>{{ $pengajuanizin->Tgl_Pengajuan }}</td>
                    <td>{{ $pengajuanizin->Tgl_Mulai }}</td>
                    <td>{{ $pengajuanizin->Tgl_Akhir }}</td>
                    <td>{{ $pengajuanizin->Alasan_Cuti }}</td>
                    <td>{{ $pengajuanizin->NIP }}</td>
                    <td>{{ $pengajuanizin->Validasi }}</td>
                    <td>
                        <a href="{{ route('pengajuanizin.edit', $pengajuanizin->id) }}"  class="btn btn-info btn-sm">Edit</a>
                        <form action="{{ route('pengajuanizin.destroy', $pengajuanizin->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                @endforeach
                <a href="{{ route('pengajuanizin.create') }}" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="#" data-bs-target="#">
                    Tambah Data
                </a>
            </tbody>
        </table>
    </div>
</div>
<a href="{{ route('pengajuanizin.exportpdf') }}" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="#" data-bs-target="#">
    Report
</a>
@endsection