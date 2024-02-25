<x-layout>
    <div class="my-body">
        <x-nav />
        <x-user-slidebar />
        <div class="main bg-gray-100 p-[2rem]">{{ $slot }}</div>
    </div>
</x-layout>