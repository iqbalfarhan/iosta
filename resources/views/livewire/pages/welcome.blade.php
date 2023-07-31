<div class="w-full flex flex-col gap-6">

    <div class="grid grid-cols-4 gap-6">
        <div class="col-span-2">
            @livewire('widget.stat-q')
        </div>

        <div class="stat bg-base-100 rounded-xl">
            <div class="stat-title">Perubahan Q3</div>
            <div class="stat-value">31</div>
            <div class="stat-desc">↘︎ 90 (14%)</div>
        </div>

        <a href="{{ route('settings.lokasi') }}" class="stat bg-base-100 rounded-xl">
            <div class="stat-title">Total gedung</div>
            <div class="">
                <div class="flex justify-between gap-3 items-center">
                    <div class="stat-value flex flex-1">
                        {{ \App\Models\Lokasi::count() }}
                    </div>
                    <div class="flex flex-col justify-center items-center gap-1">
                        <span class="badge badge-sm badge-success font-semibold w-full">BR</span>
                        <small class="text-xs">1000 m<sup>2</sup></small>
                    </div>
                    <div class="flex flex-col justify-center items-center gap-1">
                        <small class="badge badge-sm badge-error font-semibold w-full">SC</small>
                        <small class="text-xs">1000 m<sup>2</sup></small>
                    </div>
                </div>
            </div>
            <div class="stat-desc">{{ \App\Models\Peruntukan::count() }} Klasifikasi</div>
        </a>
    </div>

    @livewire('pages.object-sewa')
</div>
