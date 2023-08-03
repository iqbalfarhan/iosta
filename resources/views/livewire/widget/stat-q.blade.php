<div>
    <label class="stats bg-base-100 rounded-xl w-full" for="modalquartal">
        <div class="stat">
            <div class="stat-title">Sesi sekarang</div>
            <div class="stat-value">Q{{ $periode['q'] }}
                <small class="text-xs text-neutral-500">{{ $periode['year'] }}</small>
            </div>
            <div class="stat-desc">{{ $periode['start'] }} - {{ $periode['end'] }}</div>
        </div>
        <div class="stat">
            <div class="stat-title">Persentase dalam Q{{ $periode['q'] }}</div>
            <div class="stat-value">{{ $persen }} <sup class="text-sm">%</sup></div>
            <div class="stat-desc">Batas akhir {{ date('d F Y', strtotime($periode['limit'])) }}</div>
        </div>
    </label>

    <input type="checkbox" id="modalquartal" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box w-full max-w-7xl">
            <h3 class="font-bold text-lg">Persentase dalam Q{{ $periode['q'] }} {{ $periode['year'] }}</h3>
            <div class="py-4 overflow-x-auto">
                <table class="table rounded-xl overflow-hidden bg-base-200">
                    <thead class="bg-base-300">
                        <th>Witel</th>
                        <th>Gedung</th>
                        <th>Fungsi</th>
                        <th>Klasifikasi</th>
                        <th>Luas Q2</th>
                        <th>Luas Q3</th>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $data->lokasi->witel ?? '' }}</td>
                                <td>{{ $data->lokasi->nama ?? '' }}</td>
                                <td>{{ $data->fungsi }}</td>
                                <td>{{ $data->klasifikasi }}</td>
                                <td>{{ $data->luas_sebelum }}</td>
                                <td>{{ $data->luas }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-action">
                <label for="modalquartal" class="btn">Close!</label>
            </div>
        </div>
    </div>
</div>
