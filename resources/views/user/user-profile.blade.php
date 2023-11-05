<x-layout>
    <div class="my-body">
        <x-sidebar />
        <x-nav />
    </div>
    <div class="content">
        <section class="">
            <div class="mx-auto col-10">
                <div class="row">
                    <div class="col-10">
                        <nav aria-label="breadcrumb" class="bg-light card p-3 mb-4">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-4">
                            <div class="card-body text-center p-2">
                                <img src="{{ auth()->user()->imageUrl }}" alt="avatar"
                                    class="rounded-circle img-fluid" style="width: 120px; height: 120px">
                                <h5 class="mt-3 mb-2">{{ auth()->user()->name }}</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ auth()->user()->name }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">User Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ auth()->user()->username }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ auth()->user()->email }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">+{{ auth()->user()->phoneNumber }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Status</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ auth()->user()->user_plan != 0 ? 'Premium' : 'Free' }}
                                            User</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Your Creation</p>
                                    </div>
                                    <div class="col-sm-9">
                                        @if (auth()->user()->books)
                                            <p class="text-muted mb-0">{{ count(auth()->user()->books) }}</p>
                                        @else
                                            <p class="text-muted mb-0">-</p>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">

                        {{-- @if (auth()->user()->role === 0 && auth()->user()->user_plan === 0) --}}
                            <div class="card p-4 mb-2">
                                <div class="d-flex justify-content-center flex-column align-items-center">
                                    <span class="mb-2 text-info fs-5"><i class="fa-brands fa-gg-circle text-primary"></i> {{auth()->user()->ggcoin }} ggcoin</span>
                                    <a type="button" class="btn btn-info" href="/pricing-section">Buy ggcoins</a>
                                </div>
                            </div>
                        {{-- @endif --}}

                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-1">
                                        <p class="mb-0"><i class="fa-solid fa-gear"></i></p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Account setting</p>
                                    </div>
                                    <div class="col-sm-2">
                                        <a class="text-muted mb-0" href="/user/update-user"><i
                                                class="fa-solid fa-circle-right"></i></a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-1">
                                        <p class="mb-0"><i class="fas fa-feather-alt"></i></p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Become Author</p>
                                    </div>
                                    <div class="col-sm-2">
                                        <a class="text-muted mb-0" href="#"><i
                                                class="fa-solid fa-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-1">
                                        <p class="mb-0"><i class="fas fa-question-circle"></i></p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Help</p>
                                    </div>
                                    <div class="col-sm-2">
                                        <a class="text-muted mb-0" href="#"><i
                                                class="fa-solid fa-circle-right"></i></a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-1">
                                        <p class="mb-0"><i class="fas fa-phone-alt"></i></p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Contact Us</p>
                                    </div>
                                    <div class="col-sm-2">
                                        <a class="text-muted mb-0" href="#"><i
                                                class="fa-solid fa-circle-right"></i></a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-1">
                                        <p class="mb-0"><i class="fas fa-info-circle"></i></p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">About Us</p>
                                    </div>
                                    <div class="col-sm-2">
                                        <a class="text-muted mb-0" href="#"><i
                                                class="fa-solid fa-circle-right"></i></a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-1">
                                        <p class="mb-0"><i class="fas fa-shield-alt"></i></p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Privacy Policy</p>
                                    </div>
                                    <div class="col-sm-2">
                                        <a class="text-muted mb-0" href="#"><i
                                                class="fa-solid fa-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-1">
                                        <p class="mb-0"><i class="fas fa-sign-out-alt"></i></p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Logout</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </section>
    </div>
</x-layout>
