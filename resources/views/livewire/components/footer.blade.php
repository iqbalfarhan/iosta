<div class="text-center text-xs opacity-50 py-6 flex flex-col">
    <span>{{ config('app.name') }} {{ '@' . date('Y') }}</span>
    <span>Masuk sebagai {{ auth()->user()->name }}</span>
</div>
