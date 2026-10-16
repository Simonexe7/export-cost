<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Total Supplier -->
                <div class="bg-white border-2 border-gray-300 rounded-lg shadow-sm p-6">
                    <h2 class="text-xl font-semibold text-gray-700">Total Supplier</h2>
                    <p class="mt-6 text-5xl font-bold text-gray-900">
                        {{ $totalSupplier }}
                    </p>
                </div>

                <!-- Total Buyer -->
                <div class="bg-white border-2 border-gray-300 rounded-lg shadow-sm p-6">
                    <h2 class="text-xl font-semibold text-gray-700">Total Buyer</h2>
                    <p class="mt-6 text-5xl font-bold text-gray-900">
                        {{ $totalBuyer }}
                    </p>
                </div>

                <!-- Total Product -->
                <div class="bg-white border-2 border-gray-300 rounded-lg shadow-sm p-6">
                    <h2 class="text-xl font-semibold text-gray-700">Total Product</h2>
                    <p class="mt-6 text-5xl font-bold text-gray-900">
                        {{ $totalProduct }}
                    </p>
                </div>

                <!-- Total Quotation -->
                <div class="bg-white border-2 border-gray-300 rounded-lg shadow-sm p-6">
                    <h2 class="text-xl font-semibold text-gray-700">Total Quotation</h2>
                    <p class="mt-6 text-5xl font-bold text-gray-900">
                        {{ $totalQuotation }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
