<x-home-layout>
    @php
        $slug = $chapter->slug;
    @endphp


    <div class="flex gap-4">
        <ul class="col-4">
            @foreach ($book->chapters as $chap)
                <li class="mb-2 col-10 p-3 shadow-4"><a class="{{ $slug == $chap->slug ? 'bg-danger' : '' }}"
                        href="/book/chapter/{{ $chap->slug }}/read">
                        {{ $chap->title }}
                    </a></li>
            @endforeach
        </ul>
        <div class="col-6 p-3 shadow">
            <h4>{{ $chapter->title }}</h4>
            <p class="">
                {!! $chapter->story !!}
            </p>
        </div>
    </div>



</x-home-layout>
