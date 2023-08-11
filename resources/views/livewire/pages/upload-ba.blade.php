<div class="">
    <form wire:submit.prevent="simpan" class="flex flex-col gap-6">
        <div class="card w-full bg-base-100">
            <div class="card-body">
                <div>
                    <h3 class="card-title">Pilih STO yang akan diupdate Q{{ $quartal['q'] }}</h3>
                    <span class="text-sm">Witel disesuaikan dengan witel saat ini ({{ auth()->user()->witel }}).</span>
                </div>
            </div>
            <div class="divider m-0 p-0"></div>
            <div class="card-body">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="form-control">
                        <label for="" class="label">
                            <span class="label-text">Pilih Witel</span>
                        </label>
                        <select class="select bg-base-200 @error('witel') select-error @enderror" wire:model="witel">
                            <option value="">Pilih witel</option>
                            @foreach ($witels ?? [] as $wtl)
                                <option value="{{ $wtl }}">{{ $wtl }}</option>
                            @endforeach
                        </select>
                    </div>
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
                </div>
            </div>
        </div>

        <div class="card w-full bg-base-100">
            <div class="card-body">
                <div class="flex flex-col">
                    <h3 class="card-title">Input hasil pengukuran {{ $quartal['code'] }}</h3>
                    <span class="text-sm">input hasil pengukuran pengukuran sesuai dengan Berita acara
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
</div>
