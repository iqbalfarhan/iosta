<div class="w-full flex justify-center">
    <form class="card bg-base-100" wire:submit.prevent="simpan">
        <div class="card-body">
            <h3 class="card-title">Input perubahan data</h3>
            <div class="flex flex-col gap-3 py-4">
                <select class="select bg-base-200 @error('lokasi_id') select-error @enderror" wire:model="lokasi_id">
                    <option value="">Pilih gedung</option>
                    @foreach ($gedungs as $key => $gedung)
                        <option value="{{ $key }}">{{ $gedung }}</option>
                    @endforeach
                </select>
                @if ($lokasi)
                    <select class="select bg-base-200 @error('peruntukan') select-error @enderror"
                        wire:model="peruntukan">
                        <option value="">Pilih</option>
                        @foreach ($peruntukans as $key => $item)
                            <option value="{{ $key }}">{{ $item }}</option>
                        @endforeach
                    </select>
                @endif
                <div class="divider text-xs">Hasil pengukuran baru</div>
                <select class="select bg-base-200 @error('jenis') select-error @enderror" wire:model="jenis">
                    <option value="">Pilih jenis pengukuran</option>
                    <option value="tambah">Tambah</option>
                    <option value="kurang">Kurang</option>
                </select>
                <input type="text" wire:model="luas" placeholder="Luas hasil pengukuran"
                    class="input bg-base-200 @error('luas') input-error @enderror">
                <div class="divider text-xs">Upload BA Rekon</div>
                <input type="file" wire:model="fileba" placeholder="Upload BA" accept="application/pdf"
                    class="file-input file-input-ghost bg-base-200 @error('fileba') input-error @enderror">
            </div>
            <div class="card-actions">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
</div>
