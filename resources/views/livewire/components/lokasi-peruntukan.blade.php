<div>
    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="addPeruntukan" class="modal-toggle" wire:model='show' />
    <div class="modal">
        <form class="modal-box" wire:submit.prevent="simpan">
            <h3 class="font-bold text-lg">Tambah peruntukan gedung {{ $lokasi->nama }}</h3>
            <div class="flex flex-col gap-3 py-6">
                <select wire:model="fungsi" placeholder="fungsi" class="select bg-base-200 w-full">
                    <option value="">Pilih fungsi gedung</option>
                    @foreach (config('ios.listFungsiGedung') as $fn)
                        <option value="{{ $fn }}">{{ $fn }}</option>
                    @endforeach
                </select>
                <input wire:model="luas" placeholder="luas" class="input bg-base-200 w-full" />
                <select wire:model="klasifikasi" placeholder="klasifikasi" class="select bg-base-200 w-full">
                    <option value="">Pilih klasifikasi</option>
                    @foreach (config('ios.listKlasifikasi') as $qw)
                        <option value="{{ $qw }}">{{ $qw }}</option>
                    @endforeach
                </select>
                <input wire:model="peruntukan" placeholder="peruntukan" class="input bg-base-200 w-full" />
                <select wire:model="status" placeholder="status" class="select bg-base-200 w-full">
                    <option value="EXISTING">EXISTING</option>
                    <option value="NEW">NEW</option>
                </select>
                <input wire:model="durasi" placeholder="durasi" class="input bg-base-200 w-full" />
                <input wire:model="layanan" placeholder="layanan" class="input bg-base-200 w-full" />
            </div>
            <div class="modal-action justify-between">
                <label for="addPeruntukan" class="btn btn-circle">
                    @livewire('icons.close')
                </label>
                <button type="submit" class="btn btn-primary">simpan</button>
            </div>
        </form>
    </div>
</div>
