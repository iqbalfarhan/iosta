<li>
    @if ($theme)
        <a wire:click.prevent="updateTheme('light')">
            <x-icons name="sun" />
            <span>Light mode</span>
        </a>
    @else
        <a wire:click.prevent="updateTheme('dark')">
            <x-icons name="moon" />
            <span>Dark mode</span>
        </a>
    @endif
</li>
