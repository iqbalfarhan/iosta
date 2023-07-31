<form class="flex flex-col gap-6" wire:submit.prevent="submit">
    <div class="flex flex-col gap-3">
        <h3 class="text-lg font-bold">{{ config('app.name') }}</h3>
        <span class="text-sm text-neutral-500 font-light">Silakan gunakan username dan password yang sudah terdaftar
            untuk masuk
            aplikasi.</span>
    </div>
    <div class="flex flex-col gap-2">
        <div class="form-control">
            <label for="" class="label">
                <span class="label-text">Username</span>
            </label>
            <input type="text" wire:model="data.username" placeholder="Username"
                class="input shadow w-full bg-base-200 @error('data.username') input-error @enderror" />
        </div>

        <div class="form-control">
            <label for="" class="label">
                <span class="label-text">Password</span>
            </label>
            <input type="password" wire:model="data.password" placeholder="Password"
                class="input shadow w-full bg-base-200 @error('data.password') input-error @enderror" />
        </div>
    </div>

    <button class="btn btn-primary">Login</button>
</form>
