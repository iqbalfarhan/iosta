<div>
    <input type="checkbox" id="my_modal_6" class="modal-toggle" wire:model="show" />
    @if ($data)
        <form class="modal" wire:submit.prevent="simpan">
            <div class="modal-box">
                <h3 class="font-bold text-lg">Edit data user</h3>
                <div class="py-4 flex flex-col gap-3">
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Nama lengkap</span>
                        </label>
                        <input type="text" placeholder="Type here" wire:model="name"
                            class="input bg-base-200 @error('name') input-error @enderror w-full" />
                        @error('name')
                            <label class="label">
                                <span class="label-text text-xs text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Username login</span>
                        </label>
                        <input type="text" placeholder="Type here" wire:model="username"
                            class="input bg-base-200 @error('username') input-error @enderror w-full" />
                        @error('username')
                            <label class="label">
                                <span class="label-text text-xs text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Witel</span>
                        </label>
                        <select type="text" placeholder="Type here" wire:model="witel"
                            class="select bg-base-200 @error('witel') select-error @enderror w-full">
                            <option value="">---</option>
                            @foreach (config('ios.listWitel') as $wtl)
                                <option value="{{ $wtl }}">{{ $wtl }}</option>
                            @endforeach
                        </select>
                        @error('witel')
                            <label class="label">
                                <span class="label-text text-xs text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Akses</span>
                        </label>
                        <select type="text" placeholder="Type here" wire:model="role"
                            class="select bg-base-200 @error('role') select-error @enderror w-full">
                            <option value="">---</option>
                            @foreach ($roles as $rl)
                                <option value="{{ $rl }}">{{ $rl }}</option>
                            @endforeach
                        </select>
                        @error('role')
                            <label class="label">
                                <span class="label-text text-xs text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>
                </div>
                <div class="modal-action justify-between">
                    <button wire:click.prevent="$set('show', {{ false }})" type="button"
                        class="btn">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    @endif
</div>
