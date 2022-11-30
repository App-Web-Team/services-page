<style>
    /* styling navbar */
    .navbar {
        background-color: transparent;
        /* position: absolute; */
    }

    .navbar-brand {
        padding: 0;
        margin: 0;
        height: 100px;
        width: 100px;
    }


    .nav-link {
        color: var(--white-color) !important;
    }

    .navbar a:hover,
    .pw-active {
        color: #ee1c25 !important;
        text-decoration: underline #ee1c25 5px;
    }

    .navbar a:active {
        color: #ee1c25 !important;
        text-decoration: underline #ee1c25 5px;
    }


    .container-height {
        height: 100%;
    }

    /* responsive social media icons */
    .sm-icons {
        flex-direction: row;
    }

    @media only screen and (max-width: 1000px) {
        .sm-icons {
            /* padding-right: 1em; */
            display: flex;
            justify-content: center;
        }

        .sm-icons i {
            padding: 10px;
        }
    }

    nav {
        position: fixed;
        transition: background-color 0.4s ease-out;
    }

    nav.scroll {
        background-color: var(--primary-color);
    }

    .dropdown-menu {
        background-color: var(--primary-color);
        padding: 0 .8rem;
        margin-top: 0;
    }

    .dropdown-item {
        color: #fff;
        padding: 0 0;
        padding-top: 1rem;
    }

    .dropdown-item:hover {
        background-color: var(--primary-color);
    }

    .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0; 
    }
</style>

<!-- navbar section-->
<nav class="navbar navbar-expand-lg navbar-dark">
    <!-- logo -->
    <a href="#"><img class="navbar-brand" src="assets/images/pondy_world_white_logo.svg" alt=""></a>
    <!-- toggle button for mobile nav -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- navbar links -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto nav-fill w-50">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#benefits">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#team-section">Brands</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link pw-active" href="#events-section">Services</a>
            </li> -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle pw-active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                </a>
                <div class="dropdown-menu text-center text-lg-left" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Personal Branding</a>
                    <a class="dropdown-item" href="#">Political Branding</a>
                    <a class="dropdown-item" href="#">Business Consultant</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#join-section">Career</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ReachUs</a>
            </li>
        </ul>
        <!-- social media links -->
        <ul class="navbar-nav sm-icons">
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-instagram"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
    </div>
</nav>