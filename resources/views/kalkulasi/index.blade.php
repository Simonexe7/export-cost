<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kalkulasi Biaya Ekspor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
                    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                            <div class="max-w-7xl mx-auto p-6">

                                <form action="{{ route('export_cost_calculation.store') }}" method="POST" id="formKalkulasi">
                                    @csrf
                                    @method('POST')
                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 grid-flow-col">
                                    <!-- ================= LEFT ================= -->
                                    <div class="lg:col-span-2 space-y-6">

                                        <!-- DATA KALKULASI -->
                                        <div class="bg-white rounded-xl shadow border border-gray-200">

                                            <div class="border-b border-gray-100 p-6">

                                                <h2 class="text-2xl font-bold text-slate-800">
                                                    Data Kalkulasi
                                                </h2>

                                                <p class="text-sm text-gray-500 mt-1">
                                                    Masukkan data untuk menghitung biaya ekspor.
                                                </p>

                                            </div>

                                            <div class="p-6">

                                                <div class="grid md:grid-cols-2 gap-6">

                                                    <!-- LEFT FORM -->
                                                    <div class="space-y-4">

                                                        <div class="sm:col-span-2">
                                                            <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                                                            <input type="date" name="tanggal" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                                                        </div>

                                                        <div class="sm:col-span-2">
                                                            <label for="supplier" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supplier</label>
                                                            <select id="supplier" name="supplier_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                @foreach($suppliers as $supplier)
                                                                <option value="{{ $supplier->id }}">{{ $supplier->nama_supplier }}</option>
                                                                @endforeach;
                                                            </select>
                                                        </div>

                                                        <div class="sm:col-span-2">
                                                            <label for="product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product</label>
                                                            <select id="product" name="product_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                @foreach($products as $product)
                                                                <option value="{{ $product->id }}">{{ $product->nama_product }} - {{ $product->grade }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="sm:col-span-2">
                                                            <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity (Kg)</label>
                                                            <input type="number" name="quantity" id="quantity" min="1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                                                        </div>

                                                        <div class="sm:col-span-2">
                                                            <label for="harga_beli" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Beli per Kg (IDR)</label>
                                                            <input type="number" id="harga_beli" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                                                        </div>
                                                    </div>

                                                    <!-- RIGHT FORM -->

                                                    <div class="space-y-4">
                                                        <div class="sm:col-span-2">
                                                            <label for="nomor_kalkulasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Kalkulasi</label>
                                                            <input type="text" name="nomor_kalkulasi" id="nomor_kalkulasi" value="{{ $nomorKalkulasi }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" readonly>
                                                        </div>

                                                        <div class="sm:col-span-2">
                                                            <label for="forwarder" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Freight Forwarder</label>
                                                            <select id="forwarder" name="forwarder_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                @foreach ($forwarders as $forwarder)
                                                                    <option value="{{ $forwarder->id }}">{{ $forwarder->nama_perusahaan }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="sm:col-span-2">
                                                            <label for="undername" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Undername</label>
                                                            <select id="undername" name="undername_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                @foreach ($undernames as $undername)
                                                                    <option value="{{ $undername->id }}" data-fee="{{ $undername->fee }}">{{ $undername->nama_perusahaan }} - fee ({{ $undername->fee }}%)</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="sm:col-span-2">
                                                            <label for="total" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Harga Beli (IDR)</label>
                                                            <input type="number" name="harga_beli" id="total" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" readonly>
                                                        </div>

                                                        <div class="sm:col-span-2 flex justify-between items-end">
                                                            <div class="sm:col-span-2">
                                                                <label for="margin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Margin Keuntungan (%)</label>
                                                                <input type="number" name="margin_persen" id="margin" min="1" max="100" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                                                            </div>
                                                            <button
                                                                type="button"
                                                                id="btnHitungBiaya"
                                                                class="bg-blue-600 text-white rounded-lg py-3 px-5 hover:bg-blue-700">
                                                                Hitung
                                                            </button>
                                                        </div>

                                                        <input type="hidden" name="total_biaya" id="total_biaya">
                                                        <input type="hidden" name="harga_jual" id="hargaJual">
                                                        <input type="hidden" name="unit_price" id="hargaJualPerUnit">
                                                        <input type="hidden" name="estimasi_keuntungan" id="estimasiKeuntungan">
                                                        <input
                                                            type="hidden"
                                                            name="detail_biaya"
                                                            id="detail_biaya"
                                                        >

                                                    </div>

                                                </div>

                                            </div>

                                        </div>


                                        <!-- RINCIAN BIAYA -->

                                        <div class="bg-white rounded-xl shadow border border-gray-200">

                                            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">

                                                <h2 class="text-2xl font-bold text-slate-800">
                                                    Biaya Tambahan
                                                </h2>

                                                <div class="flex gap-2">
                                                    <select id="biaya_id" name="biaya_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                        @foreach ($biayas as $biaya)
                                                            <option value="{{ $biaya->id }}" 
                                                                data-nama="{{ $biaya->nama_biaya }}"
                                                                data-jenis="{{ $biaya->jenis_biaya }}"
                                                                data-nilai="{{ $biaya->nilai_biaya }}"
                                                            >{{ $biaya->nama_biaya }}</option>
                                                        @endforeach
                                                    </select>
                                                    <button
                                                        type="button"
                                                        id="btnTambahBiaya"
                                                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                                        +
                                                    </button>
                                                </div>

                                            </div>

                                            <div class="p-6">

                                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                        <tr>
                                                            <th scope="col" class="px-4 py-3">Nama Biaya</th>
                                                            <th scope="col" class="px-4 py-3">Jenis Biaya</th>
                                                            <th scope="col" class="px-4 py-3">Nilai</th>
                                                            <th scope="col" class="px-4 py-3">Jumlah</th>
                                                            <th scope="col" class="px-4 py-3">Sub Total</th>
                                                            <th scope="col" class="px-4 py-3">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tabelBiayaTambahan">
                                                        <tr>
                                                            <td colspan="6" class="text-center py-4 text-gray-500">
                                                                Tidak ada biaya tambahan
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div class="flex justify-end mt-6">

                                                    <h3 class="text-2xl font-bold">

                                                        Total Biaya :
                                                        <span class="text-blue-600" id="totalBiayaTambahan">
                                                            Rp 0
                                                        </span>

                                                    </h3>

                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                    <!-- ================= RIGHT ================= -->

                                    <div>

                                        <div class="bg-white rounded-xl shadow border border-gray-200">

                                            <div class="border-b border-gray-100 p-6">

                                                <h2 class="text-xl font-bold text-slate-800">
                                                    Ringkasan Hasil Kalkulasi
                                                </h2>

                                            </div>

                                            <div class="p-6 space-y-5">

                                                @php
                                                    $cards = [
                                                        [
                                                            'title' => 'TOTAL BIAYA (COST)',
                                                            'value' => 'Rp 0',
                                                            'id' => 'totalBiaya'
                                                        ],
                                                        [
                                                            'title' => 'TARGET KEUNTUNGAN',
                                                            'value' => 'Rp 0',
                                                            'id' => 'targetKeuntungan'
                                                        ],
                                                        [
                                                            'title' => 'HARGA JUAL TOTAL',
                                                            'value' => 'Rp 0',
                                                            'id' => 'hargaJualTotal'
                                                        ],
                                                        [
                                                            'title' => 'HARGA JUAL PER KG',
                                                            'value' => 'Rp 0',
                                                            'id' => 'hargaJualPerKg'
                                                        ],
                                                        [
                                                            'title' => 'FEE UNDERNAME',
                                                            'value' => 'Rp 0',
                                                            'id' => 'feeUndername'
                                                        ],
                                                        [
                                                            'title' => 'KEUNTUNGAN BERSIH',
                                                            'value' => 'Rp 0',
                                                            'id' => 'keuntunganBersih'
                                                        ]
                                                    ];
                                                @endphp


                                                @foreach($cards as $card)

                                                    <div class="rounded-xl bg-blue-50 p-5">

                                                        <p class="text-xs uppercase text-blue-500 font-semibold">

                                                            {{ $card['title'] }}

                                                        </p>

                                                        <h2 class="mt-2 text-3xl font-bold text-blue-700" id="{{ $card['id'] }}">

                                                            {{ $card['value'] }}

                                                        </h2>

                                                    </div>

                                                @endforeach

                                            </div>

                                        </div>

                                        <div class="grid grid-cols-3 gap-3 mt-6">


                                            <button
                                                type="button"
                                                class="bg-gray-500 text-white rounded-lg py-3 hover:bg-gray-600" id="btnReset">

                                                Reset

                                            </button>

                                            <button
                                                type="submit"
                                                class="bg-green-600 text-white rounded-lg py-3 hover:bg-green-700">

                                                Simpan

                                            </button>

                                        </div>

                                    </div>
                                </div>
                            </form>

                            </div>
                    </div>
                    </section>

            </div>
        </div>
    </div>
</x-app-layout>
