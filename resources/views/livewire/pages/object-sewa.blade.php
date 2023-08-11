<div class="card card-compact bg-base-100 w-full">
    <div class="card-body flex flex-row justify-between">
        <div class="card-title">Data peruntukan {{ $witel }}</div>
        <div>
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-success btn-sm">
                    <x-icons name="download" size="4" />
                    Download
                </label>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-200 rounded-box w-52">
                    <li><button wire:click.prevent="downloadPdf">Download PDF</button></li>
                    <li><button wire:click.prevent="downloadExcel">Download Excel</button></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="overflow-x-auto w-full">
        <table class="table table-sm w-full">
            <thead class="bg-base-300">
                <th></th>
                <th>Witel</th>
                <th>STO</th>
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
            <thead>
                <th></th>
                <th>
                    <select class="select select-xs w-full bg-base-200" wire:model="witel">
                        @foreach ($witels as $wtl)
                            <option value="{{ $wtl }}">{{ $wtl }}</option>
                        @endforeach
                    </select>
                </th>
                <th>
                    <select class="select select-xs w-full bg-base-200" wire:model="lokasi_id">
                        @foreach ($lokasis as $lksid => $lksnama)
                            <option value="{{ $lksid }}">{{ $lksnama }}</option>
                        @endforeach
                    </select>
                </th>
                <th>
                    <select class="select select-xs w-full bg-base-200" wire:model="fungsi">
                        @foreach (config('ios.listFungsiGedung') as $fn)
                            <option value="{{ $fn }}">{{ $fn }}</option>
                        @endforeach
                    </select>
                </th>
                <th>
                    <select class="select select-xs w-full bg-base-200" wire:model="klasifikasi">
                        @foreach (config('ios.listKlasifikasi') as $kl)
                            <option value="{{ $kl }}">{{ $kl }}</option>
                        @endforeach
                    </select>
                </th>
                <th>
                    <input type="text" class="input input-xs w-full bg-base-200" wire:model="peruntukan">
                </th>
            </thead>
            <tbody>
                @forelse ($datas as $key => $item)
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
                @empty
                    <tr>
                        <td colspan="12" class="text-center">Tidak ada data yang ditemukan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
