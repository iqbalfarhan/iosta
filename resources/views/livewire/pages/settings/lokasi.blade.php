<div class="flex flex-col gap-6">
    <div class="flex justify-between gap-6">
        <div class="flex flex-1">
            <input type="text" placeholder="Cari lokasi dengan witel, kota, fungsi atau nama"
                class="input w-full bg-base-100" wire:model="cari">
        </div>
        <div class="flex gap-2">
            <button wire:click.prevent="$emit('toggleShow')" class="btn btn-square btn-primary">
                <x-icons name="plus" size="5" />
            </button>
        </div>
    </div>


    <div class="flex flex-col gap-3">
        <div class="flex justify-between">
            <div class="flex gap-6 items-center">
                <span>Filter:</span>
                <select name="" id="" class="bg-transparent text-sm text-right">
                    @foreach (config('ios.listWitel') as $wtl)
                        <option value="{{ $wtl == 'REGIONAL' ? '' : $wtl }}">{{ $wtl }}</option>
                    @endforeach
                </select>
                <select name="" id="" class="bg-transparent text-sm">
                    <option value="">Semua kota</option>
                </select>
            </div>
            <div>
                <span class="text-sm">{{ $datas->count() }} lokasi</span>
            </div>
        </div>
        <div class="overflow-x-auto rounded-xl">
            <table class="table table-sm bg-base-100">
                <thead>
                    <tr class="bg-base-300">
                        <th></th>
                        <th>Witel</th>
                        <th>Kota</th>
                        <th>Alamat</th>
                        <th>Nama gedung</th>
                        <th>Klas</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $key => $data)
                        <tr>
                            <th>{{ $key + 1 }}</th>
                            <td>{{ $data->witel }}</td>
                            <td>{{ $data->kota }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>
                                <div class="flex items-center gap-2">
                                    <div class="avatar">
                                        <div class="w-4 rounded-full">
                                            <img src="{{ $data->gambar }}" />
                                        </div>
                                    </div>
                                    {{ $data->nama }}
                                </div>
                            </td>
                            <td>{{ $data->peruntukans_count }}</td>
                            <td>
                                <a href="{{ route('settings.lokasi.detail', $data->id) }}"
                                    class="btn btn-xs btn-ghost btn-circle">
                                    <x-icons name="folder" />
                                </a>
                                <button wire:click.prevent="hapusLokasi('{{ $data->id }}')"
                                    class="btn btn-xs btn-ghost btn-circle">
                                    <x-icons name="close" />
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @livewire('pages.settings.create-lokasi')

</div>
