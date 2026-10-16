<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Quotation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <section class="bg-white dark:bg-gray-900">
                    <div class="py-8 px-8 mx-auto lg:py-16">
                        <form action="{{ route('dokumen_penjualan.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                <div class="sm:col-span-2">
                                    <label for="nomor_quotation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Quotation</label>
                                    <input type="text" name="nomor_quotation" id="nomor_quotation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="" value="{{ old('nomor_quotation', $quotation->nomor_quotation) }}">
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                                    <input type="date" name="tanggal" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="" value="value="{{ old('tanggal', $quotation->tanggal) }}"">
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="buyer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Buyer</label>
                                    <select id="buyer" name="buyer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        @foreach ($buyers as $buyer)
                                            <option value="{{ $buyer->id }}">{{ $buyer->nama_buyer }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="biaya_ekspor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Biaya Ekspor</label>
                                    <select id="biaya_ekspor" name="biaya_ekspor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        @foreach ($export_costs as $cost)
                                            <option value="{{ $cost->id }}">{{ $cost->id }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                Simpan
                            </button>
                            <button type="button" onclick="window.location.href='{{ route('dokumen_penjualan.index') }}'" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                Kembali
                            </button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
