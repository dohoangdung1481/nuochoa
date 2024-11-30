<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="/">ChiDan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">TRANG CHỦ</a>
                </li>
                @foreach($danhmuc as $dm)
    @if(is_null($dm->danh_muc_cha_id)) <!-- Kiểm tra danh mục cha -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{$dm->ten_danh_muc}}
            </a>
            <ul class="dropdown-menu">
                <!-- Hiển thị danh mục con -->
                @foreach($dm->danh_mucs as $subDm)
                    <li><a class="dropdown-item" href="#">{{$subDm->ten_danh_muc}}</a></li>
                @endforeach
            </ul>
        </li>
    @endif
@endforeach


                <li class="nav-item">
                    <a class="nav-link" href="#">GIỚI THIỆU</a>
                </li>
            </ul>
            <form method="GET" class="d-flex" role="search" action="{{ route('search') }}">
               
                <input class="form-control me-2" type="search" placeholder="Tìm kiếm ..." aria-label="" value="{{request('search')}}" name="search">
                <button class="btn btn btn-secondary" type="submit">Tìm</button>
            </form>
        </div>

        <ul class="navbar-nav ms-auto custom-navbar ">
            <div class="btn-group notificationNav nav-item">
                <button class="btn searchOffcanvasnav-link" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i
                        class="bi bi-search fw-bold text-white"></i></button>
            </div>

            @guest
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ route('register') }}"><i class="bi bi-person-plus-fill"></i>
                            Đăng ký</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><i class="bi bi-door-open-fill"></i> Đăng nhập</a>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-door-open-fill"></i> Đăng nhập
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg" aria-labelledby="navbarDropdown"
                            style="width: 300px;">
                            <li>
                                <form class="px-4 py-3" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required
                                            autocomplete="username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Mật khẩu</label>
                                        <input type="password" class="form-control" id="password" name="password" required
                                            autocomplete="current-password">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                                        <label class="form-check-label" for="remember_me">Ghi nhớ tài khoản</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary form-control">Đăng nhập</button>
                                </form>
                                <div class="text-center">
                                    <a href="{{ route('password.request') }}"
                                        class="btn btn-link link-underline link-underline-opacity-0 link-opacity-50-hover link-light">Quên
                                        mật khẩu?</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endif
            @else
                <div class="btn-group notificationNav nav-item">
                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-bell-fill"></i>

                        <span id="notificationCount" class="badge badge-light"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" id="notificationDropdownMenu"
                        style="max-height: 300px; overflow-y: auto; width: 300px">
                        <div class="d-flex mb-3">
                            <div class="p-2">
                                <h5>Thông báo</h5>
                            </div>
                            <div class="ms-auto p-2">
                                <a class="dropdown-item-noti text-end btn" href="#"
                                    onclick="event.preventDefault(); document.getElementById('mark-all-read-form').submit();">
                                    <i class="bi bi-trash3-fill"></i>
                                </a>
                                <a class="dropdown-item-noti text-end btn" href="#" aria-label="Mark all as read"
                                    onclick="event.preventDefault(); document.getElementById('mark-all-read-form').submit();">
                                    <i class="bi bi-check2-all"></i>
                                </a>
                            </div>

                        </div>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form id="mark-all-read-form" action="" method="POST" style="display: none;">
                                @csrf
                                @method('PUT')
                            </form>
                        </li>
                        <li><a class="dropdown-item text-center" href="">Hiển thị tất cả thông báo</a></li>
                    </ul>
                </div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if (is_string(Auth::user()->image_url))
                            <img src="" style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"
                                alt="" class="me-1">
                        @else
                            <img src="" style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"
                                alt="" class="me-1">
                        @endif

                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-start dropdown-menu-lg" aria-labelledby="navbarDropdown"
                        style="width: 210px;">
                        <li><a class="dropdown-item mx-auto p-2"
                                href="{{ route('profile.edit', ['username' => Auth::user()->username]) }}"><i
                                    class="bi bi-person-lines-fill"></i> Trang cá nhân</a></li>
                        @if (Auth::user()->usertype == 'admin')
                            <li><a class="dropdown-item mx-auto p-2" href=""><i
                                        class="bi bi-database-fill-gear"></i> Quản lý</a></li>
                        @endif
                        <li>
                            <a class="dropdown-item logout-button p-2" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-left"></i> Đăng xuất
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </a>
                        </li>
                    </ul>
                </li>
            @endguest
        </ul>
    </div>
</nav>
