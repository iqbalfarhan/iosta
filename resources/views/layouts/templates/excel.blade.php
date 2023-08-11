<table>
    <thead>
        <tr>
            <th>No</th>
            <th>witel</th>
            <th>sto</th>
            <th>klasifikasi</th>
            <th>fungsi</th>
            <th>peruntukan</th>
            <th>luas</th>
            <th>br</th>
            <th>sc</th>
            <th>status</th>
            <th>durasi</th>
            <th>layanan</th>
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
