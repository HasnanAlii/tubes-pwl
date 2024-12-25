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
                    <form method="GET" action="{{ route('owner.transactions.index') }}">
                        <div class="mb-4">
                            <select id="cabang_id" name="cabang_id" class="inline w-2/12 pt-2.5 pb-2.5 text-black rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                <option value="">-- Pilih Cabang --</option>
                                @foreach ($cabang as $item)
                                    <option value="{{ $item->id }}" {{ request('cabang_id') == $item->id ? 'selected' : '' }}>
                                        {{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                            <button type="submit" class="inline-flex items-center px-4 ml-2 pb-3 pt-3.5 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Filter
                            </button>
                        </div>
                    </form>

                    @if(request('cabang_id'))
                        <x-table>
                            <x-slot name="header">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">ID Transaksi</th>
                                    <th class="text-center">Nama Produk</th>
                                    <th class="text-center">Jumlah</th>
                                    <th class="text-center">Harga</th>
                                    <th class="text-center">SubTotal</th>
                                </tr>
                            </x-slot>

                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $transaction->id }}</td>
                                    <td class="text-center">{{ $transaction->product->name }}</td>
                                    <td class="text-center">{{ $transaction->quantity }}</td>
                                    <td class="text-center">{{ $transaction->price }}</td>
                                    <td class="text-center">{{ $transaction->subtotal }}</td>
                                </tr>
                            @endforeach
                        </x-table>
                    @else
                        <p class="text-gray-600 dark:text-gray-400">Please select a branch to view the inventory.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
