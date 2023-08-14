<div class="flex flex-col gap-6">
    <div>
        <button class="btn btn-primary btn-sm" wire:click.prevent="$emit('showCreateModal')">create user</button>
    </div>
    <div class="overflow-x-auto bg-base-100 rounded-xl">
        <table class="table table-sm">
            <thead class="bg-base-300">
                <th>No</th>
                <th>username</th>
                <th>Name</th>
                <th>witel</th>
                <th>created_at</th>
                <th>roles</th>
                <th>Action</th>
            </thead>
            <thead>
                <th></th>
                <th>
                    <input type="text" class="input input-xs bg-base-200" placeholder="search" wire:model="username">
                </th>
                <th>
                    <input type="text" class="input input-xs bg-base-200" placeholder="search" wire:model="name">
                </th>
                <th>
                    <select class="select select-xs bg-base-200" wire:model="witel">
                        <option value="">Pilih witel</option>
                        @foreach (config('ios.listWitel') as $wtl)
                            <option value="{{ $wtl }}">{{ $wtl }}</option>
                        @endforeach
                    </select>
                </th>
                <th></th>
                <th></th>
                <th><button class="btn btn-primary btn-xs" wire:click.prevent="resetFilter">reset</button></th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td class="font-mono">{{ $data->username }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->witel }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td>{{ implode(', ', $data->getRoleNames()->toArray()) }}</td>
                        <td>
                            <div class="flex">
                                <div class="tooltip" data-tip="edit">
                                    <button class="btn btn-square btn-ghost btn-xs"
                                        wire:click.prevent="editUser({{ $data->id }})">
                                        <x-icons name="edit" />
                                    </button>
                                </div>
                                <div class="tooltip" data-tip="reset password">
                                    <button class="btn btn-square btn-ghost btn-xs"
                                        wire:click.prevent="resetPassword({{ $data->id }})">
                                        <x-icons name="key" />
                                    </button>
                                </div>
                                <div class="tooltip" data-tip="hapus">
                                    <button class="btn btn-square btn-ghost btn-xs text-error"
                                        wire:click.prevent="deleteUser({{ $data->id }})">
                                        <x-icons name="trash" />
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <p class="text-sm">saat direset, password user akan menjadi "iosta2023" </p>

    @livewire('partial.user.create')
    @livewire('partial.user.edit')
</div>
