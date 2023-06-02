<?php
  $mysqli = mysqli_connect("localhost", "root", "", "bd_agenciaViaje");
  session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>NuestraPagina -> Guia Turistica ✈</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="Views/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="Views/css/animate.css">

    <link rel="stylesheet" href="Views/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Views/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="Views/css/magnific-popup.css">

    <link rel="stylesheet" href="Views/css/aos.css">

    <link rel="stylesheet" href="Views/css/ionicons.min.css">

    <link rel="stylesheet" href="Views/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="Views/css/jquery.timepicker.css">


    <link rel="stylesheet" href="Views/css/flaticon.css">
    <link rel="stylesheet" href="Views/css/icomoon.css">
    <link rel="stylesheet" href="Views/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">NuestraPagina -> Guia turistica </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#index" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">Acerca de</a></li>
                    <li class="nav-item"><a href="#places" class="nav-link">Destinos</a></li>
                    <li class="nav-item"><a href="#hotels" class="nav-link">Hoteles</a></li>
                    <li class="nav-item"><a href="#Restaurant" class="nav-link">Restaurantes</a></li>
                    <li class="nav-item"><a href="#blog" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contacto</a></li>
                    <li class="nav-item"><a  type="Button" href="Controller/login.php" class="nav-link btn btn-primary">Iniciar Sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight" id="index" style= "background-image: url(Views/images/bg_1.jpg);" height:10px;>
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate mb-5 pb-5 text-center text-md-left"
                    data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.7 }">Descubre <br>Un
                        nuevo Lugar en Panajachel 🌎</h1>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Encuentre excelentes lugares para
                        alojarse, comer, comprar o visitar hermosos paisajes</p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section justify-content-end ftco-search">
        <div class="container-wrap ml-auto">
            <div class="row no-gutters">
                <div class="col-md-12 nav-link-wrap">
                    <div class="nav nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab"
                            aria-controls="v-pills-1" aria-selected="true">Vuelo ✈</a>

                        <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                            aria-controls="v-pills-2" aria-selected="false">Hotel 🏢</a>

                        <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
                            aria-controls="v-pills-3" aria-selected="false">Alquiler de autos 🚗</a>
                    </div>
                </div>
                <div class="col-md-12 tab-wrap ">

                    <div class="tab-content p-4 px-5" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                            aria-labelledby="v-pills-nextgen-tab">
                            <form action="Models/registroViaje.php" method="POST" class="search-destination">
                                <div class="row">
                                    <div class="col-md align-items-end">
                                        <div class="form-group">
                                            <label>Origen 📌</label>
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                    <select name="origen"  class="form-control">
                                                        <option disabled selected >Lugar de Origen</option>
                                                        <?php
                                                            $query = $mysqli -> query ("SELECT * FROM origen");
                                                            while ($valorOrigen = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                                        ?>
                                                                <option value="<?php echo $valorOrigen['codigoOrigen'] ?>" > <?php echo $valorOrigen['nombreOrigen'] ?> </option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md align-items-end">
                                        <div class="form-group">
                                            <label>Destino🌎</label>
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                    <select name="destino" class="form-control">
                                                        <option disabled selected >Lugar de Destino</option>
                                                        <?php
                                                            $query = $mysqli -> query ("SELECT * FROM destino");
                                                            while ($valorDestino = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                                        ?>
                                                                <option value="<?php echo $valorDestino['codigoDestino'] ?>" > <?php echo $valorDestino['nombreDestino'] ?> </option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md align-items-end">
                                        <div class="form-group">
                                            <label>Salida 📅</label>
                                            <div class="form-field">
                                                <div class="icon"><span class="icon-map-marker"></span></div>
                                                <input type="text" name="fechaSalida" class="form-control checkin_date"
                                                    placeholder="Registrarse" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md align-items-end">
                                        <div class="form-group">
                                            <label>Regreso 📆</label>
                                            <div class="form-field">
                                                <div class="icon"><span class="icon-map-marker"></span></div>
                                                <input type="text" name="fechaRegreso" class="form-control checkout_date"
                                                    placeholder="Salida" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md align-items-end">
                                        <div class="form-group">
                                            <label>🪑 Asientos</label>
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                    <select name="cant_asientos" id="" class="form-control" required>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md align-self-end">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <!-- <input type="submit" value="Buscar" class="form-control btn btn-primary"  onclick="location.href='login.php';"> -->
                                                <button type="submit" class="form-control btn btn-primary" name="btn_index">BUSCAR</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                            aria-labelledby="v-pills-performance-tab">
                            <form action="#" class="search-destination">
                                <div class="row">
                                    <div class="col-md align-items-end">
                                        <div class="form-group">
                                            <label>Registrar 📅</label>
                                            <div class="form-field">
                                                <div class="icon"><span class="icon-map-marker"></span></div>
                                                <input type="text" class="form-control checkin_date"
                                                    placeholder="Reservar">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md align-items-end">
                                        <div class="form-group">
                                            <label>Salida 📆</label>
                                            <div class="form-field">
                                                <div class="icon"><span class="icon-map-marker"></span></div>
                                                <input type="text" class="form-control checkout_date"
                                                    placeholder="Salida">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md align-items-end">
                                        <div class="form-group">
                                            <label>Huéspedes 👨‍👨‍👧‍👦</label>
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md align-self-end">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <input type="submit" value="Buscar"
                                                    class="form-control btn btn-primary">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-effect-tab">
                            <form action="#" class="search-destination">
                                <div class="row">
                                    <div class="col-md align-items-end">
                                        <div class="form-group">
                                            <label>¿Adónde vas?📌</label>
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                    <select name="" id="" class="form-control">
                                                        <option disabled selected>Lugar de Destino</option>
                                                        <?php
                                                           // $query = $mysqli -> query ("SELECT * FROM destino");
                                                            //while ($valores = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                                           //     echo '<option value="'.$valores[id].'">'.$valores[nombreDestino].'</option>';
                                                          //  }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md align-items-end">
                                        <div class="form-group">
                                            <label>Registrarse 📅</label>
                                            <div class="form-field">
                                                <div class="icon"><span class="icon-map-marker"></span></div>
                                                <input type="text" class="form-control checkin_date"
                                                    placeholder="Registrarse">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md align-items-end">
                                        <div class="form-group">
                                            <label>Salida 📆</label>
                                            <div class="form-field">
                                                <div class="icon"><span class="icon-map-marker"></span></div>
                                                <input type="text" class="form-control checkout_date"
                                                    placeholder="Salida">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md align-self-end">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <input type="submit" value="Buscar"
                                                    class="form-control btn btn-primary">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Vea nuestras últimas ideas de vacaciones</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="destination-entry img" style="background-image: url(Views/images/destination-11.jpg);">
                        <div class="text text-center">
                            <h3>Paisajes frente al lago</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="destination-entry img"
                        style= "background-image: url(Views/images/destination-2-1.jpg);">
                        <div class="text text-center">
                            <h3>Vacaciones Grupales</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="destination-entry img" style= "background-image: url(Views/images/destination-3.jpg);">
                        <div class="text text-center">
                            <h3>Escapadas de la Ciudad</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about d-md-flex" id="about">
        <div class="one-half img" style="background-image: url(Views/images/about1.jpg);"></div>
        <div class="one-half ftco-animate">
            <div class="heading-section ftco-animate ">
                <h2 class="mb-4">La mejor guia turistica 🏆</h2>
            </div>
            <div>
                <p>
                    NuestraPagina Guia turistica de viaje líder en toda Guatemala. Tus boletos aereos, terrestres, marinos, paquetes de viaje y
                    hoteles están en NuestraPagina Guia turistica, crucial para tener así las mejores vacaciones. <br> Le asesoraremos paso
                    a paso, para que su viaje de placer o de negocios sea óptimo. Buscaremos las mejores opciones de vuelo, hoteles, planes y paquetes.
                </p>
            </div>
        </div>
    </section>

    <section class="ftco-section services-section bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-yatch"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Actividades especiales</h3>
                            <p>Descubre rincones qué ver, dónde dormir y las mejores actividades en cada destino.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-around"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Viajes Increíbles</h3>
                            <p>Con los mejores lugares y destino con hermosos paisajes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-compass"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Guia Privada</h3>
                            <p>Tendrá a su disposición el mejor equipo de guías para sus vaijes .</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-map-of-roads"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Excelentes Lugares</h3>
                            <p>Visita lugares Increíbles y hermosos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="places">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Destinos más popular</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(Views/images/destination-1.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="#">Panajachel, Guatemala</a></h3>
                                    <p class="rate">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star-o"></i>
                                        <span>9 Rating</span>
                                    </p>
                                </div>
                                <div class="two">
                                    <span class="price">Q.550.00</span>
                                </div>
                            </div>
                            <p>
                                Viaja a Panajachel, paquetes completos. Transporte, trip, comida, noche, tours. Uno de los
                                lugares más hermosos de Guatemala.
                            </p>
                            <p class="days"><span>2 días / 3 noches</span></p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Panajachel, GUA</span>
                                <span class="ml-auto"><a href="#">Descúbrelo</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination d-md-flex flex-column-reverse">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(Views/images/destination-2.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="#">Tikal, Guatemala</a></h3>
                                    <p class="rate">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star-o"></i>
                                        <span>8.3 Rating</span>
                                    </p>
                                </div>
                                <div class="two">
                                    <span class="price">Q.1,200.00</span>
                                </div>
                            </div>
                            <p>
                                Parque nacional tikal no es solo la capital dle mundo maya, sino que también es la ciudad de la luz y convivencia con la fauna.
                            </p>
                            <p class="days"><span>4 días / 3 noches</span></p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Tikal, GUA</span>
                                <span class="ml-auto"><a href="#">Descúbrelo</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(Views/images/destination-33.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="#">Semuc Champey, Guatemala</a></h3>
                                    <p class="rate">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star-o"></i>
                                        <span>8 Rating</span>
                                    </p>
                                </div>
                                <div class="two">
                                    <span class="price">Q.850.00</span>
                                </div>
                            </div>
                            <p>
                                Viajes Baratos a Semuc Champey. Reserva Ahora y Acumula Puntos. Más Variedad. Ofertas
                                Limitadas.
                            </p>
                            <p class="days"><span>4 días / 5 noches</span></p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Semuc Champey, GUA</span>
                                <span class="ml-auto"><a href="#">Descúbrelo</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination d-md-flex flex-column-reverse">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(Views/images/destination-4.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="#">Antigua Guatemala, Guatemala</a></h3>
                                    <p class="rate">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star-o"></i>
                                        <span>7.3 Rating</span>
                                    </p>
                                </div>
                                <div class="two">
                                    <span class="price">Q.625.00</span>
                                </div>
                            </div>
                            <p>
                                ¿Quieres pasar unas Vacaciones en Antigua Guatemala?, Ven a vivir la una experiencia unica.
                            </p>
                            <p class="days"><span>2 días / 3 noches</span></p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Antigua Guatemala, GUA</span>
                                <span class="ml-auto"><a href="#">Descúbrelo</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter"
        style="background-image: url (Views/images/destination-2-1.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="15000">0</strong>
                                    <span>Clientes felices</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="10000">0</strong>
                                    <span>Destinos</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="5000">0</strong>
                                    <span>Hoteles</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="3000">0</strong>
                                    <span>Restaurantes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section" id="hotels">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4"><strong>Hoteles</strong> Mas Cotizados </h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(Views/images/hotel-1.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="#">Hotel Atitlan </a></h3>
                                    <p class="rate">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star-o"></i>
                                        <span>7 Rating</span>
                                    </p>
                                </div>
                                <div class="two">
                                    <span class="price per-price">Q.890.00<br><small>/Noche</small></span>
                                </div>
                            </div>
                            <p>Rodeado de jardines botánicos, Hotel Atitlán Hotel & Gardens es uno de los mejores y más 
                                encantadores hoteles hacienda en Guatemala, situado a diez minutos de la ciudad principal de Panajachel
                                 en lo que una vez fue la finca de una plantación de café de propiedad familiar.</p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Panajachel</span>
                                <span class="ml-auto"><a href="#">Reservar</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination d-md-flex flex-column-reverse">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(Views/images/hotel-2.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="#">La Riviera de Atitlan, Hotel</a></h3>
                                    <p class="rate">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <span>7 Rating</span>
                                    </p>
                                </div>
                                <div class="two">
                                    <span class="price per-price">Q.2,100.00<br><small>/Noche</small></span>
                                </div>
                            </div>
                            <p>
                            El Hotel La Riviera de Atitlán, es ya reconocido mundialmente por ofrecer a sus 
                            huéspedes la vista más espectacular desde cualquiera de sus habitaciones.
                            </p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Panajachel</span>
                                <span class="ml-auto"><a href="#">Reserva</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(Views/images/hotel-3.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="#">Oceana Resort + Conventions Hotel All Inclusive</a></h3>
                                    <p class="rate">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star-o"></i>
                                        <span>8 Rating</span>
                                    </p>
                                </div>
                                <div class="two">
                                    <span class="price per-price">Q.1,745.00<br><small>/Noche</small></span>
                                </div>
                            </div>
                            <p>Esuno de los mejores hotele todo incluido en Guatemala</p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Iztapa</span>
                                <span class="ml-auto"><a href="#">Reservar</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination d-md-flex flex-column-reverse">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(Views/images/hotel-4.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="#">Hotel La Casona del Lago</a></h3>
                                    <p class="rate">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star-o"></i>
                                        <span>4.5 Rating</span>
                                    </p>
                                </div>
                                <div class="two">
                                    <span class="price per-price">Q.1,500.00<br><small>/Noche</small></span>
                                </div>
                            </div>
                            <p>
                            El Hotel Casona del Lago está situado a orillas del lago Peten Itza, frente a la isla de Flores, 
                            y ofrece una piscina al aire libre y una bañera de hidromasaje
                            </p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Flores Peten</span>
                                <span class="ml-auto"><a href="#">Reservar</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(Views/images/hotel-5.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="#">Westin Camino Real</a></h3>
                                    <p class="rate">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star-o"></i>
                                        <span>8 Rating</span>
                                    </p>
                                </div>
                                <div class="two">
                                    <span class="price per-price">Q.1,850.00<br><small>/Noche</small></span>
                                </div>
                            </div>
                            <p> Corporación hotelera más grande y con mayor trayectoria en Guatemala, con más de 58 años en el mercado.</p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Guatemala, GUA</span>
                                <span class="ml-auto"><a href="#">Reservar</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="Restaurant">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Restaurantes Recomendados</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(Views/images/restaurant-1.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <h3><a href="#">Restaurante Tuscani </a></h3>
                            <p class="rate">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-o"></i>
                                <span>8 Rating</span>
                            </p>
                            <p>La comida y servicio muy buenos, los platillos deliciosos, es una excelente opción, el lugar es pequeño Pero el sabor es buenisimo</p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Panajachel</span>
                                <span class="ml-auto"><a href="#">Reserva</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="destination d-md-flex flex-column-reverse">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(Views/images/restaurant-2.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <h3><a href="#">Restaurante CasaBlanca</a></h3>
                            <p class="rate">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-o"></i>
                                <span>8 Rating</span>
                            </p>
                            <p>Desde 1987 Restaurante Casablanca ofrece una gran variedad de cocina internacional,
                                 posicionado en unos de los mejores 100 restaurantes de Centro América.</p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Panajachel</span>
                                <span class="ml-auto"><a href="#">Reserva</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(Views/images/restaurant-3.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <h3><a href="#">Rincon del Steak </a></h3>
                            <p class="rate">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-o"></i>
                                <span>8 Rating</span>
                            </p>
                            <p>Se caracterizan ante sus comensales por asar las carnes al trapo, técnica que es invento nuestro lo cual hace que nuestros cortes sean jugosos y exquisitos. 
                                Cada plato que servimos es una experiencia culinaria única y diferente. </p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Guatemala, GUA</span>
                                <span class="ml-auto"><a href="#">Reserva</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="destination d-md-flex flex-column-reverse">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(Views/images/restaurant-4.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <h3><a href="#">Kape Paulinos </a></h3>
                            <p class="rate">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-o"></i>
                                <span>4 Rating</span>
                            </p>
                            <p>Un Sabor espectacular al estilo kape paulinos</p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Tecpan</span>
                                <span class="ml-auto"><a href="#">Reserva</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light" id="blog">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2><strong>Consejos</strong> &amp; Artículos</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="#" class="block-20" style="background-image: url('Views/images/image_1.jpg');">
                        </a>
                        <div class="text">
                            <span class="tag">Consejos, Viajes</span>
                            <h3 class="heading mt-3"><a href="#">Elige bien las fechas de tu viaje</a></h3>
                            <div class="meta mb-3">
                                <div><a href="#">Octubre 19, 2022</a></div>
                                <div><a href="#">Alejandro Sazo</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 8</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="#" class="block-20" style="background-image: url('Views/images/image_2.jpg');">
                        </a>
                        <div class="text">
                            <span class="tag">Cultura</span>
                            <h3 class="heading mt-3"><a href="#">5 tips para mejorar tu cultura general</a></h3>
                            <div class="meta mb-3">
                                <div><a href="#">Noviembre 7, 2022</a></div>
                                <div><a href="#">Daniel Gomez</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 4</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="#" class="block-20" style="background-image: url('Views/images/image_3.jpg');">
                        </a>
                        <div class="text">
                            <span class="tag">Consejos, Viajes</span>
                            <h3 class="heading mt-3"><a href="#">40 geniales tips para viajar que cambiarán tu vida</a>
                            </h3>
                            <div class="meta mb-3">
                                <div><a href="#">Marzo 25, 2023</a></div>
                                <div><a href="#">Pedro Hernandez</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 23</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="">        
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="intro ftco-animate">
                        <h3>01 Viajes </h3>
                        <p>Encuentra viajes baratos al destino que prefieras, disfruta de unas buenas vacaciones y
                            aprovecha las mejores ofertas de viajes que te ofrecemos.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="intro ftco-animate">
                        <h3>02 Experiencia </h3>
                        <p>Realizar viajes originales es una forma de vivir experiencias únicas, una manera de
                            personalizar nuestra aventura y disfrutar de Guatemala al máximo.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="intro ftco-animate">
                        <h3>03 Relajamiento </h3>
                        <p>Las vacaciones son la mejor oportunidad para relajarse, ¡y algunas personas lo toman muy
                            enserio!.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section" id="contact">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">NuestraPagina Guia Turistica</h2>
                        <p>Selecciona tu destino preferido para ver los paquetes que tenemos para ti. <br> Con años de
                            servicio, somos tu guia turistica preferida.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Información</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Sobre nosotros</a></li>
                            <li><a href="Models/informe.php" class="py-2 d-block">Consulta en línea</a></li>
                            <li><a href="#" class="py-2 d-block">Condiciones de reserva</a></li>
                            <li><a href="#" class="py-2 d-block">Privacidad y politica</a></li>
                            <li><a href="#" class="py-2 d-block">Politica de reembolso</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Experiencia</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">playa</a></li>
                            <li><a href="#" class="py-2 d-block">Aventuras</a></li>
                            <li><a href="#" class="py-2 d-block">Fauna silvestre</a></li>
                            <li><a href="#" class="py-2 d-block">Luna de miel</a></li>
                            <li><a href="#" class="py-2 d-block">Naturaleza</a></li>
                            <li><a href="#" class="py-2 d-block">Fiesta</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">¿Tiene alguna pregunta?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">502 GT, Ciudad de Guatemala,
                                        Guatemala, GUA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+1800 GUATEBELLA
                                        </span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@nuestrapagina.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                    Copyright &copy;
                        <script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved NuestraPagina | Analisis de Sistemas 1 <i class="icon-cloud"
                            aria-hidden="true"></i> by <a href=""
                            target="_blank">Proyecto Final</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>


    <script src="Views/js/jquery.min.js"></script>
    <script src="Views/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="Views/js/popper.min.js"></script>
    <script src="Views/js/bootstrap.min.js"></script>
    <script src="Views/js/jquery.easing.1.3.js"></script>
    <script src="Views/js/jquery.waypoints.min.js"></script>
    <script src="Views/js/jquery.stellar.min.js"></script>
    <script src="Views/js/owl.carousel.min.js"></script>
    <script src="Views/js/jquery.magnific-popup.min.js"></script>
    <script src="Views/js/aos.js"></script>
    <script src="Views/js/jquery.animateNumber.min.js"></script>
    <script src="Views/js/bootstrap-datepicker.js"></script>
    <script src="Views/js/jquery.timepicker.min.js"></script>
    <script src="Views/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </script>
    <script src="Views/js/google-map.js"></script>
    <script src="Views/js/main.js"></script>

</body>

</html>