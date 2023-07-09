<div>
    <input type="checkbox" id="createLokasiModal" class="modal-toggle" wire:model="show" />
    <form class="modal" wire:submit.prevent="simpan">
        <div class="modal-box">
            <h3 class="font-bold text-lg mb-6">Tambah lokasi baru</h3>
            <div class="flex flex-col gap-3">
                <select wire:model="witel" class="select bg-base-200 w-full">
                    <option value="">Pilih witel</option>
                    @foreach (config('ios.listWitel') as $wtl)
                        <option value="{{ $wtl }}">{{ $wtl }}</option>
                    @endforeach
                </select>
                <input type="text" wire:model="kota" placeholder="Kota / STO" class="input bg-base-200 w-full" />
                <input type="text" wire:model="alamat" placeholder="Alamat" class="input bg-base-200 w-full" />
                <input type="text" wire:model="nama" placeholder="Nama gedung" class="input bg-base-200 w-full" />
            </div>
            <div class="modal-action justify-between">
                <label for="createLokasiModal" class="btn btn-circle">
                    @livewire('icons.close')
                </label>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>
