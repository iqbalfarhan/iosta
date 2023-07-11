<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body data-theme="light">
    @auth
        <div class="drawer bg-base-200">
            <input id="drawer" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content flex flex-col flex-1 min-h-screen">
                @livewire('components.navbar')
                <div class="flex flex-1 flex-col p-6 gap-6 bg-no-repeat bg-center bg-cover"
                    style="background-image: url('{{ Storage::url('indonesia.svg') }}')">
                    {{ $slot }}
                    @livewire('components.footer')
                </div>
            </div>
            <div class="drawer-side">
                <label for="drawer" class="drawer-overlay"></label>
                @livewire('components.sidebar')
            </div>
        </div>
    @else
        <div class="flex justify-center items-center h-screen bg-base-200 bg-no-repeat bg-center bg-cover"
            style="background-image: url('{{ Storage::url('indonesia.svg') }}')">
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
