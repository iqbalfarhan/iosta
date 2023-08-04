<div class="flex flex-col gap-3">
    <h3 class="font-semibold">Riwayat perubahan:</h3>
    <div class="overflow-x-auto bg-base-100 rounded-xl">
        <table class="table table-xs">
            <thead class="bg-base-300 text-center">
                <tr>
                    <td rowspan="2">Tanggal</td>
                    <td colspan="3" class="bg-yellow-200">Luas</td>
                    <td colspan="2" class="bg-green-200">Klasifikasi</td>
                    <td colspan="2" class="bg-blue-200">Peruntukan</td>
                    <td rowspan="2">Perubahan</td>
                    <td rowspan="2">BA Rekon</td>
                </tr>
                <tr>
                    <th class="bg-yellow-300">Awal</th>
                    <th class="bg-yellow-300">Baru</th>
                    <th class="bg-yellow-300">Selisih</th>
                    <th class="bg-green-300">Awal</th>
                    <th class="bg-green-300">Baru</th>
                    <th class="bg-blue-300">Awal</th>
                    <th class="bg-blue-300">Baru</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data->logs as $log)
                    <tr>
                        <td class="font-mono">{{ $log->created_at }}</td>
                        <td class="font-mono bg-yellow-200">{{ $log->luas_awal }}</td>
                        <td class="font-mono bg-green-200">{{ $log->luas_baru }}</td>
                        <td class="font-mono">{{ abs($log->luas_baru - $log->luas_awal) }}</td>
                        <td class="bg-yellow-200">{{ $log->klasifikasi_awal }}</td>
                        <td class="bg-green-200">{{ $log->klasifikasi_baru }}</td>
                        <td class="bg-yellow-200">{{ $log->peruntukan_awal }}</td>
                        <td class="bg-green-200">{{ $log->peruntukan_baru }}</td>
                        <td>{{ $log->perubahan }}</td>
                        <td class="text-center">
                            @if ($log->fileba)
                                <button class="btn btn-xs"
                                    wire:click.prevent="downloadba({{ $log->id }})">download</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
