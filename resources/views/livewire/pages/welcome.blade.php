<div class="w-full flex flex-col gap-6">
    <div class="flex gap-6">
        <div class="stat bg-base-100 rounded-xl">
            <div class="stat-title">Sesi sekarang</div>
            <div class="stat-value">{{ strtoupper($periode->nama) }} <small
                    class="text-xs text-neutral-500">{{ $periode->tahun }}</small></div>
            <div class="stat-desc">{{ implode('-', $periode->range) }}</div>
        </div>

        <div class="stat bg-base-100 rounded-xl">
            <div class="stat-title">Perubahan Q3</div>
            <div class="stat-value">31</div>
            <div class="stat-desc">↘︎ 90 (14%)</div>
        </div>

        <div class="stat bg-base-100 rounded-xl">
            <div class="stat-title">Total gedung</div>
            <div class="stat-value">{{ \App\Models\Lokasi::count() }}</div>
            <div class="stat-desc">{{ \App\Models\Peruntukan::count() }} Klasifikasi</div>
        </div>

        <div class="stat bg-base-100 rounded-xl">
            <div class="stat-title">BA rekon terupload</div>
            <div class="stat-value">23</div>
            <div class="stat-desc">↗︎ 400 (22%)</div>
        </div>
    </div>
</div>
