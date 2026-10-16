<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sales Contract - {{ $salesContract->nomor_contract }}</title>

    @vite(['resources/css/app.css'])

    <style>
        @media print {
            @page {
                size: A4;
                margin: 12mm;
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
    <div class="document max-w-5xl mx-auto my-6 bg-white shadow-lg">

        <div class="p-10">


            {{-- =====================================================
                HEADER
            ====================================================== --}}

            <div class="flex justify-between items-start
                        border-b-2 border-gray-800 pb-6">

                <div>

                    <h1 class="text-xl font-bold tracking-wide text-gray-900">
                        SRIWIJAYA VANILLA BEANS
                    </h1>

                    <p class="text-sm font-medium text-gray-500 mt-1">
                        Export & Trading Company
                    </p>

                    <div class="mt-3 text-xs text-gray-500 leading-5">

                        <p>Indonesia</p>

                        <p>
                            Email:
                            sriwijayavanillabeans@gmail.com
                        </p>

                        <p>
                            Phone:
                            +62 896 3001 2683
                        </p>

                    </div>

                </div>


                <div class="text-right">

                    <h2 class="text-2xl font-bold tracking-widest text-gray-900">
                        SALES CONTRACT
                    </h2>

                    <div class="mt-4">

                        <p class="text-xs uppercase text-gray-500">
                            Contract No.
                        </p>

                        <p class="font-bold text-lg">
                            {{ $salesContract->nomor_contract }}
                        </p>

                    </div>

                </div>

            </div>


            {{-- =====================================================
                CONTRACT INFORMATION
            ====================================================== --}}

            <div class="grid grid-cols-2 gap-10 mt-8">

                {{-- SELLER --}}
                <div>

                    <h3 class="text-xs font-bold uppercase
                               tracking-wide text-gray-500">
                        Seller / Exporter
                    </h3>

                    <p class="font-bold text-lg mt-2">
                        SRIWIJAYA VANILLA BEANS
                    </p>

                    <p class="text-sm text-gray-600">
                        Indonesia
                    </p>

                    <p class="text-sm text-gray-600 mt-2">
                        Email: sriwijayavanillabeans@gmail.com
                    </p>

                    <p class="text-sm text-gray-600">
                        Phone: +62 896 3001 2683
                    </p>

                </div>


                {{-- BUYER --}}
                <div>

                    <h3 class="text-xs font-bold uppercase
                               tracking-wide text-gray-500">
                        Buyer / Importer
                    </h3>

                    <p class="font-bold text-lg mt-2">
                        {{ $salesContract->quotation->buyer->nama_buyer ?? '-' }}
                    </p>

                    <p class="text-sm text-gray-600">
                        {{ $salesContract->quotation->buyer->alamat ?? '-' }}
                    </p>

                    <p class="text-sm text-gray-600">
                        {{ $salesContract->quotation->buyer->negara ?? '-' }}
                    </p>

                </div>

            </div>


            {{-- =====================================================
                CONTRACT DATE
            ====================================================== --}}

            <div class="grid grid-cols-3 gap-4 mt-8">

                <div class="border border-gray-200 rounded-lg p-4">

                    <p class="text-xs uppercase text-gray-500">
                        Contract Date
                    </p>

                    <p class="font-semibold mt-1">
                        {{ \Carbon\Carbon::parse($salesContract->tanggal_contract)->format('d F Y') }}
                    </p>

                </div>


                <div class="border border-gray-200 rounded-lg p-4">

                    <p class="text-xs uppercase text-gray-500">
                        Quotation No.
                    </p>

                    <p class="font-semibold mt-1">
                        {{ $salesContract->quotation->nomor_quotation }}
                    </p>

                </div>


                <div class="border border-gray-200 rounded-lg p-4">

                    <p class="text-xs uppercase text-gray-500">
                        Currency
                    </p>

                    <p class="font-semibold mt-1">
                        {{ $salesContract->quotation->currency }}
                    </p>

                </div>

            </div>


            {{-- =====================================================
                ARTICLE 1 - GOODS
            ====================================================== --}}

            <div class="mt-5">

                <h3 class="text-sm font-bold uppercase tracking-wide
                           text-gray-900 mb-3">

                    Article 1 — Goods

                </h3>


                <table class="w-full border-collapse text-sm">

                    <thead>

                        <tr class="bg-gray-900 text-white">

                            <th class="border border-gray-900 px-3 py-3 text-center">
                                No.
                            </th>

                            <th class="border border-gray-900 px-3 py-3 text-left">
                                Description of Goods
                            </th>

                            <th class="border border-gray-900 px-3 py-3 text-center">
                                Quantity
                            </th>

                            <th class="border border-gray-900 px-3 py-3 text-center">
                                Unit
                            </th>

                            <th class="border border-gray-900 px-3 py-3 text-right">
                                Unit Price
                            </th>

                            <th class="border border-gray-900 px-3 py-3 text-right">
                                Amount
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        <tr>

                            <td class="border border-gray-300 px-3 py-4 text-center">
                                1
                            </td>

                            <td class="border border-gray-300 px-3 py-4">

                                <p class="font-semibold">
                                    {{ $salesContract->quotation->calculation->products->nama_product ?? '-' }}
                                </p>

                                <p class="text-xs text-gray-500 mt-1">
                                    Grade:
                                    {{ $salesContract->quotation->calculation->products->grade ?? '-' }}
                                </p>

                            </td>

                            <td class="border border-gray-300 px-3 py-4 text-center">

                                {{ $salesContract->quotation->calculation->quantity ?? 0 }}

                            </td>

                            <td class="border border-gray-300 px-3 py-4 text-center">
                                {{ $salesContract->quotation->calculation->products->satuan ?? '-' }}
                            </td>

                            <td class="border border-gray-300 px-3 py-4 text-right">

                                {{ $salesContract->quotation->currency }}

                                {{ number_format(
                                    $salesContract->quotation->calculation->unit_price
                                    / ($salesContract->quotation->exchange_rate ?: 1),
                                    2,
                                    '.',
                                    ','
                                ) }}

                            </td>

                            <td class="border border-gray-300 px-3 py-4 text-right font-semibold">

                                {{ $salesContract->quotation->currency }}

                                {{ number_format(
                                    $salesContract->quotation->calculation->harga_jual
                                    / ($salesContract->quotation->exchange_rate ?: 1),
                                    2,
                                    '.',
                                    ','
                                ) }}

                            </td>

                        </tr>

                    </tbody>


                    <tfoot>

                        <tr class="bg-gray-50">

                            <td colspan="5"
                                class="border border-gray-300 px-3 py-3 text-right font-bold">

                                TOTAL CONTRACT VALUE

                            </td>

                            <td class="border border-gray-300 px-3 py-3 text-right font-bold">

                                {{ $salesContract->quotation->currency }}

                                {{ number_format(
                                    $salesContract->quotation->calculation->harga_jual
                                    / ($salesContract->quotation->exchange_rate ?: 1),
                                    2,
                                    '.',
                                    ','
                                ) }}

                            </td>

                        </tr>

                    </tfoot>

                </table>

            </div>


            {{-- =====================================================
                ARTICLE 2 - PRICE & PAYMENT
            ====================================================== --}}

            <div class="grid grid-cols-2 gap-10 mt-10">

                <div>

                    <h3 class="text-sm font-bold uppercase tracking-wide">
                        Article 2 — Price & Payment Terms
                    </h3>

                    <div class="mt-3 space-y-2 text-sm">

                        <div class="flex">

                            <span class="w-36 text-gray-500">
                                Currency
                            </span>

                            <span class="font-medium">
                                {{ $salesContract->quotation->currency }}
                            </span>

                        </div>

                        <div class="flex">

                            <span class="w-36 text-gray-500">
                                Payment Term
                            </span>

                            <span class="font-medium">
                                {{ $salesContract->quotation->payment_term ?? '-' }}
                            </span>

                        </div>

                    </div>

                </div>


                {{-- ARTICLE 3 --}}
                <div>

                    <h3 class="text-sm font-bold uppercase tracking-wide">
                        Article 3 — Incoterm
                    </h3>

                    <p class="text-sm mt-3">

                        {{ $salesContract->quotation->incoterm ?? '-' }}

                        @if(isset($salesContract->quotation->pol))
                            {{ $salesContract->quotation->pol }}
                        @endif

                    </p>

                </div>

            </div>


            {{-- =====================================================
                ARTICLE 4 - DELIVERY
            ====================================================== --}}

            <div class="grid grid-cols-2 gap-10 mt-8">

                <div>

                    <h3 class="text-sm font-bold uppercase tracking-wide">
                        Article 4 — Delivery
                    </h3>

                    <div class="mt-3 text-sm space-y-2">

                        <p>
                            <span class="text-gray-500">
                                Delivery Time:
                            </span>

                            <span class="font-medium">
                                {{ $salesContract->quotation->delivery_time ?? '-' }}
                            </span>
                        </p>

                        <p>
                            <span class="text-gray-500">
                                Port of Loading:
                            </span>

                            <span class="font-medium">
                                {{ $salesContract->quotation->pol ?? '-' }}
                            </span>
                        </p>

                    </div>

                </div>


                {{-- DESTINATION --}}
                <div>

                    <h3 class="text-sm font-bold uppercase tracking-wide">
                        Article 5 — Destination
                    </h3>

                    <p class="text-sm mt-3">

                        {{ $salesContract->quotation->destination ?? '-' }}

                    </p>

                </div>

            </div>


            {{-- =====================================================
                ARTICLE 6 - INSPECTION
            ====================================================== --}}

            <div class="mt-8">

                <h3 class="text-sm font-bold uppercase tracking-wide">
                    Article 6 — Inspection
                </h3>

                <p class="text-sm text-gray-600 mt-3 leading-6">

                    The goods may be subject to inspection according
                    to the agreement between the Seller and the Buyer.
                    Inspection requirements shall follow the agreed
                    product specifications and applicable regulations.

                </p>

            </div>


            {{-- =====================================================
                ARTICLE 7 - FORCE MAJEURE
            ====================================================== --}}

            <div class="mt-8">

                <h3 class="text-sm font-bold uppercase tracking-wide">
                    Article 7 — Force Majeure
                </h3>

                <p class="text-sm text-gray-600 mt-3 leading-6">

                    Neither party shall be liable for any delay or
                    failure in performance caused by circumstances
                    beyond its reasonable control.

                </p>

            </div>


            {{-- =====================================================
                ARTICLE 8 - GOVERNING LAW
            ====================================================== --}}

            <div class="mt-8">

                <h3 class="text-sm font-bold uppercase tracking-wide">
                    Article 8 — Governing Law & Dispute Resolution
                </h3>

                <p class="text-sm text-gray-600 mt-3 leading-6">

                    This Contract shall be governed by the applicable
                    laws agreed upon by both parties. Any dispute
                    arising from this Contract shall first be resolved
                    through mutual consultation.

                </p>

            </div>


            {{-- =====================================================
                ARTICLE 9 - OTHER TERMS
            ====================================================== --}}

            <div class="mt-8 border border-gray-200 rounded-lg p-5">

                <h3 class="text-sm font-bold uppercase tracking-wide">
                    Article 9 — Other Terms & Conditions
                </h3>

                @if($salesContract->quotation->terms_conditions)

                    <div class="mt-3 text-sm text-gray-600 leading-6 whitespace-pre-line">
                        {{ $salesContract->quotation->terms_conditions }}
                    </div>

                @else

                    <ol class="list-decimal list-inside mt-3
                               text-sm text-gray-600 space-y-2">

                        <li>
                            This Contract constitutes the agreement
                            between the Seller and the Buyer concerning
                            the goods stated herein.
                        </li>

                        <li>
                            Any amendment to this Contract shall be
                            agreed upon by both parties.
                        </li>

                        <li>
                            Both parties agree to perform their
                            respective obligations according to this Contract.
                        </li>

                    </ol>

                @endif

            </div>


            {{-- =====================================================
                SIGNATURE
            ====================================================== --}}

            <div class="mt-16">

                <p class="text-sm text-gray-600">
                    This Contract is agreed and accepted by both parties.
                </p>


                <div class="grid grid-cols-2 gap-20 mt-10">

                    {{-- SELLER --}}
                    <div class="text-center">

                        <p class="font-bold text-sm uppercase">
                            For and on behalf of Seller
                        </p>

                        <p class="font-semibold mt-2">
                            SRIWIJAYA VANILLA BEANS
                        </p>


                        <div class="h-28 mt-4"></div>


                        <div class="border-b border-gray-800
                                    w-56 mx-auto"></div>

                        <p class="text-sm font-semibold mt-2">
                            Authorized Person
                        </p>

                        <p class="text-xs text-gray-500">
                            Seller / Exporter
                        </p>

                        <p class="text-xs text-gray-500 mt-3">
                            Date:
                            {{ \Carbon\Carbon::parse($salesContract->tanggal_contract)->format('d F Y') }}
                        </p>

                    </div>


                    {{-- BUYER --}}
                    <div class="text-center">

                        <p class="font-bold text-sm uppercase">
                            For and on behalf of Buyer
                        </p>

                        <p class="font-semibold mt-2">
                            {{ $salesContract->quotation->buyer->nama_buyer ?? '-' }}
                        </p>


                        <div class="h-28 mt-4"></div>


                        <div class="border-b border-gray-800
                                    w-56 mx-auto"></div>

                        <p class="text-sm font-semibold mt-2">
                            Authorized Person
                        </p>

                        <p class="text-xs text-gray-500">
                            Buyer / Importer
                        </p>

                        <p class="text-xs text-gray-500 mt-3">
                            Date:
                            ____________________
                        </p>

                    </div>

                </div>

            </div>


            {{-- FOOTER --}}
            <div class="mt-12 pt-5 border-t border-gray-200
                        text-center text-xs text-gray-400">

                <p>
                    Sales Contract No.
                    {{ $salesContract->nomor_contract }}
                </p>


            </div>

        </div>

    </div>

</body>

</html>
```
