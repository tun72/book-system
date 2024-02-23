<div>
    <div class="slide-bar slide-bar-1  bg-brand-50">
        <div class="side-nav flex flex-col">
            <div class="w-full mb-2 pl-3">
                <h4 class="text-brand-300 px-[1.3rem] py-4 text-sm">Setting</h4>
                <ul>
                    <li><a href="/"><i class="fas fa-th-large"></i>Home</a></li>
                    <li><a href="/user-profile/{{ auth()->user()->username }}"><i class="fas fa-user"></i>Profile</a></li>
                    {{-- <li><a href="#" data-mdb-toggle="modal" data-mdb-target="#browse"><i
                                class="fas fa-search"></i>Edit Profile</a>
                    </li> --}}
                    <li><a href="/user/notification"><i class="fas fa-bell"></i>Notification</a></li>
                    <li><a href="/user/history"><i class="fas fa-history"></i>History </a></li>
                    <li><a href="#"><i class="fas fa-shield-alt"></i>Privacy and policy </a></li>
                </ul>

            </div>

        </div>

    </div>
    <div class="slide-bar slide-bar-2 slide-bar-active slide-bar-hide bg-brand-50 mt-1">
        <div class="side-nav flex flex-col">

            <ul class="px-1">
                <li><a href="/"><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a href="#" data-mdb-toggle="modal" data-mdb-target="#browse"><i
                            class="fas fa-search"></i>Browse</a>
                </li>
            </ul>

        </div>
    </div>
</div>
