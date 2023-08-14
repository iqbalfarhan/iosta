<div class="overflow-x-auto flex flex-col gap-6">
    <div>
        <button wire:click.prevent="$set('showAddModal', true)" class="btn btn-primary btn-sm">Create role &
            permission</button>
    </div>

    <table class="table table-sm bg-base-100 overflow-hidden">
        <thead>
            <tr class="bg-base-300">
                <th>No</th>
                <th>Permission</th>
                @foreach ($roles as $rl)
                    <th>{{ $rl }}</th>
                @endforeach
                <th>action</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td></td>
                <td>
                    <input type="text" class="input bg-base-200 input-xs w-full" placeholder="---">
                </td>
            </tr>
            @foreach ($permissions as $permit)
                <tr>
                    <td>{{ $permit->id }}</td>
                    <td>{{ $permit->name }}</td>
                    @foreach ($roles as $rl)
                        <th>
                            <input type="checkbox" wire:key="{{ uniqid() }}"
                                wire:click.prevent="changePermission('{{ $permit->id }}', '{{ $rl }}')"
                                {{ $permit->hasRole($rl) ? 'checked' : '' }} class="checkbox checkbox-xs">
                        </th>
                    @endforeach
                    <td>
                        <a wire:click.prevent="hapusPermission({{ $permit->id }})" class="text-error">
                            <x-icons name="trash" />
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>

        <tfoot>
            <th></th>
            <th>action</th>
            @foreach ($roles as $id => $rl)
                <td>
                    <a wire:click.prevent="hapusRole('{{ $id }}')" class="text-error">
                        <x-icons name="trash" />
                    </a>
                </td>
            @endforeach
            <th></th>
        </tfoot>
    </table>

    <input type="checkbox" class="modal-toggle" wire:model="showAddModal" />
    <form class="modal" wire:submit.prevent="addPermission">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Buat role atau permission</h3>
            <div class="py-4 flex flex-col gap-3">
                <div class="form-control">
                    <label for="" class="label"><span class="label-text">tipe</span></label>
                    <select wire:model="tipe" class="select bg-base-200">
                        <option value="permission">Permission</option>
                        <option value="role">Role</option>
                    </select>
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">{{ $tipe }} name</span>
                    </label>
                    <input type="text" wire:model="name" class="input bg-base-200" placeholder="name" />
                </div>
            </div>
            <div class="modal-action justify-between">
                <button wire:click.prevent="$set('showAddModal', false)" type="button" class="btn">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>
