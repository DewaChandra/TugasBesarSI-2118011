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
    <h1>Laporan Absensi Karyawan</h1>

    <table id="tbl">
        <tr>
            <th>No</th>
            <th>ID Absensi</th>
            <th>Tanggal</th>
            <th>NIP</th>
            <th>Jam Masuk</th>
            <th>Keterangan</th>
        </tr>
        @php
            $no=1;
        @endphp
        @foreach ($absensis as $absensi)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $absensi->ID_Absensi }}</td>
            <td>{{ $absensi->Tgl }}</td>
            <td>{{ $absensi->NIP }}</td>
            <td>{{ $absensi->Jam_Masuk }}</td>
            <td>{{ $absensi->Keterangan }}</td>>
        </tr>
        @endforeach
    </table>
</body>

</html>