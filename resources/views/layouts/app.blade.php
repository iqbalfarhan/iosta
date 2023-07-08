<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.2.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>

<body>
    @auth
        <div class="drawer lg:drawer-open bg-base-200">
            <input id="drawer" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content flex flex-col">
                @livewire('components.navbar')
                <div class="flex flex-col p-6 gap-6">
                    {{ $slot }}
                </div>
            </div>
            <div class="drawer-side">
                <label for="drawer" class="drawer-overlay"></label>
                @livewire('components.sidebar')
            </div>
        </div>
    @else
        <div class="flex justify-center items-center h-screen">
            <div class="card w-96 bg-base-100">
                <div class="card-body">
                    {{ $slot }}
                </div>
            </div>
        </div>
    @endauth

    @livewireScripts
</body>

</html>
