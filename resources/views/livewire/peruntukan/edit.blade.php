<div class="card bg-base-100">
    <form class="card-body" wire:submit.prevent="simpan">
        <h3 class="card-title">Edit data peruntukan</h3>
        <div class="grid lg:grid-cols-3 py-4 gap-4">
            <div class="form-control">
                <label for="" class="label">
                    <span class="label-text">Lokasi</span>
                </label>
                <select wire:model="lokasi_id" class="select bg-base-200">
                    <option value="">Pilih Lokasi</option>
                    @foreach ($lokasis as $key => $lks)
                        <option value="{{ $key }}">{{ $lks }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-control">
                <label for="" class="label">
                    <span class="label-text">Fungsi gedung</span>
                </label>
                <select wire:model="fungsi" class="select bg-base-200">
                    <option value="">Pilih fungsi</option>
                    @foreach (config('ios.listFungsiGedung') as $fn)
                        <option value="{{ $fn }}">{{ $fn }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-control">
                <label for="" class="label">
                    <span class="label-text">Klasifikasi</span>
                </label>
                <select wire:model="klasifikasi" class="select bg-base-200">
                    <option value="">Pilih klasifikasi</option>
                    @foreach (config('ios.listKlasifikasi') as $kls)
                        <option value="{{ $kls }}">{{ $kls }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-control">
                <label for="" class="label">
                    <span class="label-text">Peruntukan</span>
                </label>
                <input type="text" wire:model="nama" placeholder="peruntukan" class="input bg-base-200" />
            </div>
            <div class="form-control">
                <label for="" class="label">
                    <span class="label-text">Luas perhitungan</span>
                </label>
                <input type="number" step="0.001" wire:model="luas" placeholder="luas" class="input bg-base-200" />
            </div>
            <div class="form-control">
                <label for="" class="label">
                    <span class="label-text">Luas Base Rent (BR)</span>
                </label>
                <input type="number" step="0.001" wire:model="br" placeholder="br" class="input bg-base-200" />
            </div>
            <div class="form-control">
                <label for="" class="label">
                    <span class="label-text">Luas Service charge (SC)</span>
                </label>
                <input type="number" step="0.001" wire:model="sc" placeholder="sc" class="input bg-base-200" />
            </div>
            <div class="form-control">
                <label for="" class="label">
                    <span class="label-text">status</span>
                </label>
                <select wire:model="status" class="select bg-base-200">
                    <option value="EXISTING">EXISTING</option>
                    <option value="NEW">NEW</option>
                </select>
            </div>
            <div class="form-control">
                <label for="" class="label">
                    <span class="label-text">durasi</span>
                </label>
                <input type="number" wire:model="durasi" placeholder="durasi" class="input bg-base-200" />
            </div>
            <div class="form-control">
                <label for="" class="label">
                    <span class="label-text">layanan</span>
                </label>
                <input type="number" wire:model="layanan" placeholder="layanan" class="input bg-base-200" />
            </div>
            <div class="form-control">
                <label for="" class="label">
                    <span class="label-text">File BA Rekonsiliasi</span>
                </label>
                <input type="file" wire:model="fileba" placeholder="fileba" class="file-input bg-base-200"
                    accept="application/pdf" />
            </div>
        </div>
        <div class="card-actions">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
