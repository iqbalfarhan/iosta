<div>
    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="addPeruntukan" class="modal-toggle" wire:model='show' />
    <div class="modal">
        <form class="modal-box" wire:submit.prevent="simpan">
            <h3 class="font-bold text-lg">Tambah peruntukan gedung {{ $lokasi->nama }}</h3>
            <div class="flex flex-col gap-3 py-6">
                <textarea type="text" wire:model="template" class="textarea textarea-sm bg-base-200 w-full"
                    placeholder="paste dari excel"></textarea>
                @if ($template)
                    @php
                        $parts = preg_split('/\t+/', $template);
                    @endphp
                    @json($parts)
                @endif
                <select wire:model="fungsi" placeholder="fungsi" class="select select-sm bg-base-200 w-full">
                    <option value="">Pilih fungsi gedung</option>
                    @foreach (config('ios.listFungsiGedung') as $fn)
                        <option value="{{ $fn }}">{{ $fn }}</option>
                    @endforeach
                </select>
                <input wire:model="luas" placeholder="luas" class="input input-sm bg-base-200 w-full" />
                <select wire:model="klasifikasi" placeholder="klasifikasi" class="select select-sm bg-base-200 w-full">
                    <option value="">Pilih klasifikasi</option>
                    @foreach (config('ios.listKlasifikasi') as $qw)
                        <option value="{{ $qw }}">{{ $qw }}</option>
                    @endforeach
                </select>
                <input wire:model="peruntukan" placeholder="peruntukan" class="input input-sm bg-base-200 w-full" />
                <select wire:model="status" placeholder="status" class="select select-sm bg-base-200 w-full">
                    <option value="EXISTING">EXISTING</option>
                    <option value="NEW">NEW</option>
                </select>
                <input type="number" wire:model="durasi" placeholder="Durasi penggunaan"
                    class="input input-sm bg-base-200 w-full" />
                <input type="number" wire:model="layanan" placeholder="Kelas layanan gedung"
                    class="input input-sm bg-base-200 w-full" />
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
