<div class="">
    <form wire:submit.prevent="simpan" class="flex flex-col gap-6">
        <div class="card w-full bg-base-100">
            <div class="card-body">
                <div>
                    <h3 class="card-title">Pilih peruntukan yang akan diupdate Q{{ $quartal['q'] }}</h3>
                    <span class="text-sm">Witel disesuaikan dengan witel saat ini ({{ auth()->user()->witel }}).</span>
                </div>
            </div>
            <div class="divider m-0 p-0"></div>
            <div class="card-body">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="form-control">
                        <label for="" class="label">
                            <span class="label-text">Pilih STO</span>
                        </label>
                        <select class="select bg-base-200 @error('lokasi_id') select-error @enderror"
                            wire:model="lokasi_id">
                            <option value="">Pilih gedung</option>
                            @foreach ($gedungs as $key => $gedung)
                                <option value="{{ $key }}">{{ $gedung }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="" class="label">
                            <span class="label-text">Pilih peruntukan</span>
                        </label>
                        <div class="flex gap-3">
                            <select class="select w-full bg-base-200 @error('peruntukan_id') select-error @enderror"
                                wire:model="peruntukan_id">
                                <option value="">Pilih peruntukan</option>
                                @foreach ($peruntukans as $idperuntukan => $namaperuntukan)
                                    <option value="{{ $idperuntukan }}">{{ $namaperuntukan }}</option>
                                @endforeach
                            </select>
                            <div class="tooltip" data-tip="Tambah peruntukan">
                                <label class="btn btn-square btn-neutral" for="addPeruntukan">
                                    <x-icons name="plus" />
                                </label>
                            </div>
                        </div>
                    </div>
                    @if ($peruntukan_id)
                        @php
                            $prntkn = \App\Models\Peruntukan::find($peruntukan_id);
                        @endphp
                        <div class="form-control">
                            <label for="" class="label">
                                <span class="label-text">Detail peruntukan</span>
                            </label>
                            <div class="card card-compact bg-base-200 border-1">
                                <div class="card-body">
                                    <div class="flex flex-col text-sm">
                                        <span><b>fungsi : </b> {{ $prntkn->fungsi }}</span>
                                        <span><b>klasifikasi : </b> {{ $prntkn->klasifikasi }}</span>
                                        <span><b>peruntukan : </b> {{ $prntkn->peruntukan }}</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endif
                </div>
                @if ($peruntukan_id)
                    @php
                        $prntkn = \App\Models\Peruntukan::find($peruntukan_id);
                    @endphp

                    @if ($prntkn->lastlog)
                        @if ($prntkn->lastlog->kode_q == $quartal['code'])
                            <div class="alert alert-warning text-xs font-bold">
                                Sudah ada update {{ $quartal['code'] }} untuk peruntukan ini. Apakah yakin akan lanjut?
                            </div>
                        @else
                            <div class="alert alert-success text-xs font-bold">
                                Belum ada update {{ $quartal['code'] }} untuk peruntukan ini. silakan lanjut.
                            </div>
                        @endif
                    @else
                        <div class="alert alert-success text-xs font-bold">
                            Belum ada update {{ $quartal['code'] }} untuk peruntukan ini. silakan lanjut.
                        </div>
                    @endif

                @endif

            </div>
        </div>

        <div class="card w-full bg-base-100">
            <div class="card-body">
                <div class="flex flex-col">
                    <h3 class="card-title">Input hasil tambah kurang {{ $quartal['code'] }}</h3>
                    <span class="text-sm">input hasil pengukuran tambah kurang sesuai dengan Berita acara
                        rekonisiliasi</span>
                </div>
            </div>
            <div class="divider m-0 p-0"></div>
            <div class="card-body">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="form-control">
                        <label for="" class="label">
                            <span class="label-text">Luas pengukuran baru :</span>
                        </label>
                        <input type="number" step="0.01" wire:model="luas" placeholder="Luas hasil pengukuran"
                            class="input bg-base-200 @error('luas') input-error @enderror">
                    </div>
                    <div class="form-control">
                        <label for="" class="label">
                            <span class="label-text">BR :</span>
                        </label>
                        <input type="number" step="0.01" wire:model="br" placeholder="BR hasil pengukuran"
                            class="input bg-base-200 @error('br') input-error @enderror">
                    </div>
                    <div class="form-control">
                        <label for="" class="label">
                            <span class="label-text">SC :</span>
                        </label>
                        <input type="number" step="0.01" wire:model="sc" placeholder="SC hasil pengukuran"
                            class="input bg-base-200 @error('sc') input-error @enderror">
                    </div>
                    <div class="form-control">
                        <label for="" class="label">
                            <span class="label-text">Status :</span>
                        </label>
                        <select wire:model="status" class="select bg-base-200 @error('status') select-error @enderror">
                            <option value="">---</option>
                            <option value="new">New</option>
                            <option value="existing">Existing</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="" class="label">
                            <span class="label-text">Durasi :</span>
                        </label>
                        <input type="number" step="0.01" wire:model="durasi" placeholder="Durasi sewa"
                            class="input bg-base-200 @error('durasi') input-error @enderror">
                    </div>
                    <div class="form-control">
                        <label for="" class="label">
                            <span class="label-text">Layanan :</span>
                        </label>
                        <input type="number" step="0.01" wire:model="layanan" placeholder="Layanan"
                            class="input bg-base-200 @error('layanan') input-error @enderror">
                    </div>
                    <div class="form-control">
                        <label for="" class="label">
                            <span class="label-text">Upload BA Tambah kurang:</span>
                        </label>
                        <input type="file" wire:model="fileba" placeholder="Upload BA" accept="application/pdf"
                            class="file-input file-input-ghost bg-base-200 @error('fileba') input-error @enderror">
                    </div>
                </div>
            </div>
        </div>

        <div class="card w-full bg-base-100">
            <div class="card-body">
                <div class="card-actions">
                    <button class="btn btn-primary" type="submit">
                        <x-icons name="check" />
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </form>

    <input type="checkbox" id="duplicateModal" class="modal-toggle" wire:model="showDuplicateAlert" />
    <div class="modal">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Duplikat data</h3>
            <p class="py-4">Telah ditemukan duplikasi data (klasifikasi : {{ $klasifikasi }})</p>
            <div class="modal-action justify-between">
                <label for="duplicateModal" class="btn">Close!</label>
                <button wire:click="simpan" class="btn btn-primary">Lanjutkan</button>
            </div>
        </div>
    </div>

    <input type="checkbox" id="addPeruntukan" class="modal-toggle" wire:model="showAddPeruntukan" />
    <div class="modal">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Tambah peruntukan baru</h3>
            <form wire:submit.prevent="addPeruntukan">
                <div class="flex flex-col gap-4 py-4">
                    <div class="form-control">
                        <label for="" class="label">
                            <span>Pilih fungsi</span>
                        </label>
                        <select class="select bg-base-200" wire:model="newperuntukan.fungsi">
                            <option value="">pilih fungsi</option>
                            @foreach (config('ios.listFungsiGedung') as $fn)
                                <option value="{{ $fn }}">{{ $fn }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="" class="label">
                            <span>Pilih klasifikasi</span>
                        </label>
                        <select class="select bg-base-200" wire:model="newperuntukan.klasifikasi">
                            <option value="">pilih klasifikasi</option>
                            @foreach (config('ios.listKlasifikasi') as $kl)
                                <option value="{{ $kl }}">{{ $kl }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="" class="label">
                            <span>Peruntukan</span>
                        </label>
                        <input type="text" class="input bg-base-200" wire:model="newperuntukan.peruntukan"
                            placeholder="Tuliskan peruntukan disini">
                    </div>
                </div>
                <div class="modal-action justify-between">
                    <label for="addPeruntukan" class="btn">Close!</label>
                    <button class="btn btn-primary">
                        <x-icons name="check" />
                        simpan peruntukan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
