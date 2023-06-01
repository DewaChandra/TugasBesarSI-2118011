@extends('templates.default')

@section('content')
<h1>Absensi Karyawan</h1>
<div class="card">
    <div class="table-responsive">
        <table class="table table-vcenter card-table">
            <thead>
                <tr>
                    <th>ID Absensi</th>
                    <th>Tanggal</th>
                    <th>NIP</th>
                    <th>Jam Masuk</th>
                    <th>Keterangan</th>
                    <th class="w-1"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($absensis as $absensi)
                <tr>
                    <td>{{ $absensi->ID_Absensi }}</td>
                    <td>{{ $absensi->Tgl }}</td>
                    <td>{{ $absensi->NIP }}</td>
                    <td>{{ $absensi->Jam_Masuk }}</td>
                    <td>{{ $absensi->Keterangan }}</td>
                    <td>
                        <a href="{{ route('absensi.edit', $absensi->id) }}"  class="btn btn-info btn-sm">Edit</a>
                        <form action="{{ route('absensi.destroy', $absensi->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                @endforeach
                <a href="{{ route('absensi.create') }}" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="#" data-bs-target="#">
                    Tambah Data
                </a>
            </tbody>
        </table>
    </div>
</div>
<a href="{{ route('absensi.exportpdf') }}" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="#" data-bs-target="#">
    Report
</a>
@endsection