<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Quotation - {{ $quotation->nomor_quotation }}</title>

    @vite(['resources/css/app.css'])

    <style>
        @media print {
            @page {
                size: A4;
                /* margin: 10mm; */
            }

            body {
                background: white !important;
            }

            .no-print {
                display: none !important;
            }

            .document {
                box-shadow: none !important;
                margin: 0 !important;
                max-width: none !important;
            }
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">

    {{-- ACTION BUTTON --}}
    <div class="no-print max-w-5xl mx-auto px-4 pt-6 flex justify-end gap-3">

        <button
            onclick="window.print()"
            class="px-5 py-2.5 bg-blue-600 text-white rounded-lg
                   hover:bg-blue-700 transition">
            Print Contract
        </button>

    </div>


    {{-- DOCUMENT --}}
    <div class="document max-w-5xl mx-auto my-7 bg-white text-gray-800 p-10">

        {{-- HEADER --}}
        <div class="flex justify-between items-start border-b-2 border-gray-800 pb-6">

            <div>
                <h1 class="text-2xl font-bold tracking-wide">
                    SRIWIJAYA VANILLA BEANS
                </h1>

                <p class="text-sm text-gray-500 mt-1">
                    Export & Trading Company
                </p>

                <p class="text-sm text-gray-500 mt-3">
                    Indonesia
                </p>

                <p class="text-sm text-gray-500">
                    Email: sriwijayavanillabeans@gmail.com
                </p>

                <p class="text-sm text-gray-500">
                    Phone: +62 896 3001 2683
                </p>
            </div>

            <div class="text-right">

                <h2 class="text-3xl font-bold tracking-widest">
                    QUOTATION
                </h2>

                <p class="text-sm text-gray-500 mt-3">
                    Quotation No.
                </p>

                <p class="font-semibold">
                    {{ $quotation->nomor_quotation }}
                </p>

            </div>

        </div>


        {{-- QUOTATION INFORMATION --}}
        <div class="grid grid-cols-2 gap-10 mt-5">

            <div>

                <p class="text-xs font-semibold uppercase text-gray-500">
                    Bill To
                </p>

                <h3 class="font-bold text-lg mt-2">
                    {{ $quotation->buyer->nama_buyer ?? '-' }}
                </h3>

                <p class="text-sm text-gray-600">
                    {{ $quotation->buyer->alamat ?? '-' }}
                </p>

                <p class="text-sm text-gray-600">
                    {{ $quotation->buyer->negara ?? '-' }}
                </p>

            </div>


            <div>

                <div class="flex justify-between text-sm py-1">
                    <span class="text-gray-500">
                        Date
                    </span>

                    <span class="font-medium">
                        {{ $quotation->tanggal }}
                    </span>
                </div>

                <div class="flex justify-between text-sm py-1">
                    <span class="text-gray-500">
                        Valid Until
                    </span>

                    <span class="font-medium">
                        {{ $quotation->valid_until }}
                    </span>
                </div>

                <div class="flex justify-between text-sm py-1">
                    <span class="text-gray-500">
                        Currency
                    </span>

                    <span class="font-medium">
                        {{ $quotation->currency }}
                    </span>
                </div>

            </div>

        </div>


        {{-- PRODUCT --}}
        <div class="mt-5">

            <h3 class="font-bold text-sm uppercase tracking-wide mb-3">
                Product Details
            </h3>

            <table class="w-full text-sm">

                <thead>
                    <tr class="bg-gray-900 text-white">

                        <th class="px-4 py-3 text-left">
                            No
                        </th>

                        <th class="px-4 py-3 text-left">
                            Description
                        </th>

                        <th class="px-4 py-3 text-right">
                            Quantity
                        </th>

                        <th class="px-4 py-3 text-center">
                            Unit
                        </th>

                        <th class="px-4 py-3 text-right">
                            Unit Price
                        </th>

                        <th class="px-4 py-3 text-right">
                            Amount
                        </th>

                    </tr>
                </thead>

                <tbody>

                    <tr class="border-b">

                        <td class="px-4 py-4">
                            1
                        </td>

                        <td class="px-4 py-4">

                            <p class="font-semibold">
                                {{ $quotation->calculation->products->nama_product ?? '-' }} - Grade {{ $quotation->calculation->products->grade ?? '-' }}
                            </p>

                        </td>

                        <td class="px-4 py-4 text-right">
                            {{ $quotation->calculation->quantity ?? 0 }}
                        </td>

                        <td class="px-4 py-4 text-center">
                            {{ $quotation->calculation->products->satuan ?? '-' }}
                        </td>

                        <td class="px-4 py-4 text-right">
                            ${{ number_format($unit_price ?? 0, 2) }}
                        </td>

                        <td class="px-4 py-4 text-right font-semibold">
                            ${{ number_format($total_harga ?? 0, 2) }}
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>


        {{-- TOTAL --}}
        <div class="flex justify-end mt-6">

            <div class="w-72">

                <div class="flex justify-between py-2 text-sm">
                    <span>
                        Subtotal
                    </span>

                    <span>
                        ${{ number_format($total_harga ?? 0, 2) }}
                    </span>
                </div>

                <div class="border-t-2 border-gray-900 pt-3 flex justify-between">

                    <span class="font-bold text-lg">
                        TOTAL
                    </span>

                    <span class="font-bold text-lg">
                        ${{ number_format($total_harga ?? 0, 2) }}
                    </span>

                </div>

            </div>

        </div>


        {{-- COMMERCIAL TERMS --}}
        <div class="mt-5">

            <h3 class="font-bold text-sm uppercase tracking-wide mb-4">
                Commercial Terms
            </h3>

            <div class="grid grid-cols-2 gap-3 border-t border-gray-200">

                <div class="flex justify-between border-b py-3 text-sm">
                    <span class="text-gray-500">
                        Incoterm
                    </span>

                    <span class="font-medium">
                        {{ $quotation->incoterm ?? '-' }}
                    </span>
                </div>

                <div class="flex justify-between border-b py-3 text-sm">
                    <span class="text-gray-500">
                        Port of Loading
                    </span>

                    <span class="font-medium">
                        {{ $quotation->pol ?? '-' }}
                    </span>
                </div>

                <div class="flex justify-between border-b py-3 text-sm">
                    <span class="text-gray-500">
                        Destination
                    </span>

                    <span class="font-medium">
                        {{ $quotation->destination ?? '-' }}
                    </span>
                </div>

                <div class="flex justify-between border-b py-3 text-sm">
                    <span class="text-gray-500">
                        Payment Term
                    </span>

                    <span class="font-medium">
                        {{ $quotation->payment_term ?? '-' }}
                    </span>
                </div>

            </div>

        </div>


        {{-- TERMS --}}
        <div class="mt-10">

            <h3 class="font-bold text-sm uppercase tracking-wide mb-3">
                Terms & Conditions
            </h3>

            <p class="text-sm text-gray-600 space-y-2">
                {{ $quotation->terms_conditions ?? '-' }}
            </p>

        </div>


        {{-- SIGNATURE --}}
        <div class="mt-10">

            <p class="text-sm">
                Best Regards,
            </p>

            <p class="font-bold mt-2">
                SRIWIJAYA VANILLA BEANS
            </p>

            <div class="mt-16">

                <div class="w-56 border-b border-gray-800"></div>

                <p class="text-sm mt-2">
                    Authorized Person
                </p>

            </div>

        </div>

    </div>

</body>

</html>