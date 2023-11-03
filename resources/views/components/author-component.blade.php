<div class="modal top fade" id="author" tabindex="-1" aria-labelledby="browseLabel" aria-hidden="true"
    data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="browseLabel">Authors</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group-light flex-wrap">
                    @foreach ($authors as $author)
                        <li class="list-group-item px-2 border-0"><a
                                href="/search-books/?author={{ $author->username }}  {{ request('search') ? '&search=' . request('search') : '' }}">{{ $author->name }}</a>
                        </li> 
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
{{-- {{ request('genres') ? '&genres=' . request('genres') : '' }} --}}
