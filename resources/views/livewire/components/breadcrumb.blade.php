<div class="text-sm breadcrumbs mx-4">
    <ul>
        <li>App</li>
        @foreach ($datas as $segment)
            <li>{{ ucwords($segment) }}</li>
        @endforeach
    </ul>
</div>
