<div class="slide-bar p-3 shadow">
    <h3>Dashboard</h3>
    <div>
        <img src="{{ auth()->user()->imageUrl }}" alt="" class="rounded-circle" width="80" height="80">
        <p>{{ auth()->user()->name }}</p>
    </div>
    <nav>
        <ul>
            <li>
                <a href="/">home</a>
            </li>
            <li>
                <a href="">your creation</a>
            </li>
            <li>
                <a href="">add new books</a>
            </li>
            <li>
                <a href="">readers</a>
            </li>
            <li>
                <a href="">user network</a>
            </li>
            <li>
                <a href="">trading coin</a>
            </li>
        </ul>
    </nav>
    {{-- <div></div> --}}
    <div>
        <button class="btn btn-primary">Logout </button>
    </div>
    {{-- <div></div> --}}
    <a href="#" class="small">Copyright © 2023 ttm</a>
</div>
