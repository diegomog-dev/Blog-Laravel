<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- @php
                $type = 'info';
            @endphp

            <x-alert2 :type="$type" id="alerta" class="mb-4">
                <x-slot name="title">
                    Este es el título de prueba desde Slot
                </x-slot>
                <p>Este es un texto de prueba</p>
            </x-alert2>
            <p>Hola Mundo</p> --}}

            <x-jet-welcome/>
        </div>
    </div>
</x-app-layout>
