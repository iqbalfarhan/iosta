<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    @auth
        <div class="drawer bg-base-200" data-theme="{{ auth()->user()->darkmode ? 'dark' : 'light' }}">
            <input id="drawer" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content flex flex-col flex-1 min-h-screen">
                @livewire('components.navbar')
                <div class="flex flex-1 flex-col p-6 gap-6 bg-no-repeat bg-center bg-cover bg-fixed"
                    style="background-image: url('{{ Storage::url('indonesia.svg') }}'); background-size:90%;">
                    <div class="container mx-auto max-w-7xl">
                        {{ $slot }}
                    </div>
                    @livewire('components.footer')
                </div>
            </div>
            <div class="drawer-side">
                <label for="drawer" class="drawer-overlay"></label>
                @livewire('components.sidebar')
                @livewire('components.logout')
            </div>
        </div>
    @else
        <div class="flex flex-col h-screen bg-base-200 bg-no-repeat bg-center bg-cover backdrop-blur-lg p-6"
            style="background-image: url('{{ Storage::url('indonesia.svg') }}'); background-size:90%;">
            <div class="flex gap-10 absolute">
                <img src="{{ url('storage/logota.png') }}" alt="">
                <img src="{{ url('storage/logotelkom.png') }}" alt="">
            </div>
            <div class="flex flex-1 justify-center flex-col items-center">
                <div class="card w-96 glass">
                    <div class="card-body">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    @endauth

    @livewireScripts
</body>

</html>
