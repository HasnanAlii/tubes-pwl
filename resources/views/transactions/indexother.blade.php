<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inventory') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @hasrole ('supervisor')
                        <div class="flex justify-end px-20">
                            <x-primary-button tag="a" href="{{ route('transactions.export-pdf') }}">
                                Cetak PDF
                            </x-primary-button>
                        </div>
                    @endhasrole
                    <x-table>
                        <x-slot name="header">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">ID Transaksi</th>
                                <th class="text-start">Nama Produk</th>
                                <th class="text-center">Jumlah</th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">SubTotal</th>
                                @hasrole('supervisor')
                                    <th class="text-center">Nama Kasir</th>
                                @endhasrole
                            </tr>
                        </x-slot>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $transaction->id }}</td>
                                <td class="text-start">{{ $transaction->product->name }}</td>
                                <td class="text-center">{{ $transaction->quantity }}</td>
                                <td class="text-center">{{ $transaction->price }}</td>
                                <td class="text-center">{{ $transaction->subtotal }}</td>
                                @hasrole('supervisor')
                                    <td class="text-center">{{ $transaction->user->name }}</td>
                                @endhasrole
                            </tr>
                        @endforeach
                    </x-table>
                    <div class="mt-4">
                        <div class="flex justify-center">
                            <ul class="flex space-x-2">
                                {{ $transactions->links('pagination::tailwind') }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
