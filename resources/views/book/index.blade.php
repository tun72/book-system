<x-home-layout>
    @vite('resources/js/readlist.js')
    @vite('resources/js/myslider.js')
    <x-genres-component />
    <x-trend-component />
    <div class="books mb-10">
        <x-recommended-component />
        <x-top-rated-component />
    </div>
    <x-new-book-component />

    @auth

        @if (auth()->user()->role !== 1)
            <x-user-choise />
        @endif

    @endauth

</x-home-layout>
