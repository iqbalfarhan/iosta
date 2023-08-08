{{-- <div class="overflow-x-auto">
    
</div> --}}


<div class="card card-compact bg-base-100">
    <div class="card-body">
        <div class="flex flex-col gap-6">
            <input type="text" placeholder="Cari object sewa dengan gedung, fungsi, klasifikasi atau nama peruntukan"
                class="input input-sm w-full bg-base-200" wire:model="cari" />
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="table table-sm">
            <thead class="bg-base-300">
                <th></th>
                <th>Witel</th>
                <th>Gedung</th>
                <th>Fungsi</th>
                <th>klasifikasi</th>
                <th>Peruntukan</th>
                <th>Luas</th>
                <th>BR</th>
                <th>SC</th>
                <th>Status</th>
                <th>Q</th>
                <th>Kelas</th>
            </thead>
            <tbody>
                @foreach ($datas as $key => $item)
                    <tr>
                        <th>{{ $key + 1 }}</th>
                        <td>{{ $item->lokasi->witel }}</td>
                        <td>
                            <a href="{{ route('settings.lokasi.detail', $item->lokasi->id) }}" class="flex gap-2">
                                <img src="{{ $item->lokasi->gambar }}" class="w-4 h-4 rounded-full" />
                                {{ $item->lokasi->nama }}
                            </a>
                        </td>
                        <td>{{ $item->fungsi }}</td>
                        <td>{{ $item->klasifikasi }}</td>
                        <td>{{ $item->peruntukan }}</td>
                        <td>
                            <a class="tooltip cursor-pointer" data-tip="Selisih {{ $item->luasStatus()['diff'] }}">
                                {{ $item->lastlog->luas ?? '' }}
                            </a>
                        </td>
                        <td>{{ $item->lastlog->br ?? '0' }}</td>
                        <td>{{ $item->lastlog->sc ?? '0' }}</td>
                        <td>{{ $item->lastlog->status ?? '' }}</td>
                        <td>{{ $item->lastlog->kode_q ?? '' }}</td>
                        <td>{{ $item->lastlog->layanan ?? '' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
