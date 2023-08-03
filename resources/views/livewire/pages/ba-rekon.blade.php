<div class="overflow-x-auto">
    <table class="table table-xs">
        <thead>
            <tr>
                <th>Tanggal upload</th>
                <th>Witel</th>
                <th>Kota</th>
                <th>Gedung</th>
                <th>Peruntukan</th>
                <th>klasifikasi</th>
                <th>Nama file</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                @php
                    $filename = implode('-', [$data->q_name, $data->lokasi()->nama, $data->klasifikasi_baru, $data->peruntukan_baru]);
                @endphp
                <tr>
                    <td>{{ $data->created_at }}</td>
                    <td>{{ $data->peruntukan->lokasi->witel }}</td>
                    <td>{{ $data->peruntukan->lokasi->kota }}</td>
                    <td>{{ $data->peruntukan->lokasi->nama }}</td>
                    <td>{{ $data->peruntukan->peruntukan }}</td>
                    <td>{{ $data->klasifikasi_baru }}</td>
                    <td>
                        <button wire:click.prevent="downloadba({{ $data }})" class="hover:underline text-primary">
                            {{ $filename }}
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
