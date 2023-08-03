<div class="grid grid-cols-3 gap-6">
    <div>
        <div class="card bg-base-100">
            <div class="card-body">

                <div class="card-title">
                    Upload BA ({{ $witel }})
                </div>
                <div class="py-4 flex flex-col gap-2">
                    <div class="form-control">
                        <label for="" class="label">
                            <span class="label-text">Pilih STO</span>
                        </label>

                        <select class="select bg-base-200">
                            <option value="">---</option>
                            @foreach ($lokasis as $lokasiid => $lokasiname)
                                <option value="{{ $lokasiid }}">{{ $lokasiname }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-control">
                        <label for="" class="label">
                            <span class="label-text">Pilih File BA Rekon</span>
                        </label>

                        <input type="file" class="file-input bg-base-200" placeholder="pilih">
                    </div>
                </div>
                <div class="card-actions">
                    <button class="btn btn-primary">
                        <x-icons name="upload" />
                        Upload BA Rekon
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-span-2">
        <div class="overflow-x-auto bg-base-100 rounded-2xl">
            <table class="table text-center">
                <thead class="bg-base-300">
                    <tr>
                        <th rowspan="2">STO</th>
                        <th colspan="4">2023</th>
                    </tr>
                    <tr>
                        <th>Q1</th>
                        <th>Q2</th>
                        <th>Q3</th>
                        <th>Q4</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lokasis as $lokasiid => $lokasiname)
                        <tr>
                            <td class="text-left">{{ $lokasiname }}</td>
                            <td>
                                <button class="text-success">
                                    <x-icons name="download" />
                                </button>
                            </td>
                            <td>
                                <button>
                                    <x-icons name="download" />
                                </button>
                            </td>
                            <td>
                                <button>
                                    <x-icons name="download" />
                                </button>
                            </td>
                            <td>
                                <button>
                                    <x-icons name="download" />
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
