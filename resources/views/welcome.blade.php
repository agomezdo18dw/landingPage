<!DOCTYPE html>
<html lang="en">

<head>
    <title>Esturi</title>
    <link rel="shortcut icon" href="images/logo.png" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Muli:300,400,700,900') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('/css/aos.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">

    <link rel="stylesheet"
        href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/botones.css') }}">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto w-25">
                        <a href="#home-section">
                            <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                            Esturi
                        </a>
                    </div>

                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                                <li><a href="#home-section" class="nav-link">Inicio </a></li>
                                <li><a href="#programs-section" class="nav-link">¿Que es Esturi?</a></li>
                                <li><a href="#courses-section" class="nav-link">¿Quienes somos?</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="ml-auto w-25">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul
                                class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                                <li class="cta"><a href="#contact-section" class="nav-link"><span>Contactanos</span></a>
                                </li>
                            </ul>
                        </nav>
                        <a href="#"
                            class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right">
                            <span class="icon-menu h3"></span>
                        </a>
                    </div>
                </div>
            </div>

        </header>

        <div class="intro-section" id="home-section">

            <div class="slide-1" style="background-image: url('images/background.jpg');"
                data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-4">
                                    <h1 data-aos="fade-up" data-aos-delay="100">Encuentra lugares interesantes cerca de
                                        ti.</h1>
                                    <p class="mb-4" data-aos="fade-up" data-aos-delay="200">Encuentra tus lugares
                                        favoritos de la ciudad en la que te encuentres.</p>
                                    <p data-aos="fade-up" data-aos-delay="300">
                                        <button type="button" class="btn btn-primary py-3 px-5 btn-pill"
                                            data-toggle="modal" data-target="#exampleModalCenter">
                                            Iniciar Sesion
                                        </button>
                                    </p>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Iniciar sesion
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Correo electronico</label>
                                                            <input type="email" class="form-control"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                placeholder="Correo electronico">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Contraseña</label>
                                                            <input type="password" class="form-control"
                                                                id="exampleInputPassword1" placeholder="Contraseña">
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Mantenerme iniciada la sesion</label>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Iniciar sesion</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                                    <form action="" method="post" class="form-box">
                                        <h3 class="h4 text-black mb-4">Registrate</h3>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Correo electronico">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Contraseña">
                                        </div>
                                        <div class="form-group mb-4">
                                            <input type="password" class="form-control"
                                                placeholder="Reescribe la contraseña">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-pill" value="Registrarse">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>





        <div class="site-section" id="programs-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                        <h2 class="section-title">¿Que es esturi?</h2>
                        <p>Somos una aplicacion diseñada para ayudarte a encontrar los lugares que mas te gustan en la
                            ciudad que te encuentres</p>
                    </div>
                </div>
                <div class="row mb-5 align-items-center">
                    <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/busqueda.png" alt="Image" height="400px">
                    </div>
                    <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-black mb-4">Busqueda</h2>
                        <p class="mb-4">Esturi te permite encontrar lugares de una ciudad o ciudades de una forma
                            intuitiva y facil de usar.</p>
                    </div>
                </div>

                <div class="row mb-5 align-items-center">
                    <div class="ml-5 col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/checklist.png" alt="Image" height="550px">
                    </div>
                    <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-black mb-4">Filtra</h2>
                        <p class="mb-4">Filtra las actividades que mas te interesen segun tus gustos.</p>
                    </div>
                </div>

                <div class="row mb-5 align-items-center">
                    <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/comentario.png" alt="Image" height="400px">
                    </div>
                    <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-black mb-4">Comentarios</h2>
                        <p class="mb-4">Comprueba el estado o el servicio de los establecimientos mediante comentarios
                            del resto de usuarios</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="site-section courses-title" id="courses-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                        <h2 class="section-title">¿Que es esturi?</h2>
                        <p class="text-white">Somos una aplicacion diseñada para ayudarte a encontrar los lugares que
                            mas te gustan en la ciudad que te encuentres</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section courses-entry-wrap" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="row">

                    <div class="owl-carousel col-12 nonloop-block-14">

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <img src="images/icono1.png" alt="Image" class="img-fluid">
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <h3>Adrián Gómez Domínguez</h3>
                                <p>Jefe de proyecto.</p>
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <img src="images/icono2.png" alt="Image" class="img-fluid">
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <h3>Aitor Ortiz de Zarate</h3>
                                <p>Programador.</p>
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <img src="images/icono3.png" alt="Image" class="img-fluid">
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <h3>Eneko Simon</h3>
                                <p>Diseñador grafico.</p>
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <img src="images/icono4.png" alt="Image" class="img-fluid">
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <h3>Carlos Andres</h3>
                                <p>Cojefe de proyecto.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row w-100 justify-content-center">
                        <button class="customPrevBtn btn btn-primary m-1">&#8592;</button>
                        <button class="customNextBtn btn btn-primary m-1 ml-4">&#8594;</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section bg-light" id="contact-section">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <h2 class="section-title mb-3">Contactanos</h2>
                        <p class="mb-5">!Si tienes cualquier duda haznoslo saber y te ayudaremos cuanto antes!</p>

                        <form method="post" data-aos="fade">
                            <div class="form-group row">
                                <div class="col-md-6 mb-3 mb-lg-0">
                                    <input type="text" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Apellido">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Motivo">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea class="form-control" id="" cols="30" rows="10"
                                        placeholder="Escribe aqui tu mensaje."></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill"
                                        value="Enviar mensaje">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer-section bg-white">
            <div class="container">
                <div class="row w-100 justify-content-center">
                    <a href="https://twitter.com" class="icon-button twitter"><i
                            class="icon-twitter"></i><span></span></a>
                    <a href="https://facebook.com" class="icon-button facebook"><i
                            class="icon-facebook"></i><span></span></a>
                    <a href="https://instagram.com" class="icon-button instagram"><i
                            class="icon-instagram"></i><span></span></a>
                    <a href="https://github.com" class="icon-button github"><i class="icon-github"></i><span></span></a>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | Esturi
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>



    </div> <!-- .site-wrap -->

    <script src="{{ URL::asset('/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery-ui.js') }}"></script>
    <script src="{{ URL::asset('/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ URL::asset('/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ URL::asset('/js/aos.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.sticky.js') }}"></script>


    <script src="{{ URL::asset('/js/main.js') }}"></script>

</body>

</html>