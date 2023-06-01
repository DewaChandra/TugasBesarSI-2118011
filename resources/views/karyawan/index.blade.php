@extends('templates.default')

@section('content')
<h1>Data Karyawan</h1>
<div class="table-responsive">
    <table class="table table-vcenter card-table">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Status Kawin</th>
                <th>Kewarganegaraan</th>
                <th>Pendidikan</th>
                <th>Jurusan</th>
                <th>Jabatan</th>
                <th class="w-1"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawans as $karyawan)
            <tr>
                <td>{{ $karyawan->NIP }}</td>
                <td>{{ $karyawan->Nama }}</td>
                <td>{{ $karyawan->Tempat_Lahir }}</td>
                <td>{{ $karyawan->Tanggal_Lahir }}</td>
                <td>{{ $karyawan->Jenis_Kelamin }}</td>
                <td>{{ $karyawan->Agama }}</td>
                <td>{{ $karyawan->Alamat }}</td>
                <td>{{ $karyawan->Status_Kawin }}</td>
                <td>{{ $karyawan->Kewarganegaraan }}</td>
                <td>{{ $karyawan->Pendidikan }}</td>
                <td>{{ $karyawan->Jurusan }}</td>
                <td>{{ $karyawan->Jabatan }}</td>
                <td>
                    <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-info btn-sm">Edit</a>
                    <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                    </form>
                </td>
            </tr>
            @endforeach
            <a href="{{ route('karyawan.create') }}" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="#"
                data-bs-target="#">
                Tambah Data
            </a>
        </tbody>
    </table>
</div>
<a href="{{ route('karyawan.exportpdf') }}" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="#" data-bs-target="#">
    Report
</a>
@endsection