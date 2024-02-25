<x-layout>
    <style>
        .main {
            padding: 2rem;
        }
    </style>
    <div class="my-body">
        <x-author-nav />
        <x-author-sidenav />
        <div class="main bg-gray-100">
            {{ $slot }}
        </div>
    </div>

</x-layout>
