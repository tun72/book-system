<x-home-layout>
    @vite('resources/js/readlist.js')
    <x-genres-component />
    <x-trend-component />
    <div class="books mb-10">
        <x-recommended-component />
        <x-top-rated-component />
    </div>
    <x-new-book-component />

</x-home-layout>
