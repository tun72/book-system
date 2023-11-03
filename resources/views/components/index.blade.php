<x-layout>
    
    <div class="progress"></div>
    <div class="my-body">
        <x-sidebar />
        <x-nav />
    </div>
    <div class="content">
        <x-trend-component />
        <div class="books mb-5">
            <x-recommended-component />
            <x-top-rated-component />
        </div>
        <x-new-book-component />
    </div>

</x-layout>
