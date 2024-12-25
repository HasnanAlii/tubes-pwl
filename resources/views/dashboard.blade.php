{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (Auth::user()->cabang)
                        {{ __("Selamat Datang, " . Auth::user()->name . "! Di Minimarket Pak Jayusman" . Auth::user()->cabang->name) }}
                    @else
                        {{ __("Selamat Datang, " . Auth::user()->name . "! Cabang Anda Tidak Ditemukan.") }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @hasallroles('kasir')
                        {{ __("Selamat Datang, Di Minimarket Pak Jayusman " . Auth::user()->cabang->name) }}
                        <div class="p-6 text-gray-900 dark:text-gray-100 text-3xl">
                            {{ __("Mr/Mrs " . Auth::user()->name . "!") }}
                        </div>
                        @endhasrole
                        @hasallroles('supervisor')
                        {{ __("Selamat Datang, Di Minimarket Pak Jayusman " . Auth::user()->cabang->name) }}
                        <div class="p-6 text-gray-900 dark:text-gray-100 text-3xl">
                            {{ __("Mr/Mrs " . Auth::user()->name . "!") }}
                        </div>
                        @endhasrole
                        @hasallroles('pegawai-gudang')
                        {{ __("Selamat Datang, Di Minimarket Pak Jayusman " . Auth::user()->cabang->name) }}
                        <div class="p-6 text-gray-900 dark:text-gray-100 text-3xl">
                            {{ __("Mr/Mrs " . Auth::user()->name . "!") }}
                        </div>
                        @endhasrole
                        @hasallroles('manager')
                        {{ __("Selamat Datang, Di Minimarket Pak Jayusman " . Auth::user()->cabang->name) }}
                        <div class="p-6 text-gray-900 dark:text-gray-100 text-3xl">
                            {{ __("Mr/Mrs " . Auth::user()->name . "!") }}
                        </div>
                        @endhasrole
                        @hasallroles('owner')
                        {{ __("Selamat Datang, Yang Terhormat Pak " . Auth::user()->name . "") }}
                        @endhasrole
             
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
