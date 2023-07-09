<div class="w-full flex justify-center">
    <div class="card w-1/3 bg-base-100">
        <div class="card-body">
            <h3 class="card-title">Input perubahan data</h3>
            <div class="flex flex-col gap-3 py-4">
                <select class="select bg-base-200" wire:model="lokasi_id">
                    <option value="">Pilih gedung</option>
                    @foreach ($gedungs as $key => $gedung)
                        <option value="{{ $key }}">{{ $gedung }}</option>
                    @endforeach
                </select>
                <select class="select bg-base-200" wire:model="peruntukan">
                    <option value="">Pilih peruntukan</option>
                    @if ($lokasi)
                        @foreach ($peruntukans as $key => $item)
                            <option value="{{ $key }}">{{ $item }}</option>
                        @endforeach
                    @endif
                    <optgroup label="Lainnya">
                        <option value="notfound">peruntukan tidak tersedia</option>
                    </optgroup>
                </select>
                @if ($peruntukan == 'notfound')
                    <a href="" class="text-xs">tambah peruntukan</a>
                @endif
                <div class="divider text-xs">hasil pengukuran</div>
                <select class="select bg-base-200">
                    <option value="">Pilih jenis pengukuran</option>
                    <option value="tambah">Penambahan</option>
                    <option value="kurang">pengurangan</option>
                </select>
                <input type="text" placeholder="Luas hasil pengukuran" class="input bg-base-200">
                <div class="divider text-xs">Upload BA Rekon</div>
                <input type="file" placeholder="Upload BA" class="file-input file-input-ghost bg-base-200">
            </div>
            <div class="card-actions">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
