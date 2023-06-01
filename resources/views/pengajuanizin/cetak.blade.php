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
    <h1>Laporan Pengajuan Izin Karyawan</h1>

    <table id="tbl">
        <tr>
            <th>No</th>
            <th>ID Pengajuan</th>
            <th>Tgl Pengajuan</th>
            <th>Tgl Mulai</th>
            <th>Tgl Akhir</th>
            <th>Alasan Cuti</th>
            <th>NIP</th>
            <th>Validasi</th>
        </tr>
        @php
            $no=1;
        @endphp
        @foreach ($pengajuanizins as $pengajuanizin)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $pengajuanizin->ID_PengajuanIzin }}</td>
            <td>{{ $pengajuanizin->Tgl_Pengajuan }}</td>
            <td>{{ $pengajuanizin->Tgl_Mulai }}</td>
            <td>{{ $pengajuanizin->Tgl_Akhir }}</td>
            <td>{{ $pengajuanizin->Alasan_Cuti }}</td>
            <td>{{ $pengajuanizin->NIP }}</td>
            <td>{{ $pengajuanizin->Validasi }}</td>>
        </tr>
        @endforeach
    </table>
</body>

</html>