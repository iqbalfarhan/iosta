<div class="flex justify-center ">
    <div class="card bg-base-100 w-96">
        <form class="card-body gap-6" wire:submit.prevent="simpan">
            <div class="flex flex-col gap-3">
                <div class="avatar placeholder">
                    <div class="bg-neutral-focus text-neutral-content rounded-full w-16">
                        <span class="text-3xl">{{ $initial }}</span>
                    </div>
                </div>
                <input type="text" wire:model="name" placeholder="Nama user" class="input bg-base-200" />
                <input type="email" wire:model="email" placeholder="Email user" class="input bg-base-200" />
                <select wire:model="witel" class="input bg-base-200">
                    <option value="">Pilih witel</option>

                    @foreach (config('ios.witels') as $wtl)
                        <option value="{{ $wtl }}">{{ $wtl }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button class="btn">simpan</button>
            </div>
        </form>
    </div>

</div>
