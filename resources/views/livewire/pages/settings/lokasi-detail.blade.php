<div class="flex flex-col gap-6">
    <div class="card card-compact bg-base-100">
        <div class="card-body">
            <div class="flex gap-3 items-center">
                <div class="avatar">
                    <div class="w-12 rounded-full">
                        <img src="{{ $data->gambar }}" />
                    </div>
                </div>
                <div class="flex flex-1 flex-col">
                    <div class="font-semibold">{{ $data->nama }} - {{ $data->witel }}</div>
                    <div class="text-xs">{{ $data->alamat }}</div>
                </div>
                <button class="btn btn-ghost btn-sm" wire:click.prevent="$emit('toggleEditLokasiModal')">
                    @livewire('icons.edit') edit
                </button>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-3">
        <div class="flex justify-between">
            <h3 class="font-semibold">Peruntukan gedung:</h3>
            <button wire:click.prevent="$emit('toggleShow')" class="btn btn-xs btn-ghost">Tambah peruntukan</button>
        </div>
        <div class="overflow-x-auto bg-base-100 rounded-xl">
            <table class="table table-xs">
                <thead>
                    <tr class="bg-base-300">
                        <th></th>
                        <th>Fungsi</th>
                        <th>Luas</th>
                        <th>klasifikasi</th>
                        <th>peruntukan</th>
                        <th>status</th>
                        <th>Durasi</th>
                        <th>kelas layanan</th>
                        <th>Download</th>
                        <th>Edit</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data->peruntukans as $key => $item)
                        <tr>
                            <th>{{ $key + 1 }}</th>
                            <td>{{ $item->fungsi }}</td>
                            <td>{{ $item->luas }}</td>
                            <td>{{ $item->klasifikasi }}</td>
                            <td>{{ $item->peruntukan }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->durasi }} bulan</td>
                            <td>{{ $item->layanan }}</td>
                            <td>
                                <button class="btn btn-xs">Download</button>
                            </td>
                            <td>
                                <button class="btn btn-xs">BA BR</button>
                                <button class="btn btn-xs">BA SC</button>
                            </td>
                            <td>
                                <button class="btn btn-xs btn-circle btn-ghost">
                                    @livewire('icons.list-bullet', key(uniqId()))
                                </button>
                                <button class="btn btn-xs btn-circle btn-ghost">
                                    @livewire('icons.close', key(uniqId()))
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="flex flex-col gap-3">
        <h3 class="font-semibold">Riwayat perubahan:</h3>
        <div class="overflow-x-auto bg-base-100 rounded-xl">
            <table class="table table-xs">
                <thead>
                    <tr class="bg-base-300">
                        <th></th>
                        <th>luas sebelum</th>
                        <th>klasifikasi</th>
                        <th>peruntukan</th>
                        <th>fileba</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data->logs as $log)
                        <tr>
                            <td>{{ $log->id }}</td>
                            <td>{{ $log->luas }}</td>
                            <td>{{ $log->klasifikasi }}</td>
                            <td>{{ $log->peruntukan }}</td>
                            <td>
                                {{-- {{ $log->fileba }} --}}
                                <button class="btn btn-xs">
                                    download
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @livewire('components.lokasi-peruntukan', ['lokasi' => $data->id])
    @livewire('pages.settings.lokasi-edit', ['lokasi' => $data->id])
</div>
