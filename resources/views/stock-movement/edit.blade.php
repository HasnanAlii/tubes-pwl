<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Stock Movement') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('stock-movements.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <!-- Cabang -->
                        <div>
                            <label for="cabang_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Cabang</label>
                            <input 
                                type="text" 
                                id="cabang_name" 
                                class="block w-full mt-1 bg-gray-100 text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                value="{{ $user->cabang->name }}" 
                                disabled>
                            <input type="hidden" name="cabang_id" value="{{ $cabangId }}">
                        </div>

                        <!-- Produk -->
                        <div>
                            <label for="product_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Produk</label>
                            <select 
                                id="product_id" 
                                name="product_id" 
                                class="block w-full mt-1 bg-gray-50 text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                required>
                                <option value="" disabled selected>Pilih Produk</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Tipe (In/Out) -->
                        <div>
                            <label for="type" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tipe</label>
                            <select 
                                id="type" 
                                name="type" 
                                class="block w-full mt-1 bg-gray-50 text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                required>
                                <option value="in">Masuk</option>
                                <option value="out">Keluar</option>
                            </select>
                        </div>

                        <!-- Jumlah -->
                        <div>
                            <label for="quantity" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Jumlah</label>
                            <input 
                                type="number" 
                                id="quantity" 
                                name="quantity" 
                                class="block w-full mt-1 bg-gray-50 text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                min="1" 
                                required>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="flex justify-end">
                            <x-primary-button type="submit">Simpan</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
