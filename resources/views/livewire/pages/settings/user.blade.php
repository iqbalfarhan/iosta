<div class="flex flex-col gap-6">
    <input type="text" placeholder="Cari user dengan nama" class="input w-full" />
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
                            <button class="btn btn-square btn-sm">
                                @livewire('icons.edit')
                            </button>
                        </div>
                    </div>
                    <div class="">
                        <b>{{ $data->name }}</b>
                        <i class="text-sm truncate">{{ $data->email }}</i>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
