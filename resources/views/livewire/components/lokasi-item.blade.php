<a href="{{ route('settings.lokasi.detail', $data->id) }}" class="card card-compact bg-base-100">
    <div class="card-body">
        <div class="flex items-center gap-3">
            <div class="truncate font-semibold">{{ $data->witel }}</div>
            <div class="flex-1 truncate font-semibold">{{ $data->nama }}</div>
            <div class="flex-1 truncate text-xs">{{ $data->alamat }}</div>
            <div class="flex-1 text-xs">{{ $data->peruntukans->count() }} peruntukan</div>
        </div>
    </div>
</a>
