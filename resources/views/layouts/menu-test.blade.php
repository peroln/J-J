<nav class="navbar navbar-expand-md gradient-custom fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand ms-md-5 mt-md-3" href="/">
            <img src="{{asset('/images/lawnmower.png')}}" alt="J&J" class="mx-auto">
            J<span class="middle-letter">&</span>J
            <p>English Gardener</p>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Переключить навигацию">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end canvas-background" tabindex="-1" id="offcanvasDarkNavbar"
             aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Закрыть"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item p-xl-3 p-xxl-5">
                        <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item p-xl-3 p-xxl-5">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item p-xl-3 p-xxl-5">
                        <a class="nav-link" href="{{route('services')}}">Services</a>
                    </li>
                    <li class="nav-item p-xl-3 p-xxl-5">
                        <a class="nav-link" href="{{route('contact-us')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

