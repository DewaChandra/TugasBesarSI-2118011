@extends('templates.default')

@section('content')
<h1>Data Tunjangan Karyawan</h1>
<div class="card">
    <div class="table-responsive">
        <table class="table table-vcenter card-table">
            <thead>
                <tr>
                    <th>ID Tunjangan</th>
                    <th>Nama Tunjangan</th>
                    <th>Besar Tunjangan</th>
                    <th class="w-1"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tunjangans as $tunjangan)
                <tr>
                    <td>{{ $tunjangan->ID_Tunjangan }}</td>
                    <td>{{ $tunjangan->Nama_Tunjangan }}</td>
                    <td>{{ $tunjangan->Besar_Tunjangan }}</td>
                    <td>
                        <a href="{{ route('tunjangan.edit', $tunjangan->id) }}"  class="btn btn-sm">Edit</a>
                        <form action="{{ route('tunjangan.destroy', $tunjangan->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                @endforeach
                <a href="{{ route('tunjangan.create') }}" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="#" data-bs-target="#">
                    Tambah Data
                </a>
            </tbody>
        </table>
    </div>
</div>
@endsection