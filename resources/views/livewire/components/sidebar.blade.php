<ul class="menu p-2 w-80 h-full bg-base-100">
    <div class="menu">
        <div class="">
            <label for="drawer" class="btn btn-circle self-end">
                <x-icons name="close" size="5" />
            </label>
        </div>
    </div>

    @foreach ($datas as $header => $menus)
        <li class="menu-title">{{ $header }}</li>
        @foreach ($menus as $menu)
            <li>
                <a href="{{ route($menu['route']) }}" class="{{ Route::is($menu['route']) ? 'active' : '' }}">
                    <x-icons name="{{ $menu['icon'] }}" />
                    {{ $menu['label'] }}
                </a>
            </li>
        @endforeach
        <li class="my-4"></li>
    @endforeach

</ul>
