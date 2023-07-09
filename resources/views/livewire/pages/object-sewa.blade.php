<div class="flex flex-col gap-6">
    <input type="text" placeholder="Cari user dengan nama, email, username atau witel" class="input w-full" />
    <div class="flex flex-col gap-3">
        <span class="text-xs text-base-content">Data yang ditampilkan disesuaikan dengan area anda :
            {{ auth()->user()->witel }}</span>
        <div class="overflow-x-auto bg-base-100 rounded-xl">
            <table class="table">
                <thead>
                    <tr class="bg-base-300">
                        <th></th>
                        <th>Gedung</th>
                        <th>Fungsi</th>
                        <th>Luas</th>
                        <th>klasifikasi</th>
                        <th>Penggunaan</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $key => $item)
                        <tr>
                            <th>{{ $key + 1 }}</th>
                            <td>{{ $item->lokasi->nama }}</td>
                            <td>{{ $item->fungsi }}</td>
                            <td>{{ $item->luas }}</td>
                            <td>{{ $item->klasifikasi }}</td>
                            <td>{{ $item->peruntukan }}</td>
                            <td>
                                <button class="btn btn-xs btn-circle btn-ghost">
                                    @livewire('icons.edit')
                                </button>
                                <button class="btn btn-xs btn-circle btn-ghost">
                                    @livewire('icons.download')
                                </button>
                                <button class="btn btn-xs btn-circle btn-ghost"
                                    wire:click.prevent="hapusPeruntukan({{ $item->id }})">
                                    @livewire('icons.close')
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
