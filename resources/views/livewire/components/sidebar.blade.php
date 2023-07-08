<ul class="menu p-4 w-80 h-full bg-base-100">
    <li><a href="{{ route('home') }}">@livewire('icons.home')Dashboard</a></li>
    <li>
        <details open>
            <summary>@livewire('icons.setting')Settings</summary>
            <ul>
                <li><a href="{{ route('settings.lokasi') }}">@livewire('icons.building')Pengaturan lokasi</a></li>
                <li><a href="{{ route('settings.user') }}">@livewire('icons.users')User management</a></li>
            </ul>
        </details>
    </li>
    <li><a href="{{ route('profile') }}">@livewire('icons.user')Update profile</a></li>
    <li><a wire:click.prevent="$emit('logout')">@livewire('icons.logout')Keluar aplikasi</a></li>

    @livewire('components.logout')
</ul>
