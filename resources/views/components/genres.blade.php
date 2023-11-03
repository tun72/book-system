<div class="modal top fade" id="browse" tabindex="-1" aria-labelledby="browseLabel" aria-hidden="true"
    data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="browseLabel">Genres</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group-light flex-wrap">

                    @foreach ($genres as $genre)
                        <li class="list-group-item px-2 border-0"><a
                                href="/search-books/?genres={{ $genre->slug }} {{ request('author') ? '&author=' . request('author') : '' }} {{ request('search') ? '&search=' . request('search') : '' }}">{{ $genre->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</div>
