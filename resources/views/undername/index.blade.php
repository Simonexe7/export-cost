<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Undername') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
                    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                        <div class="py-6">
                            <button onclick="window.location.href='{{ route('undername.create') }}'" class="inline-flex items-center gap-2 rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm transition duration-200 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 4v16m8-8H4" />
                                </svg>

                                Tambah
                            </button>
                        </div>
                        <div class="relative overflow-x-auto rounded-xl border border-gray-200 bg-white shadow-sm">

                            <table class="datatable w-full text-sm text-left">

                                <thead class="bg-gray-50 text-xs uppercase tracking-wider text-gray-500">
                                    <tr>
                                        <th class="px-6 py-4">No</th>
                                        <th class="px-6 py-4">Nama Perusahaan</th>
                                        <th class="px-6 py-4">Nomor Izin</th>
                                        <th class="px-6 py-4">Alamat</th>
                                        <th class="px-6 py-4">Telepon</th>
                                        <th class="px-6 py-4">Email</th>
                                        <th class="px-6 py-4">Fee</th>
                                        <th class="px-6 py-4 text-center">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-gray-100">
                                    @foreach ($undernames as $undername)
                                    <tr class="transition hover:bg-blue-50">
                                        <td class="px-6 py-4 font-medium text-gray-700">
                                            {{ $loop->iteration }}
                                        </td>

                                        <td class="px-6 py-4">
                                            <div>
                                                <p class="font-semibold text-gray-900">
                                                    {{ $undername->nama_perusahaan }}
                                                </p>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4">
                                            {{ $undername->nomor_izin_ekspor }}
                                        </td>

                                        <td class="px-6 py-4">
                                            {{ $undername->alamat }}
                                        </td>

                                        <td class="px-6 py-4">
                                            {{ $undername->telepon }}
                                        </td>

                                        <td class="px-6 py-4">
                                            {{ $undername->email }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $undername->fee }}
                                        </td>

                                        <td class="px-6 py-4">

                                            <div class="flex justify-center gap-2">
                                                <button
                                                    onclick="window.location.href='{{ route('undername.edit', $undername->id) }}'"
                                                    class="rounded-lg bg-slate-500 px-3 py-2 text-xs font-medium text-white transition hover:bg-amber-600">
                                                    Edit
                                                </button>

                                                <form action="{{ route('undername.destroy', $undername->id) }}" method="POST" class="delete-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        type="submit"
                                                        class="rounded-lg bg-red-500 px-3 py-2 text-xs font-medium text-white transition hover:bg-red-600">
                                                        Hapus
                                                    </button>
                                                </form>

                                            </div>

                                        </td>

                                    </tr>
                                    @endforeach

                                </tbody>

                            </table>

                        </div>
                    </div>
                    </section>

            </div>
        </div>
    </div>
</x-app-layout>
