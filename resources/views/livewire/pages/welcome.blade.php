<div class="w-full flex flex-col gap-6">
    <div class="stats stats-vertical lg:stats-horizontal w-full">

        <div class="stat">
            <div class="stat-title">Sesi sekarang</div>
            <div class="stat-value">Q3 <small class="text-xs text-neutral-500">2023</small></div>
            <div class="stat-desc">01 juli - 31 september</div>
        </div>

        <div class="stat">
            <div class="stat-title">Perubahan Q3</div>
            <div class="stat-value">31</div>
            <div class="stat-desc">↘︎ 90 (14%)</div>
        </div>

        <div class="stat">
            <div class="stat-title">Total gedung</div>
            <div class="stat-value">{{ \App\Models\Lokasi::count() }}</div>
            <div class="stat-desc">↗︎ 400 (22%)</div>
        </div>

        <div class="stat">
            <div class="stat-title">BA rekon terupload</div>
            <div class="stat-value">23</div>
            <div class="stat-desc">↗︎ 400 (22%)</div>
        </div>
    </div>
</div>
