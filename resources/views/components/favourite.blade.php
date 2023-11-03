<div class="modal top fade" id="favourite" tabindex="-1" aria-labelledby="browseLabel" aria-hidden="true"
    data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="browseLabel">Favourites</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group-light flex-wrap">

                    <div class="row">
                        @foreach ($books as $book)
                            <div class="col-3">
                                <img src="{{ $book->image }}" alt="" class="" width="100"
                                    height="100">
                                <p>{{ $book->title }}</p>
                            </div>
                        @endforeach
                    </div>
                </ul>
            </div>

        </div>
    </div>
</div>
