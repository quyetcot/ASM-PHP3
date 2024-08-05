<div class="container-fluid d-none d-lg-block">
    <div class="row align-items-center bg-dark px-lg-5">
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-sm bg-dark p-0">
                <ul class="navbar-nav ml-n2">
                    <li class="nav-item border-right border-secondary">
                        <a class="nav-link text-body small" href="#">Thứ 3, 16 tháng 7, 2024</a>
                    </li>
                    <li class="nav-item border-right border-secondary">
                        <a class="nav-link text-body small" href="#">Quảng cáo</a>
                    </li>
                    <li class="nav-item border-right border-secondary">
                        <a class="nav-link text-body small" href="#">Liên hệ</a>
                    </li>
                    <li class="nav-item dropdown">
                        @auth
                            <a class="nav-link dropdown-toggle text-body small" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Xin Chào, {{ auth()->user()->name }}
                            </a>
                            <div class="dropdown-menu btn btn-secondary" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Đăng xuất
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        @else
                            <a class="nav-link text-body small" href="{{ route('login') }}">Đăng nhập</a>
                        @endauth
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-3 text-right d-none d-md-block">
            <nav class="navbar navbar-expand-sm bg-dark p-0">
                <ul class="navbar-nav ml-auto mr-n2">
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#"><small class="fab fa-twitter"></small></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#"><small class="fab fa-facebook-f"></small></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#"><small class="fab fa-linkedin-in"></small></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#"><small class="fab fa-instagram"></small></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#"><small class="fab fa-google-plus-g"></small></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#"><small class="fab fa-youtube"></small></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row align-items-center bg-white py-3 px-lg-5">
        <div class="col-lg-4">
            <a href="index.html" class="navbar-brand p-0 d-none d-lg-block">
                <h1 class="m-0 display-4 text-uppercase text-primary">TIN TỨC<span class="text-secondary font-weight-normal"> 24H</span></h1>
            </a>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
            <a href="https://htmlcodex.com"><img class="img-fluid" src="img/ads-728x90.png" alt=""></a>
        </div>
    </div>
</div>