<div class="flex flex-col gap-6">
    <div class="card bg-base-100">
        <div class="card-body">
            <div class="flex justify-between items-center">
                <div class="flex gap-6 items-center">
                    <div class="avatar placeholder">
                        <div class="bg-neutral-focus text-neutral-content rounded-full w-16">
                            <span class="text-3xl">{{ $initial }}</span>
                        </div>
                    </div>

                    <div class="">
                        <h1 class="text-xl font-semibold">{{ auth()->user()->name }}</h1>
                        <span>Area {{ auth()->user()->witel }}</span>
                    </div>
                </div>
                <button class="btn btn-neutral btn-sm" wire:click.prevent="$emit('logout')">
                    <x-icons name="logout" />
                    logout
                </button>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-6">
        <div class="w-full">
            <div class="card bg-base-100 ">
                <form class="card-body gap-6" wire:submit.prevent="simpan">
                    <div class="card-title">Edit data user</div>
                    <div class="flex flex-col gap-3">
                        <input type="text" wire:model="name" placeholder="Nama user" class="input bg-base-200" />
                        <input type="text" wire:model="username" placeholder="Username login"
                            class="input bg-base-200" />
                        <select wire:model="witel" class="input bg-base-200">
                            <option value="">Pilih witel</option>

                            @foreach (config('ios.listWitel') as $wtl)
                                <option value="{{ $wtl }}">{{ $wtl }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="card-actions justify-center">
                        <button class="btn btn-primary">
                            <x-icons name="check" />
                            simpan data
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="w-full">
            <div class="card bg-base-100">
                <div class="card-body">
                    <div class="card-title">Update password</div>
                    <div class="py-4 flex flex-col gap-3">
                        <input type="text" class="input bg-base-200" placeholder="password lama">
                        <input type="text" class="input bg-base-200" placeholder="password baru">
                        <input type="text" class="input bg-base-200" placeholder="konfirmasi password baru">
                    </div>
                    <div class="card-actions justify-center">
                        <button class="btn btn-primary">
                            <x-icons name="key" />
                            update password
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
