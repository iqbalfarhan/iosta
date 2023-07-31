<div class="flex flex-col gap-6">
    <div class="flex justify-between gap-6">
        <div class="flex flex-1">
            <input type="text" placeholder="Cari user dengan nama, email, username atau witel" class="input w-full" />
        </div>
        <div>
            <button class="btn btn-square btn-primary">
                <x-icons name="plus" size="5" />
            </button>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($datas as $data)
            <div class="card card-compact w-full bg-base-100">
                <div class="card-body gap-4">
                    <div class="flex justify-between">
                        <div class="avatar placeholder">
                            <div class="bg-neutral-focus text-neutral-content rounded-full w-10">
                                <span class="text-lg">{{ $data->initial }}</span>
                            </div>
                        </div>
                        <div class="card-actions justify-end">
                            <button class="btn btn-circle btn-sm">
                                <x-icons name="edit" />
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <b class="font-semibold truncate">{{ $data->name }}</b>
                        <i class="text-xs truncate">{{ $data->username }} - {{ $data->witel }}</i>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
