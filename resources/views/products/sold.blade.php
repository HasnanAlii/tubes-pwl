<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produk Terjual') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold">Produk: {{ $product->name }}</h3>
                    <p class="text-sm">Harga Satuan: RP. {{ $product->price }}</p>
                    <p class="text-sm">Stok Tersedia: {{ $product->stock }}</p>

                    <form action="{{ route('cashier.products.sold', $product->id) }}" method="GET">
                    
                        @csrf
                        @method('GET')
                        <div class="mt-4">
                            <label for="quantity" class="block text-sm font-medium">Jumlah yang Terjual:</label>
                            <input type="number" name="quantity" id="quantity" class="mt-1 block w-full text-black border-gray-300 rounded-md shadow-sm" required min="1" max="{{ $product->stock }}" oninput="calculateTotal()">
                        </div>
                        
                        <div class="mt-4 text-center">
                            <label class="block text-sm font-medium">Total Harga:</label>
                            <p id="totalPrice" class="text-lg font-bold">RP. 0 </p>
                        </div>

                        <div class="mt-6 flex justify-center ">
                            <x-succes-button type="submit">Terjual</x-succes-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        function calculateTotal() {
            const quantity = document.getElementById('quantity').value;
            const price = {{ $product->price }};
            const totalPrice = quantity * price;
            document.getElementById('totalPrice').innerText = `RP. ${totalPrice.toLocaleString('id-ID')}.000`;
        }
    </script>
</x-app-layout>
