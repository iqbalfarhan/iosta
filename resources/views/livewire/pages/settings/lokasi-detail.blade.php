<div class="flex flex-col gap-6">
    <div class="card card-compact bg-base-100">
        <div class="card-body">
            <div class="flex gap-3 items-center">
                <div class="avatar placeholder">
                    <div class="bg-neutral-focus text-neutral-content rounded-full w-12">
                        <span>MX</span>
                    </div>
                </div>
                <div class="flex flex-1 flex-col">
                    <div class="font-semibold">{{ $data->nama }} - {{ $data->witel }}</div>
                    <div class="text-xs">{{ $data->alamat }}</div>
                </div>
                <button class="btn btn-ghost btn-sm">
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
            <table class="table">
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
                                <button class="btn btn-xs btn-circle btn-ghost">
                                    @livewire('icons.edit', key(uniqId()))
                                </button>
                                <button class="btn btn-xs btn-circle btn-ghost">
                                    @livewire('icons.download', key(uniqId()))
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

        <div class="flex flex-col gap-2">
            @livewire('components.log-item')
        </div>
    </div>

    @livewire('components.lokasi-peruntukan', ['lokasi' => $data->id])
</div>
