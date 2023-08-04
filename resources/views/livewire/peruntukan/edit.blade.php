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
        </div>
        <div class="card-actions">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
