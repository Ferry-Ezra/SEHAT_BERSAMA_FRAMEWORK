<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pasien</title>

    <style>
        body {
            box-sizing: border-box;
            font-size: 16px;
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            box-sizing: border-box;
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        thead {
            background-color: #3C91E6;
            color: white;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            text-align: left;
            padding: 10px;
        }

        tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        .center {
            text-align: center;
        }

        @media print {
            body {
                margin: 0;
                padding: 0;
                font-size: 12px;
            }

            h1 {
                font-size: 18px;
            }

            table {
                page-break-after: always;
            }

            th,
            td {
                padding: 8px;
            }
        }
    </style>
</head>

<body>
    <h1>Data Pasien</h1>
    <table align="center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pasien as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->gender }}</td>
                <td>{{ $data->tanggal_lahir }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="center">Tidak Ada Data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
