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
    <h1>Laporan Perizinan Karyawan</h1>

    <table id="tbl">
        <tr>
            <th>No</th>
            <th>ID Izin</th>
            <th>Total Izin</th>
            <th>Jumlah Izin</th>
            <th>NIP</th>
        </tr>
        @php
            $no=1;
        @endphp
        @foreach ($perizinans as $perizinan)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $perizinan->ID_Izin }}</td>
            <td>{{ $perizinan->Total_Izin }}</td>
            <td>{{ $perizinan->Jumlah_Izin }}</td>
            <td>{{ $perizinan->NIP }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>