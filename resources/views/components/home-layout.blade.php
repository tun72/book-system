<x-layout>
    
    <div class="progress"></div>
    <div class="my-body">
        <x-sidebar />
        <x-nav />
    </div>
    <div class="content">
        {{ $slot }}
    </div>

</x-layout>
