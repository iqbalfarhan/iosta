<ul class="menu p-4 w-72 h-full bg-base-100">
    <li><a href="{{ route('home') }}">@livewire('icons.apps')Dashboard</a></li>
    <li><a href="{{ route('object-sewa') }}">@livewire('icons.home')Object sewa</a></li>
    <li><a href="{{ route('ubahdata') }}">@livewire('icons.edit')Update data</a></li>
    <li><a href="{{ route('upload-ba') }}">@livewire('icons.upload')Upload BA Rekon</a></li>
    <li></li>
    <li>
        <details open>
            <summary>@livewire('icons.setting')Settings</summary>
            <ul>
                <li><a href="{{ route('settings.periode') }}">@livewire('icons.clock')Periode aktif</a></li>
                <li><a href="{{ route('settings.lokasi') }}">@livewire('icons.building')Pengaturan lokasi</a></li>
                <li><a href="{{ route('settings.user') }}">@livewire('icons.users')User management</a></li>
            </ul>
        </details>
    </li>
    <li></li>
    <li><a href="{{ route('profile') }}">@livewire('icons.user')Update profile</a></li>
    <li><a wire:click.prevent="$emit('logout')">@livewire('icons.logout')Keluar aplikasi</a></li>

    @livewire('components.logout')
</ul>
