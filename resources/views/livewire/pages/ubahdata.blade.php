<div class="w-full flex justify-center">
    <form class="card w-full max-w-xl bg-base-100" wire:submit.prevent="simpan">
        <div class="card-body">
            <h3 class="card-title">Input perubahan data</h3>
            <div class="flex flex-col gap-6 py-4">
                <select class="select bg-base-200 @error('lokasi_id') select-error @enderror" wire:model="lokasi_id">
                    <option value="">Pilih gedung</option>
                    @foreach ($gedungs as $key => $gedung)
                        <option value="{{ $key }}">{{ $gedung }}</option>
                    @endforeach
                </select>
                @if ($lokasi)
                    <select class="select bg-base-200 @error('peruntukan') select-error @enderror"
                        wire:model="peruntukan">
                        <option value="">Pilih peruntukan</option>
                        @foreach ($peruntukans as $key => $item)
                            <option value="{{ $key }}">{{ $item }}</option>
                        @endforeach
                    </select>
                @endif

                @if ($peruntukan)
                    @php
                        $dataPeruntukan = \App\Models\Peruntukan::find($this->peruntukan);
                    @endphp
                    <div class="flex flex-col gap-2 form-control">
                        <div class="label">
                            <span class="label-text-alt">
                                Pilih klasifikasi :
                            </span>
                        </div>
                        <div class="flex flex-col gap-4">
                            @foreach (config('ios.listKlasifikasi') as $klf)
                                <label class="flex gap-1">
                                    <input type="radio" wire:model="jenis" value="{{ $klf }}"
                                        class="radio radio-sm" />
                                    <span class="text-sm">{{ $klf }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-control">
                        <label for="" class="label">
                            <div class="label-text-alt">Hasil pengukuran baru :</div>
                            <div class="label-text-alt">Data lama : {{ $dataPeruntukan->luas ?? 0 }}</div>
                        </label>
                        <input type="text" wire:model="luas" placeholder="Luas hasil pengukuran"
                            class="input bg-base-200 @error('luas') input-error @enderror">
                    </div>

                    <div class="form-control">
                        <label for="" class="label"><span class="label-text-alt">Upload BA Rekon
                                :</span></label>
                        <input type="file" wire:model="fileba" placeholder="Upload BA" accept="application/pdf"
                            class="file-input file-input-ghost bg-base-200 @error('fileba') input-error @enderror">
                    </div>
                @endif
            </div>
            <div class="card-actions">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
</div>
