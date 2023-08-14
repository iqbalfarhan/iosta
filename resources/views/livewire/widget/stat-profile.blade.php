<a href="{{ route('profile') }}" class="stats w-full h-full">
    <div class="stat">
        <div class="stat-figure text-secondary">
            <div class="avatar placeholder">
                <div class="bg-neutral-focus text-neutral-content rounded-full w-12">
                    <span class="text-2xl">{{ $user->initial }}</span>
                </div>
            </div>
        </div>
        <div class="stat-value text-xl">{{ $user->first_name }}</div>
        <div class="stat-title">{{ $user->username }}</div>
        <div class="stat-desc text-secondary">{{ $user->witel }}</div>
    </div>
</a>
