<div class="text-sm hidden lg:block breadcrumbs mb-4">
    <ul>
        <li>{{ $witel }}</li>
        @foreach ($datas as $segment)
            <li>{{ ucwords($segment) }}</li>
        @endforeach
    </ul>
</div>
