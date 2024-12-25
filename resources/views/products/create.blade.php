<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('products.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <!-- Cabang -->
                        <div>
                            <label for="cabang_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Cabang</label>
                            <input 
                                type="text" 
                                id="cabang_name" 
                                class="block w-full mt-1 bg-gray-100 text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                value="{{ auth()->user()->cabang->name }}" 
                                disabled>
                            <input type="hidden" name="cabang_id" value="{{ auth()->user()->cabang_id }}">
                        </div>

                        <!-- Nama Produk -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Produk</label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                class="block w-full mt-1 bg-gray-50 text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                required>
                        </div>

                        <!-- SKU dan Harga -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="sku" class="block text-sm font-medium text-gray-700 dark:text-gray-300">SKU</label>
                                <input 
                                    type="text" 
                                    id="sku" 
                                    name="sku" 
                                    class="block w-full mt-1 bg-gray-50 text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                    required>
                            </div>

                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Harga</label>
                                <input 
                                    type="number" 
                                    id="price" 
                                    name="price" 
                                    class="block w-full mt-1 bg-gray-50 text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                    required>
                            </div>
                        </div>

                        <!-- Stok dan Stok Minimal -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="stock" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Stok</label>
                                <input 
                                    type="number" 
                                    id="stock" 
                                    name="stock" 
                                    class="block w-full mt-1 bg-gray-50 text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                    required>
                            </div>

                            <div>
                                <label for="stock_min" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Stok Minimal</label>
                                <input 
                                    type="number" 
                                    id="stock_min" 
                                    name="stock_min" 
                                    class="block w-full mt-1 bg-gray-50 text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                    required>
                            </div>
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
