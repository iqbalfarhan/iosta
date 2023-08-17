<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        html {
            font-family: monospace;
            font-size: 6pt;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1>Peruntukan Q3</h1>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Witel</th>
                <th>Sto</th>
                <th>Klasifikasi</th>
                <th>Fungsi</th>
                <th>Peruntukan</th>
                <th>Luas</th>
                <th>BR</th>
                <th>SC</th>
                <th>Status</th>
                <th>Durasi</th>
                <th>Layanan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $key => $data)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $data->peruntukan->lokasi->witel }}</td>
                    <td>{{ $data->peruntukan->lokasi->nama }}</td>
                    <td>{{ $data->peruntukan->klasifikasi }}</td>
                    <td>{{ $data->peruntukan->fungsi }}</td>
                    <td>{{ $data->peruntukan->peruntukan }}</td>
                    <td>{{ $data->luas }}</td>
                    <td>{{ $data->br }}</td>
                    <td>{{ $data->sc }}</td>
                    <td>{{ $data->status }}</td>
                    <td>{{ $data->durasi }}</td>
                    <td>{{ $data->layanan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>
