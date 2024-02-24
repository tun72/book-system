<x-home-layout>
    @vite('resources/js/readlist.js')
    <x-genres-component />
    <x-trend-component />
    <div class="books mb-10">
        <x-recommended-component />
        <x-top-rated-component />
    </div>
    <x-new-book-component />

    @auth

        @if (auth()->user()->role === 0)
            <x-user-choise />
        @endif

    @endauth

</x-home-layout>
