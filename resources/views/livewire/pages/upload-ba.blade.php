<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div>
        <form class="card bg-base-100" wire:submit.prevent="uploadba">
            <div class="card-body">

                <div class="card-title">
                    Upload BA ({{ $witel }})
                </div>
                <div class="py-4 flex flex-col gap-2">
                    <div class="form-control">
                        <label for="" class="label">
                            <span class="label-text">Pilih Periode</span>
                        </label>

                        <select class="select bg-base-200 @error('lokasi_id') select-error @enderror"
                            wire:model="lokasi_id">
                            <option value="">---</option>
                            <option value="">Q1-2023</option>
                            <option value="">Q2-2023</option>
                            <option value="">Q3-2023</option>
                            <option value="">Q4-2023</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="" class="label">
                            <span class="label-text">Pilih STO</span>
                        </label>

                        <select class="select bg-base-200 @error('lokasi_id') select-error @enderror"
                            wire:model="lokasi_id">
                            <option value="">---</option>
                            @foreach ($lokasis as $lokasiid => $lokasiname)
                                <option value="{{ $lokasiid }}">{{ $lokasiname }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-control">
                        <label for="" class="label">
                            <span class="label-text">Pilih File BA Rekon</span>
                        </label>

                        <input type="file"
                            class="file-input bg-base-200 @error('lokasi_id') file-input-error @enderror"
                            wire:model="fileba" placeholder="pilih" accept="application/pdf">
                    </div>
                </div>
                <div class="card-actions">
                    <button class="btn btn-primary" type="submit">
                        <x-icons name="upload" />
                        Upload BA Rekon
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="lg:col-span-2">
        <div class="overflow-x-auto bg-base-100 rounded-2xl">
            <table class="table text-center">
                <thead class="bg-base-300">
                    <tr>
                        <th rowspan="2">STO</th>
                        <th colspan="4">{{ $year }}</th>
                    </tr>
                    <tr>
                        <th>Q1</th>
                        <th>Q2</th>
                        <th>Q3</th>
                        <th>Q4</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lokasis as $lokasiid => $lokasiname)
                        @php
                            $codeq1 = 'q1-' . $year;
                            $codeq2 = 'q2-' . $year;
                            $codeq3 = 'q3-' . $year;
                            $codeq4 = 'q4-' . $year;
                        @endphp
                        <tr>
                            <td class="text-left whitespace-nowrap">{{ $lokasiname }}</td>
                            <td>
                                @if ($this->existData($codeq1, $lokasiid))
                                    <button wire:click.prevent="download('{{ $codeq1 }}', '{{ $lokasiid }}')">
                                        <x-icons name="download" />
                                    </button>
                                @endif
                            </td>
                            <td>
                                @if ($this->existData($codeq2, $lokasiid))
                                    <button wire:click.prevent="download('{{ $codeq2 }}', '{{ $lokasiid }}')">
                                        <x-icons name="download" />
                                    </button>
                                @endif
                            </td>
                            <td>
                                @if ($this->existData($codeq3, $lokasiid))
                                    <button
                                        wire:click.prevent="download('{{ $codeq3 }}', '{{ $lokasiid }}')">
                                        <x-icons name="download" />
                                    </button>
                                @endif
                            </td>
                            <td>
                                @if ($this->existData($codeq4, $lokasiid))
                                    <button
                                        wire:click.prevent="download('{{ $codeq4 }}', '{{ $lokasiid }}')">
                                        <x-icons name="download" />
                                    </button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
