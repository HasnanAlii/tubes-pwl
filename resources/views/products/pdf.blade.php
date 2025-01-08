<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
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
    <h2>Laporan Stok Minimarket Pak jayusman Cabang {{Auth::user()->cabang->name}}</h2>
    <table>
        <thead>
            <tr>
                <th class="text-center" scope="col">No</th>
                <th class="text-start" scope="col">Nama Produk</th>
                <th class="text-start" scope="col">SKU</th>
                <th class="text-center" scope="col">Harga</th>
                <th class="text-center" scope="col">Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-start">{{ $product->name }}</td>
                <td class="text-start">{{ $product->sku }}</td>
                <td class="text-center">Rp. {{ number_format($product->price, 0, ',', '.') }}</td>
                <td class="text-center">{{ $product->stock }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
