<div class="stats bg-base-100 rounded-xl w-full">
    <div class="stat">
        <div class="stat-title">Sesi sekarang</div>
        <div class="stat-value">Q{{ $periode['q'] }}
            <small class="text-xs text-neutral-500">{{ $periode['year'] }}</small>
        </div>
        <div class="stat-desc">{{ $periode['start'] }} - {{ $periode['end'] }}</div>
    </div>
    <div class="stat">
        <div class="stat-title">Persentase dalam Q{{ $periode['q'] }}</div>
        <div class="stat-value">2 <sup class="text-sm">%</sup></div>
        <div class="stat-desc">Batas akhir 25 September 2023</div>
    </div>

</div>
