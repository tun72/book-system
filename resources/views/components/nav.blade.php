<!-- Navbar -->
<header class="header mb-1">
    <nav class="col-12 nav">
        {{-- <h3 class="mt-2">Book</h3> --}}

        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <form action="/search-books/" method="GET" class="input-group rounded">
                {{-- @if (request('genres'))
                    <input type="hidden" name="genres" value="{{ request('genres') }}" />
                @endif

                @if (request('search'))
                    <input type="hidden" name="search" value="{{ request('search') }}" />
                @endif --}}

                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" name="search" />
                <button class="input-group-text border-0 text-primary" id="search-addon">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>


        <div class="col-lg-3 col-md-5 col-sm-12 col-12">

            @if (!auth()->user())
                <div class="d-flex align-items-center">
                    <a type="button" class="btn btn-outline-primary px-3 me-2" href="/login">
                        Login
                    </a>
                    <a type="button" class="btn btn-primary me-3" href="/register">
                        Sign up for free
                    </a>
                </div>
            @else
                <ul class="nav-list">
                    <li>
                        <a href="#" class="fs-4 text-dark"><i class="fas fa-bookmark"></i></a>
                    </li>
                    <li><a href="#" class="fs-4 text-dark"><i class="fas fa-bell"></i></a></li>
                    <li>
                        <div class="d-flex align-items-center gap-3 user-div">
                            <img src="{{ auth()->user()->imageUrl }}" alt="" width="49px" height="49px"
                                class="rounded-circle">
                            <div>
                                <a href="#" class="text-dark toggle-btn">&#x2BC6;</a>
                                <ul class="drop-down-form">
                                    <li><a href="#" class="text-dark"><i
                                                class="fa-brands fa-gg-circle text-primary fs-5 me-1"></i>
                                            <span>{{ auth()->user()->ggcoin}}</span></a></li>

                                    <li><a href="/user-profile/{{ auth()->user()->username }}"
                                            class="text-dark">Profile</a></li>
                                    @if (auth()->user()->role === 1)
                                        <li><a href="#" class="text-dark">Dashboard</a></li>
                                    @endif

                                    @if (auth()->user()->role === 2)
                                        <li><a href="/author/dashboard" class="text-dark">Work Place</a></li>
                                    @endif

                                    <li>
                                        <form action="/logout" method="POST" class="col-10">
                                            @csrf
                                            <button type="submit" class="btn btn-dark px-3 me-2 col-10">
                                                Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            @endif
        </div>
    </nav>
</header>
