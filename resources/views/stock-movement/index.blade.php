<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Perpindahan Stok') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- @hasrole ('supervisor')
                        <div class="flex justify-end px-20">
                            <x-primary-button tag="a" href="{{ route('stock-movement.export-pdf') }}">
                                Cetak PDF
                            </x-primary-button>
                        </div>
                    @endhasrole --}}
                    @hasrole ('pegawai-gudang')
                        <div class="flex justify-end px-20">
                            <x-primary-button tag="a" href="{{ route('stock-movements.create') }}">Tambah Stock</x-primary-button>
                        </div>
                    @endhasrole
                    <x-table>
                        <x-slot name="header">
                            <tr>
                                <th class="text-center" scope="col">No</th>
                                <th class="text-start" scope="col">Nama Pegawai</th>
                                <th class="text-start" scope="col">Produk</th>
                                <th class="text-center" scope="col">Tipe</th>
                                <th class="text-center" scope="col">Jumlah</th>
                                <th class="text-center" scope="col">Tanggal</th>
                            </tr>
                        </x-slot>

                        @foreach ($stockMovements as $movement)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-start">{{ $movement->user->name ?? '-' }}</td>
                                <td class="text-start">{{ $movement->product->name ?? '-' }}</td>
                                <td class="text-center">{{ $movement->type === 'in' ? 'Masuk' : 'Keluar' }}</td>
                                <td class="text-center">{{ $movement->quantity }}</td>
                                <td class="text-center">{{ $movement->created_at->format('d M Y, H:i') }}</td>
                            </tr>
                        @endforeach
                    </x-table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
