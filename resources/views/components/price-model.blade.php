<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal top fade" id="price" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog  ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buy Book</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group-light"> 
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ $book-> image }}" alt=""  width="150px" height="200px"/>
                       
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        title
                        <span class="badge badge-primary rounded-pill fs-6">{{ $book->title }}</span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        ggcoin
                        <span class="badge badge-primary rounded-pill fs-7"><i class="fa-brands fa-gg-circle text-primary"></i>{{ $book->ggcoin }}</span>
                    </li>
                </ul>

            </div>
            <form class="modal-footer" action="/books/{{$book->slug}}/buy" method="POST">
                @csrf
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">Buy</button>
            </form>
        </div>
    </div>
</div>
