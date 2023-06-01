@extends('templates.default')

@section('content')
<h1>Training Karyawan</h1>
<div class="card">
    <div class="table-responsive">
        <table class="table table-vcenter card-table">
            <thead>
                <tr>
                    <th>ID Training</th>
                    <th>Tgl Training</th>
                    <th>Nama Training</th>
                    <th>NIP</th>
                    <th class="w-1"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainings as $training)
                <tr>
                    <td>{{ $training->ID_Training }}</td>
                    <td>{{ $training->Tgl_Training }}</td>
                    <td>{{ $training->Nama_Training }}</td>
                    <td>{{ $training->NIP }}</td>
                    <td>
                        <a href="{{ route('training.edit', $training->id) }}"  class="btn btn-info btn-sm">Edit</a>
                        <form action="{{ route('training.destroy', $training->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                @endforeach
                <a href="{{ route('training.create') }}" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="#" data-bs-target="#">
                    Tambah Data
                </a>
            </tbody>
        </table>
    </div>
</div>
<a href="{{ route('training.exportpdf') }}" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="#" data-bs-target="#">
    Report
</a>
@endsection