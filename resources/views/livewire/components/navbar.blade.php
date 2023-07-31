<div class="navbar bg-base-100">
    <div class="navbar-start">
        <label for="drawer" class="btn btn-circle btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                class="inline-block w-5 h-5 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </label>
    </div>
    <div class="navbar-center">
        <a href="{{ route('home') }}" class="btn btn-ghost normal-case text-xl">{{ config('app.name') }}</a>
    </div>
    <div class="navbar-end gap-2">
        @livewire('components.theme-switcher')
        <div class="dropdown dropdown-end hidden lg:block">
            <label tabindex="0" class="btn btn-sm btn-neutral btn-circle">
                {{ $initial }}
            </label>
            <ul tabindex="0" class="shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52">
                <li>
                    <a href="{{ route('profile') }}">
                        <x-icons name="user" />
                        <span>Update profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}">
                        <x-icons name="user" />
                        <span>Settings</span>
                    </a>
                </li>
                <li></li>
                <li>
                    <a wire:click.prevent="$emit('logout')">
                        <x-icons name="logout" />
                        <span>Keluar aplikasi</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
