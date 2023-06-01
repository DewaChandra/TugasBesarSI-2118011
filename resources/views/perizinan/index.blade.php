@extends('templates.default')

@section('content')
<h1>Perizinan Karyawan</h1>
<div class="card">
    <div class="table-responsive">
        <table class="table table-vcenter card-table">
            <thead>
                <tr>
                    <th>ID Izin</th>
                    <th>Total Izin</th>
                    <th>Jumlah Izin</th>
                    <th>NIP</th>
                    <th class="w-1"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($perizinans as $perizinan)
                <tr>
                    <td>{{ $perizinan->ID_Izin }}</td>
                    <td>{{ $perizinan->Total_Izin }}</td>
                    <td>{{ $perizinan->Jumlah_Izin }}</td>
                    <td>{{ $perizinan->NIP }}</td>
                    <td>
                        <a href="{{ route('perizinan.edit', $perizinan->id) }}"  class="btn btn-info btn-sm">Edit</a>
                        <form action="{{ route('perizinan.destroy', $perizinan->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                @endforeach
                <a href="{{ route('perizinan.create') }}" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="#" data-bs-target="#">
                    Tambah Data
                </a>
            </tbody>
        </table>
    </div>
</div>
<a href="{{ route('perizinan.exportpdf') }}" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="#" data-bs-target="#">
    Report
</a>
@endsection