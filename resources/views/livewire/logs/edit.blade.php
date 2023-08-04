<div>
    <form class="card bg-base-100" wire:submit.prevent="simpan">
        <div class="card-body">
            <h3 class="card-title">Edit log perubahan</h3>
            <div class="grid grid-cols-4 py-4 gap-3">
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">kode_q</span>
                    </label>
                    <input type="text" class="input bg-base-200" placeholder="kode_q" wire:model="kode_q">
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">luas</span>
                    </label>
                    <input type="text" class="input bg-base-200" placeholder="luas" wire:model="luas">
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">br</span>
                    </label>
                    <input type="text" class="input bg-base-200" placeholder="br" wire:model="br">
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">sc</span>
                    </label>
                    <input type="text" class="input bg-base-200" placeholder="sc" wire:model="sc">
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">status</span>
                    </label>
                    <select wire:model="status" class="select bg-base-200">
                        <option value="">---</option>
                        <option value="new">New</option>
                        <option value="existing">Existing</option>
                    </select>
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">durasi</span>
                    </label>
                    <input type="text" class="input bg-base-200" placeholder="durasi" wire:model="durasi">
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">layanan</span>
                    </label>
                    <input type="text" class="input bg-base-200" placeholder="layanan" wire:model="layanan">
                </div>
            </div>
            <div class="card-actions">
                <button class="btn btn-primary" type="submit">
                    <x-icons name="simpan" />
                    Simpan
                </button>
            </div>
        </div>
    </form>
</div>
