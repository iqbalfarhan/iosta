<div class="flex flex-col gap-6">
    <input type="text" placeholder="Cari object sewa dengan gedung, fungsi, klasifikasi atau nama peruntukan"
        class="input w-full" wire:model="cari" />
    <div class="flex flex-col gap-3">
        <div class="flex justify-between items-end">
            <span class="text-xs text-base-content">Data yang ditampilkan disesuaikan dengan area anda :
                <b>{{ auth()->user()->witel }}</b></span>

            <button class="btn btn-xs btn-success">
                download excel
            </button>
        </div>
        <div class="overflow-x-auto bg-base-100 rounded-xl">
            <table class="table table-sm">
                <thead>
                    <tr class="bg-base-300">
                        <th></th>
                        <th>Witel</th>
                        <th>Gedung</th>
                        <th>Fungsi</th>
                        <th>Luas</th>
                        <th>BR</th>
                        <th>SC</th>
                        <th>klasifikasi</th>
                        <th>Peruntukan</th>
                        <th>Status</th>
                        <th>Q</th>
                        <th>Layanan</th>
                        <th>Edit</th>
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
                            <td>
                                <a href="{{ route('peruntukan.show', $item) }}" class="tooltip cursor-pointer"
                                    data-tip="Selisih {{ $item->luasStatus()['diff'] }}">
                                    <span
                                        class="text-{{ $item->luasstatus()['color'] }}">{{ $item->luasstatus()['symbol'] }}</span>
                                    {{ $item->luas }}
                                </a>
                            </td>
                            <td>{{ $item->br }}</td>
                            <td>{{ $item->sc }}</td>
                            <td>{{ $item->klasifikasi }}</td>
                            <td>{{ $item->peruntukan }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->kode_q }}</td>
                            <td>{{ $item->layanan }}</td>
                            <td>
                                <a href="{{ route('ubahdata', ['peruntukan' => $item->id]) }}" class="btn btn-xs">
                                    edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
