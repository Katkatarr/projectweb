<nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color: #ffffff; color: black; height: 100px;" aria-label="Main navigation">
    <div class="container-fluid" style="margin-left: 80px">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="./assets/img/logoharpas.png" alt="Logo" style="height: 80px; width: auto;">
        </a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ms-auto mb-6 mb-lg-0" style="margin-right: 80px">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/home') }}" style="color: black; font-size: 24px;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/about') }}" style="color: black; font-size: 24px;">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/event') }}" style="color: black; font-size: 24px;">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/services') }}" style="color: black; font-size: 24px;">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/ContactUs') }}" style="color: black; font-size: 24px;">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
