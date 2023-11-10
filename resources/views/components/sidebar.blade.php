<div class="slide-bar p-3 shadow">
    <h3 class="text-center text-dark mt-2">B<span class="text-primary">oo</span>k
    </h3>
    <div class="side-nav mx-auto">
        <ul>
            <p class="color-secondary fs-7">DISCOVER</p>
            <li><a href="/"><i class="fas fa-th-large"></i>Home</a></li>
            <li><a href="#" data-mdb-toggle="modal" data-mdb-target="#browse"><i class="fas fa-search"></i>Browse</a>
            </li>
            @auth
                <li><a href="/user/{{ auth()->user()->username }}/purchased"><i class="fas fa-heart"></i>Purchased Book</a>
            @endauth
            </li>
        </ul>

        <ul>
            <p class="color-secondary fs-7">LIBRARY</p>
            <li><a href=""><i class="fas fa-list-alt"></i>Readlists</a></li>
            <li><a href="#" data-mdb-toggle="modal" data-mdb-target="#author"><i
                        class="fas fa-search"></i>Author</a></li>
            </li>
            <li><a href="#" data-mdb-toggle="modal" data-mdb-target="#favourite"><i
                        class="fas fa-star"></i>Favourites</a></li>
        </ul>

    </div>
 
    @auth
       @if (auth()->user()->role == 2)
          <a href="/book/new-book" class="btn btn-primary">+ New Book</a>
       @else
       <a href="#" class="btn btn-primary">read new book</a>
       @endif
    @endauth
    <a href="#" class="small">Copyright © 2023 ttm</a>
    {{-- <div></div> --}}
</div>
