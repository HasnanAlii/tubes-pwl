<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpindahan Stok</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Laporan Perpindahan Stok Minimarket Pak jayusman Cabang {{Auth::user()->cabang->name}}</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Produk</th>
                <th>Tipe</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stockMovements as $movement)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $movement->product->name ?? '-' }}</td>
                    <td>{{ $movement->type === 'in' ? 'Masuk' : 'Keluar' }}</td>
                    <td>{{ $movement->quantity }}</td>
                    <td>{{ $movement->created_at->format('d M Y, H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
