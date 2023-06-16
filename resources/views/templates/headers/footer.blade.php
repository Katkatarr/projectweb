<footer class="navbar navbar-expand-lg fixed-bottom navbar-dark" style="background-color: #31308B; color: white;" aria-label="Footer navigation">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">Harpas</a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ms-auto mb-6 mb-lg-0" style="margin-right: 40px">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/about') }}">AboutUs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/event') }}">Event</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/services') }}">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/contact') }}">ContactUs</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
