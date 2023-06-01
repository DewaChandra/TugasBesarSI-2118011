@extends('templates.default')

@section('content')
<h1>Gaji Karyawan</h1>
<div class="card">
    <div class="table-responsive">
        <table class="table table-vcenter card-table">
            <thead>
                <tr>
                    <th>ID Gaji</th>
                    <th>NIP</th>
                    <th>Gaji Pokok</th>
                    <th>ID Tunjangan</th>
                    <th>Jabatan</th>
                    <th>Total Gaji</th>
                    <th class="w-1"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gajis as $gaji)
                <tr>
                    <td>{{ $gaji->ID_Gaji }}</td>
                    <td>{{ $gaji->NIP }}</td>
                    <td>{{ $gaji->Gaji_Pokok }}</td>
                    <td>{{ $gaji->ID_Tunjangan }}</td>
                    <td>{{ $gaji->Jabatan }}</td>
                    <td>{{ $gaji->Total_Gaji }}</td>
                    <td>
                        <a href="{{ route('gaji.edit', $gaji->id) }}"  class="btn btn-info btn-sm">Edit</a>
                        <form action="{{ route('gaji.destroy', $gaji->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                @endforeach
                <a href="{{ route('gaji.create') }}" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="#" data-bs-target="#">
                    Tambah Data
                </a>
            </tbody>
        </table>
    </div>
</div>
<a href="{{ route('gaji.exportpdf') }}" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="#" data-bs-target="#">
    Report
</a>
@endsection