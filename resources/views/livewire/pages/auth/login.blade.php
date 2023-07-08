<form class="flex flex-col gap-6" wire:submit.prevent="submit">
    <div class="flex flex-col gap-3">
        <h3 class="text-lg font-bold">{{ config('app.name') }}</h3>
        <span class="text-sm text-neutral-500">Silakan gunakan username dan password yang sudah terdaftar untuk masuk
            aplikasi.</span>
    </div>

    <div class="flex flex-col gap-3">
        <input type="email" wire:model="data.email" placeholder="Email as Username"
            class="input shadow w-full bg-base-200" />
        <input type="password" wire:model="data.password" placeholder="Password"
            class="input shadow w-full bg-base-200" />
    </div>

    <button class="btn">Login</button>
</form>
