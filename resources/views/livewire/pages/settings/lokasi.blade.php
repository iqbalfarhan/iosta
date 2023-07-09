<div class="flex flex-col gap-6">
    <div class="flex justify-between gap-6">
        <div class="flex flex-1">
            <input type="text" placeholder="Cari lokasi dengan witel, kota, fungsi atau nama"
                class="input w-full bg-base-100">
        </div>
        <div class="flex gap-3">
            <button wire:click.prevent="$emit('toggleShow')" class="btn btn-circle btn-primary">
                @livewire('icons.plus')
            </button>
        </div>
    </div>

    <div class="overflow-x-auto rounded-xl">
        <table class="table bg-base-100">
            <thead>
                <tr class="bg-base-300">
                    <th></th>
                    <th>Witel</th>
                    <th>Kota</th>
                    <th>Alamat</th>
                    <th>Nama gedung</th>
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
                        <td>{{ $data->nama }}</td>
                        <td>
                            <button class="btn btn-xs btn-ghost btn-circle">
                                @livewire('icons.folder', key($data->id))
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @livewire('pages.settings.create-lokasi')

</div>
