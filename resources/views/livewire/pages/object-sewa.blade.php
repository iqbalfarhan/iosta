<div class="overflow-x-auto w-full">
    <div class="flex flex-col gap-6">
        <input type="text" placeholder="Cari object sewa dengan gedung, fungsi, klasifikasi atau nama peruntukan"
            class="input w-full" wire:model="cari" />
        <div class="flex flex-col gap-3">
            <div class="overflow-x-auto bg-base-100 rounded-xl">
                <table class="table table-sm">
                    <thead>
                        <tr class="bg-base-300">
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
                            {{-- <th>Edit</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $key => $item)
                            <tr>
                                <th>{{ $key + 1 }}</th>
                                <td>{{ $item->lokasi->witel }}</td>
                                <td>
                                    <a href="{{ route('settings.lokasi.detail', $item->lokasi->id) }}"
                                        class="btn btn-xs gap-2 btn-ghost">
                                        <div class="avatar">
                                            <div class="w-4 rounded-full">
                                                <img src="{{ $item->lokasi->gambar }}" />
                                            </div>
                                        </div>
                                        {{ $item->lokasi->nama }}
                                    </a>
                                </td>
                                <td>{{ $item->fungsi }}</td>
                                <td>{{ $item->klasifikasi }}</td>
                                <td>{{ $item->peruntukan }}</td>
                                <td>
                                    <a class="tooltip cursor-pointer"
                                        data-tip="Selisih {{ $item->luasStatus()['diff'] }}">
                                        {{ $item->lastlog->luas ?? '' }}
                                    </a>
                                </td>
                                <td>{{ $item->lastlog->br ?? '0' }}</td>
                                <td>{{ $item->lastlog->sc ?? '0' }}</td>
                                <td>{{ $item->lastlog->status ?? '' }}</td>
                                <td>{{ $item->lastlog->kode_q ?? '' }}</td>
                                <td>{{ $item->lastlog->layanan ?? '' }}</td>
                                {{-- <td>
                                    <a href="{{ route('peruntukan.logs', $item->id) }}" class="btn btn-xs">
                                        edit
                                    </a>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="flex justify-between items-end">
                <span class="text-sm text-base-content">Data yang ditampilkan disesuaikan dengan area anda :
                    <b>{{ auth()->user()->witel }}</b></span>

                {{-- <button class="btn btn-xs btn-success">
                    download excel
                </button> --}}
            </div>
        </div>
    </div>

</div>
