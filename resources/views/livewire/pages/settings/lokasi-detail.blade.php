<div class="flex flex-col gap-6">
    <div class="card bg-base-100">
        <div class="card-body">
            <div class="flex gap-3 items-center">
                <div class="avatar">
                    <div class="w-12 rounded-full">
                        <img src="{{ $data->gambar }}" />
                    </div>
                </div>
                <div class="flex flex-1 flex-col">
                    <div class="font-semibold text-lg">{{ $data->nama }} - {{ $data->witel }}</div>
                    <div>{{ $data->alamat }}</div>
                </div>
                <button class="btn btn-primary btn-sm" wire:click.prevent="$emit('toggleEditLokasiModal')">
                    <x-icons name="edit" /> edit
                </button>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-3">
        <div class="flex justify-between">
            <h3 class="font-semibold">Peruntukan gedung:</h3>
            {{-- <button wire:click.prevent="$emit('toggleShow')" class="btn btn-xs btn-ghost">Tambah peruntukan</button> --}}
        </div>
        <div class="overflow-x-auto bg-base-100 rounded-xl">
            <table class="table table-sm">
                <thead>
                    <tr class="bg-base-300">
                        <th></th>
                        <th>Fungsi</th>
                        <th>Luas</th>
                        <th>BR</th>
                        <th>SC</th>
                        <th>klasifikasi</th>
                        <th>peruntukan</th>
                        <th>status</th>
                        <th>Durasi</th>
                        <th>kelas layanan</th>
                        <th>BA Rekon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data->peruntukans as $key => $item)
                        <tr>
                            <th>{{ $key + 1 }}</th>
                            <td>{{ $item->fungsi }}</td>
                            <td>{{ $item->lastlog->luas }}</td>
                            <td>{{ $item->lastlog->br }}</td>
                            <td>{{ $item->lastlog->sc }}</td>
                            <td>{{ $item->klasifikasi }}</td>
                            <td>{{ $item->peruntukan }}</td>
                            <td>{{ $item->lastlog->status }}</td>
                            <td>{{ $item->lastlog->durasi }} bulan</td>
                            <td>{{ $item->lastlog->layanan }}</td>
                            <td>
                                @if ($item->fileba)
                                    <button class="btn btn-xs"
                                        wire:click.prevent="downloadba('{{ $item->id }}')">Download</button>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('peruntukan.edit', $item->id) }}"
                                    class="btn btn-xs btn-circle btn-ghost">
                                    <x-icons name="edit" />
                                </a>
                                <a href="{{ route('peruntukan.logs', $item->id) }}"
                                    class="btn btn-xs btn-circle btn-ghost">
                                    <x-icons name="list-bullet" />
                                </a>
                                <button class="btn btn-xs btn-circle btn-ghost"
                                    wire:click.prevent="hapusPeruntukan({{ $item->id }})">
                                    <x-icons name="close" />
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
