<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('New Budget Application') }}
        </h2>
    </x-slot>
    
    @livewire('items', ['app_id' => 'N/A'])
</x-app-layout>
