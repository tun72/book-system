<x-layout>
    <div class="my-body">
        <x-nav />
        <x-user-slidebar />
        <div class="main">{{ $slot }}</div>
    </div>
</x-layout>