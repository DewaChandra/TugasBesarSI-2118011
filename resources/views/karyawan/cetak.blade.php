<!DOCTYPE html>
<html>

<head>
    <style>
    #tbl {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 7;
        border-collapse: collapse;
        width: 100%;
    }

    #tbl td,
    #tbl th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #tbl tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #tbl tr:hover {
        background-color: #ddd;
    }

    #tbl th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
    </style>
</head>

<body>
    <h1>Laporan Data Karyawan</h1>

    <table id="tbl">
        <tr>
            <th>No</th>
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
        </tr>
        @php
            $no=1;
        @endphp
        @foreach ($karyawans as $karyawan)
        <tr>
            <td>{{ $no++ }}</td>
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
        </tr>
        @endforeach
    </table>
</body>

</html>