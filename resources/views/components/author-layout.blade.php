<x-layout>
    <div class="my-body">
        <x-author-nav />
        <x-author-sidenav />
        <div class="main">
            {{ $slot }}
        </div>
    </div>

</x-layout>
