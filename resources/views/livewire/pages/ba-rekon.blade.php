<div class="flex flex-col gap-6">
    <div class="overflow-x-auto bg-base-100">
        <table class="table table-sm">
            <thead>
                <tr class="bg-base-300">
                    <th rowspan="2">No</th>
                    <th rowspan="2">Witel</th>
                    <th rowspan="2">STO / Gedung</th>
                    <th colspan="4">Periode 2023</th>
                </tr>
                <tr class="bg-base-300">
                    <th>Q1</th>
                    <th>Q2</th>
                    <th>Q3</th>
                    <th>Q4</th>
                </tr>
            </thead>
            <thead class="bg-base-200">
                <th></th>
                <th>
                    <select class="select select-xs bg-base-100 w-full" wire:model="witel">
                        <option value="">REGIONAL</option>
                        @foreach (config('ios.listWitel') as $wtl)
                            @if ($wtl != 'REGIONAL')
                                <option value="{{ $wtl }}">{{ $wtl }}</option>
                            @endif
                        @endforeach
                    </select>
                </th>
                <th>
                    <input type="text" class="input input-xs bg-base-100 w-full" wire:model="sto" placeholder="---">
                </th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($datas as $index => $data)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $data->witel ?? '' }}</td>
                        <td>{{ $data->nama ?? '' }}</td>
                        <td>
                            @if (\App\Models\Barekon::where('kode_q', 'q1-2023')->where('lokasi_id', $data->id)->exists())
                                <a href="">
                                    <x-icons name="download" />
                                </a>
                            @endif
                        </td>
                        <td>
                            @if (\App\Models\Barekon::where('kode_q', 'q2-2023')->where('lokasi_id', $data->id)->exists())
                                <a href="">
                                    <x-icons name="download" />
                                </a>
                            @endif
                        </td>
                        <td>
                            @if (\App\Models\Barekon::where('kode_q', 'q3-2023')->where('lokasi_id', $data->id)->exists())
                                <a href="">
                                    <x-icons name="download" />
                                </a>
                            @endif
                        </td>
                        <td>
                            @if (\App\Models\Barekon::where('kode_q', 'q4-2023')->where('lokasi_id', $data->id)->exists())
                                <a href="">
                                    <x-icons name="download" />
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
