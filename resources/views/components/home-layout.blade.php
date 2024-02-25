<x-layout>
    <div class="my-body">
        <x-nav />
        <x-sidebar />
        <div class="main px-[2rem] bg-gray-100">{{ $slot }}</div>
    </div>

    {{-- <x-author-component /> --}}
    <x-favourite />
    {{-- <x-browse /> --}}

</x-layout>
