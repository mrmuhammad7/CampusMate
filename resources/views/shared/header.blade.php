<script>
    document.body.classList.add('with-navbar');
</script>
<nav class="navbar navbar-expand-lg fixed-top" style="background: linear-gradient(135deg, #0d6efd 0%, #6610f2 100%);"
    data-bs-theme="dark">
    <div class="container-fluid">
        <a href="#" style="padding-inline: 10px ;"><img src="{{ asset('resources/img/logo.png') }}" alt="" height="40px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Doctors
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Add</a></li>
                        <li><a class="dropdown-item" href="#">list</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Students
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Add</a></li>
                        <li><a class="dropdown-item" href="">list</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Courses
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Add</a></li>
                        <li><a class="dropdown-item" href="">list</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Employees
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Add</a></li>
                        <li><a class="dropdown-item" href="">list</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>