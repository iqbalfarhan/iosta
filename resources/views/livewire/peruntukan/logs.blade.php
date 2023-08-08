<div class="flex flex-col gap-4">
    <div>
        <span>Riwayat perubahan peruntukan : <b>
                {{ $peruntukan->fungsi }} -
                {{ $peruntukan->peruntukan }} -
                {{ $peruntukan->lokasi->nama }} -
                {{ $peruntukan->lokasi->witel }}
            </b></span>
    </div>
    <div class="overflow-x-auto bg-base-100 rounded-xl">
        <table class="table table-sm bg-base-100">
            <thead class="bg-base-300">
                <tr>
                    <th>ID</th>
                    <th>kode_q</th>
                    <th>luas</th>
                    <th>br</th>
                    <th>sc</th>
                    <th>status</th>
                    <th>durasi</th>
                    <th>layanan</th>
                    <th>created at</th>
                    <th>Download file</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->kode_q }}</td>
                        <td>{{ $data->luas }}</td>
                        <td>{{ $data->br }}</td>
                        <td>{{ $data->sc }}</td>
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->durasi }}</td>
                        <td>{{ $data->layanan }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td>
                            <button class="btn btn-xs">
                                <x-icons name="download" />
                                download
                            </button>
                        </td>
                        <td>
                            <a href="{{ route('logs.edit', $data->id) }}" class="btn btn-xs">
                                <x-icons name="edit" />
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
