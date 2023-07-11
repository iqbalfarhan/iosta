<div class="navbar bg-base-100">
    <div class="flex-none">
        <label for="drawer" class="btn btn-square btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                class="inline-block w-5 h-5 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </label>
    </div>
    <div class="flex-1">
        <a href="{{ route('home') }}" class="btn btn-ghost normal-case text-xl">{{ config('app.name') }}</a>
    </div>
    <div class="flex-none">
        {{-- @livewire('components.breadcrumb') --}}
        <div class="hidden lg:block mx-4 text-xs">
            {{ auth()->user()->name }}
        </div>
    </div>
</div>
