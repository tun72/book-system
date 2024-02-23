<x-layout>
    <div class="my-body">
        <x-nav />
        <x-sidebar />
        <div class="main home">{{ $slot }}</div>
    </div>

    {{-- <x-author-component /> --}}
    <x-favourite />
    {{-- <x-browse /> --}}

</x-layout>
