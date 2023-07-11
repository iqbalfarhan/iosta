<div>
    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="addPeruntukan" class="modal-toggle" wire:model='show' />
    <div class="modal">
        <form class="modal-box" wire:submit.prevent="simpan">
            <h3 class="font-bold text-lg">Tambah peruntukan gedung {{ $lokasi->nama }}</h3>
            <div class="flex flex-col gap-3 py-6">
                <div class="tabs w-full mb-3">
                    <button wire:click.prevent="$set('view', 'basic')"
                        class="tab tab-bordered {{ $view == 'basic' ? 'tab-active' : '' }}">Basic view</button>
                    <button wire:click.prevent="$set('view', 'advance')"
                        class="tab tab-bordered {{ $view == 'advance' ? 'tab-active' : '' }}">Advanced View</button>
                </div>

                @if ($view == 'basic')
                    <select wire:model="fungsi" placeholder="fungsi" class="select bg-base-200 w-full">
                        <option value="">Pilih fungsi gedung</option>
                        @foreach (config('ios.listFungsiGedung') as $fn)
                            <option value="{{ $fn }}">{{ $fn }}</option>
                        @endforeach
                    </select>
                    <input wire:model="luas" placeholder="luas" class="input bg-base-200 w-full" />
                    <input wire:model="br" placeholder="br" class="input bg-base-200 w-full" />
                    <input wire:model="sc" placeholder="sc" class="input bg-base-200 w-full" />
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
                    <input type="number" wire:model="durasi" placeholder="Durasi penggunaan"
                        class="input bg-base-200 w-full" />
                    <input type="number" wire:model="layanan" placeholder="Kelas layanan gedung"
                        class="input bg-base-200 w-full" />
                @else
                    <textarea type="text" wire:model="template" rows="5" class="textarea bg-base-200 w-full"
                        placeholder="Copy baris dari excel (kolom G-Q (fungsi - kelas layanan gedung)) kemudian paste disini"></textarea>
                    @if ($template)
                        @php
                            $parts = preg_split('/\t+/', $template);
                        @endphp
                        <ul>
                            <li>fungsi = {{ strtolower($parts[0]) ?? '' }}</li>
                            <li>luas = {{ str_replace(',', '.', $parts[1]) ?? '' }}</li>
                            <li>br = {{ $parts[2] ?? '' }}</li>
                            <li>sc = {{ $parts[3] ?? '' }}</li>
                            <li>klasifikasi = {{ $parts[4] ?? '' }}</li>
                            <li>peruntukan = {{ $parts[5] ?? '' }}</li>
                            <li>status = {{ $parts[6] ?? 'EXISTING' }}</li>
                            <li>durasi = {{ $parts[9] ?? 3 }}</li>
                            <li>layanan = {{ $parts[10] ?? 4 }}</li>
                        </ul>
                    @endif
                @endif
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
