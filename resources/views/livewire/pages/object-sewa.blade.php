<div class="flex flex-col gap-6">
    <input type="text" placeholder="Cari object sewa dengan gedung, fungsi, klasifikasi atau nama peruntukan"
        class="input w-full" wire:model="cari" />
    <div class="flex flex-col gap-3">
        <span class="text-xs text-base-content">Data yang ditampilkan disesuaikan dengan area anda :
            <b>{{ auth()->user()->witel }}</b></span>
        <div class="overflow-x-auto bg-base-100 rounded-xl">
            <table class="table table-xs">
                <thead>
                    <tr class="bg-base-300">
                        <th></th>
                        <th>Witel</th>
                        <th>Gedung</th>
                        <th>Fungsi</th>
                        <th>Luas</th>
                        <th>klasifikasi</th>
                        <th>Peruntukan</th>
                        <th>Download Excel</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $key => $item)
                        <tr>
                            <th>{{ $key + 1 }}</th>
                            <td>{{ $item->lokasi->witel }}</td>
                            <td>
                                <a href="{{ route('settings.lokasi.detail', $item) }}"
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
                                <div class="tooltip cursor-pointer" data-tip="Diff {{ $item->luasStatus()['diff'] }}">
                                    <span
                                        class="text-{{ $item->luasstatus()['color'] }}">{{ $item->luasstatus()['symbol'] }}</span>
                                    {{ $item->luas }}
                                </div>
                            </td>
                            <td>{{ $item->klasifikasi }}</td>
                            <td>{{ $item->peruntukan }}</td>
                            <td>
                                <button class="btn btn-xs">Download</button>
                            </td>
                            <td>
                                <a href="{{ route('ubahdata', ['peruntukan' => $item->id]) }}" class="btn btn-xs">
                                    edit br
                                </a>
                                <a href="{{ route('ubahdata') }}" class="btn btn-xs">
                                    edit SC
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
