<div class="">
    <input type="checkbox" id="modalEditLokasi" class="modal-toggle" wire:model="show" />
    <div class="modal">
        <form class="modal-box" wire:submit.prevent="simpan">
            <h3 class="font-bold text-lg">Edit data gedung!</h3>
            <div class="flex flex-col gap-3 py-4">
                <select wire:model="witel" class="select bg-base-200 w-full">
                    <option value="">Pilih witel</option>
                    @foreach (config('ios.listWitel') as $wtl)
                        <option value="{{ $wtl }}">{{ $wtl }}</option>
                    @endforeach
                </select>
                <input type="text" wire:model="kota" placeholder="kota" class="input bg-base-200 w-full" />
                <input type="text" wire:model="alamat" placeholder="alamat" class="input bg-base-200 w-full" />
                <input type="text" wire:model="nama" placeholder="nama" class="input bg-base-200 w-full" />
                <div class="avatar">
                    <div class="w-12 rounded-full">
                        <img src="{{ Storage::url($photo) }}" />
                    </div>
                </div>
                <input type="file" wire:model="eviden" placeholder="eviden" class="file-input bg-base-200 w-full"
                    accept="image/*" />
            </div>
            <div class="modal-action justify-between">
                <label for="modalEditLokasi" class="btn btn-circle">
                    <x-icons name="close" />
                </label>
                <button type="submit" class="btn btn-primary">simpan</button>
            </div>
        </form>
    </div>
</div>
