<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pendapatan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h3, h4 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .total-row td {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h3>Laporan Pendapatan</h3>
    <h4>
        Tanggal {{ tanggal_indonesia($awal, false) }}
        s/d
        Tanggal {{ tanggal_indonesia($akhir, false) }}
    </h4>

    <table>
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="20%">Tanggal</th>
                <th width="20%">Penjualan</th>
                <th width="20%">Pembelian</th>
                <th width="20%">Pengeluaran</th>
                <th width="15%">Pendapatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td width="5%">{{ $row['DT_RowIndex'] }}</td>
                    <td th width="20%">{{ $row['tanggal'] }}</td>
                    <td th width="20%">{{ $row['penjualan'] }}</td>
                    <td th width="20%">{{ $row['pembelian'] }}</td>
                    <td th width="20%">{{ $row['pengeluaran'] }}</td>
                    <td width="15%">{{ $row['pendapatan'] }}</td>
                </tr>
            @endforeach
            <!-- Baris Total -->
        </tbody>
    </table>
</body>
</html>
