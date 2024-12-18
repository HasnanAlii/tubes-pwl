<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('List Product') }}
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
                                <th class="text-center" scope="col">Nama Produk</th>
                                <th class="text-center" scope="col">SKU</th>
                                <th class="text-center" scope="col">Harga</th>
                                <th class="text-center" scope="col">Stok</th>
                                <th class="text-center" scope="col">Aksi</th>
                            </tr>
                        </x-slot>

                        @foreach ($products as $product)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $product->name }}</td>
                                <td class="text-center">{{ $product->sku }}</td>
                                <td class="text-center">{{ $product->price }}</td>
                                <td class="text-center">{{ $product->stock }}</td>
                                
                            </tr>
                        @endforeach
                    </x-table>
                


                </div>
            </div>
        </div>
    </div>
</x-app-layout>