<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container d-flex align-items-center justify-content-between">
        {{-- <!-- Logo -->
        <a class="navbar-brand text-white" href="/">Perfums</a> --}}

        <!-- Toggle button for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Content -->
        <div class="collapse navbar-collapse" id="navbarScroll">
            <!-- Left menu -->
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">TRANG CHỦ</a>
                </li>
                @foreach ($danhmuc as $dm)
                    @if (is_null($dm->danh_muc_cha_id))
                        <!-- Kiểm tra danh mục cha -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ $dm->ten_danh_muc }}
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($dm->danh_mucs as $subDm)
                                    <li><a class="dropdown-item" href="#">{{ $subDm->ten_danh_muc }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('/gioithieu') }}">GIỚI THIỆU</a>
                </li>
            </ul>

            <!-- Search form -->
            <form method="GET" class="d-flex align-items-center" role="search" action="{{ route('search') }}">
                <input class="form-control me-2" type="search" placeholder="Tìm kiếm ..."
                    value="{{ request('search') }}" name="search">
                <button class="btn btn-secondary" type="submit">Tìm</button>
            </form>
        </div>
        

        <li class="nav-item navbar-nav ms-auto custom-navbar d-flex align-items-center me-4 hover:bg-light">
            <a class="nav-link text-secondary" href="{{ route('giohang.index') }}">
                <i class="bi bi-cart-fill" style="font-size: 1.5rem;"></i>
                Giỏ hàng của bạn
            </a>
        </li>
        
        
        <!-- Right menu -->
        <ul class="navbar-nav custom-navbar d-flex align-items-center">
            @guest
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ route('register') }}">
                            <i class="bi bi-person-plus-fill"></i> Đăng ký
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-door-open-fill"></i> Đăng nhập
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <form class="px-4 py-3" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Mật khẩu</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary form-control">Đăng nhập</button>
                                </form>
                                <div class="text-center">
                                    <a href="{{ route('password.request') }}" class="btn btn-link">Quên mật khẩu?</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Trang cá nhân</a></li>
                        @if (Auth::user()->usertype == 'admin')
                            <li><a class="dropdown-item" href="#">Quản lý</a></li>
                        @endif
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Đăng xuất
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
        </ul>
    </div>
</nav>
