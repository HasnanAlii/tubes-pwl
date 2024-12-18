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
              
                    <x-table>
                        <x-slot name="header">
                            <tr>
                                <th class="text-center" scope="col">#</th>
                                <th class="text-center" scope="col">ID Transaksi</th>
                                <th class="text-center" scope="col">Nama Produk</th>
                                <th class="text-center" scope="col">Jumlah</th>
                                <th class="text-center" scope="col">Harga</th>
                                <th class="text-center" scope="col">SubTotal</th>

                            </tr>
                        </x-slot>

                        @foreach ( $transactions as  $transaction)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $transaction->id }}</td>
                                <td class="text-center">{{ $transaction->product->name}}</td>
                                <td class="text-center">{{ $transaction->quantity}}</td>
                                <td class="text-center">{{ $transaction->price }}</td>
                                <td class="text-center">{{ $transaction->subtotal }}</td>

                            </tr>
                        @endforeach
                    </x-table>
                


                </div>
            </div>
        </div>
    </div>
</x-app-layout>