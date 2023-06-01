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
    <h1>Laporan Gaji Karyawan</h1>

    <table id="tbl">
        <tr>
            <th>No</th>
            <th>ID Gaji</th>
            <th>NIP</th>
            <th>Gaji Pokok</th>
            <th>ID Tunjangan</th>
            <th>Jabatan</th>
            <th>Total Gaji</th>
        </tr>
        @php
            $no=1;
        @endphp
        @foreach ($gajis as $gaji)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $gaji->ID_Gaji }}</td>
            <td>{{ $gaji->NIP }}</td>
            <td>{{ $gaji->Gaji_Pokok }}</td>
            <td>{{ $gaji->ID_Tunjangan }}</td>
            <td>{{ $gaji->Jabatan }}</td>
            <td>{{ $gaji->Total_Gaji }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>