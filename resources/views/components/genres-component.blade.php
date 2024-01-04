<ul class="flex flex-row gap-3 flex-wrap">
    @foreach ($genres as $genre)
        <li class="bg-brand-100 text-brand-800 text-xs font-medium  rounded w-fit p-1"><a 
                href="/search-books/?genres={{ $genre->slug }} {{ request('author') ? '&author=' . request('author') : '' }} {{ request('search') ? '&search=' . request('search') : '' }}">{{ $genre->name }}</a>
        </li>
    @endforeach
    </ul>