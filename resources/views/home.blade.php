@extends('template')

@section('javascripts')
    <script src="{{ url('js/main.v2.js') }}"></script>
@endsection

@section('content')

    {{-- header my CWA --}}

    <section class="headercwa">
        <video src="<?= url('video/cwa_video.mp4') ?>" loop muted autoplay class="cwa_video"></video>
        <div>
            <div class="text-box">
                <a href="{{ route('cwa') }}" class="btn btn-white btn-animate">VBP 2D</a>
            </div>
            <div class="text-box">
                <a href="cwaprojet/index.html" class="btn btn-white btn-animate">VBP 3D</a>
            </div>
        </div>

    </section>

    {{-- <div class="nomove">
        <section class="hero-wrap degree-right js-fullheight" id="new">
            <div class="fondo">
                <video src="<?= url('video/cwa_video.mp4') ?>" loop muted autoplay class="cwa_video"></video>
                <div class="slider-item js-fullheight">

                    <div class="row no-gutters slider-text js-fullheight align-items-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text aliniacion">
                                <h1 class="mb-4 edittext">Click para ver el evento</h1>
                                <p class="mb-0"><a href="{{ $configuration->video_url }}" class="playbutton img-video popup-vimeo d-flex align-items-center justify-content-center" data-autoplay="true" data-vbtype="video">
                                        <span class="fa fa-play" style="color: black;"></span>
                                    </a></p>
                            </div>
                            <div class="text-box">
                                <a href="#" class="btn btn-white btn-animate">click me</a>
                            </div>

                            <div class="text-box">
                                <a href="#" class="btn btn-white btn-animate">click me</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div>
                    <div class="text-box">
                        <a href="#" class="btn btn-white btn-animate">click me</a>
                    </div>

                    <div class="text-box two_button">
                        <a href="#" class="btn btn-white btn-animate">click me</a>
                    </div>
                </div>
            </div>
        </section>
    </div> --}}

    {{-- <section class="ftco-section animated fadeInDown" id="new1">
        <div class="container">
            <div class="row justify-content-center no-gutters">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <h2 class="mb-2">Bienvenida</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md d-flex align-items-stretch ftco-animate pl-2 pr-2">
                    <div class="media block-6 w-100 services d-block text-left">
                        <div class="media-body py-md-3">
                            <h2 class="mb-2 welcomeuser d-none d-md-inline-block">Bienvenido al Kick Off 2021: <?= auth()->user()->fullname; ?></h2>
                            <h2 class="mb-2 welcomeuser d-inline-block d-md-none text-center">Bienvenido al Kick Off 2021: <?= auth()->user()->fullname; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row wrap-about m-0 d-flex d-md-none" style="margin-bottom: -50px!important;">
                <div class="col-12 text-center">
                    <img style="" class="img" src="<?= url('images/presentadores/OPC1.png') ?>" alt="">
                </div>
            </div>
            <div class="row wrap-about m-0 my-5">
                <div class="col-12">
                    <img style="max-height: 300px; padding-right: 40px;" class="d-none d-md-block img pull-left" src="<?= url('images/presentadores/OPC1.png') ?>" alt="">
                    <p style="color: black;font-size: 1.3rem;padding: 15px;">???A todo el equipo de la BEI y a nuestros invitados les doy la m??s cordial bienvenida a nuestro Kick Off Digital BEI 2021. A lo largo de la sesi??n platicaremos sobre los retos y prioridades que juntos enfrentaremos este a??o
                        y aprovecharemos la oportunidad para reconocer a
                        los colaboradores que durante el a??o 2020 marcaron la diferencia...???</p>
                    <h5 class="mt-2">??Bienvenidos!</h5>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="ftco-section testimony-section" id="speakers">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-3">Presentadores</h2>
                </div>
            </div>
            <div class="row  ftco-animate">
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?= url('images/presentadores/OPC1.png') ?>" alt="Speaker 1" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc1">Fernando Quesada G??mez</a></h3>
                            <p>Director General Adjunto de Banca de Empresas</p>
                            <div class="social">
                                <a href=""><p>Santander M??xico</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?= url('images/presentadores/OPC2.png') ?>" alt="Speaker 2" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc2">Javier Rodr??guez Ardila</a></h3>
                            <p>Director Ejecutivo Segmento Empresas y Estrategia BEI</p>
                            <div class="social">
                                <a href=""><p>Santander M??xico</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= url('images/presentadores/OPC3.png') ?>" alt="Speaker 3" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc3">Luis Alberto Castellanos</a></h3>
                            <p>Director Ejecutivo Regional Centro</p>
                            <div class="social">
                                <a href=""><p>Santander M??xico</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?= url('images/presentadores/OPC4.png') ?>" alt="Speaker 1" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc4">Enrique Victorica</a></h3>
                            <p>Director Ejecutivo Regional Metro Norte</p>
                            <div class="social">
                                <a href=""><p>Santander M??xico</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?= url('images/presentadores/OPC5.png') ?>" alt="Speaker 2" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc5">Ricardo Valle</a></h3>
                            <p>Director Ejecutivo Regional Metro Sur</p>
                            <div class="social">
                                <a href=""><p>Santander M??xico</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= url('images/presentadores/OPC6.png') ?>" alt="Speaker 3" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc6">Luis Mendiola</a></h3>
                            <p>Director Ejecutivo Regional Noreste</p>
                            <div class="social">
                                <a href=""><p>Santander M??xico</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?= url('images/presentadores/OPC7.png') ?>" alt="Speaker 1" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc7">Alejandro V??zquez</a></h3>
                            <p>Director Ejecutivo Regional Noroeste</p>
                            <div class="social">
                                <a href=""><p>Santander M??xico</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?= url('images/presentadores/OPC8.png') ?>" alt="Speaker 2" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc8">Humberto Pereira</a></h3>
                            <p>Director Ejecutivo Regional Norte</p>
                            <div class="social">
                                <a href=""><p>Santander M??xico</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= url('images/presentadores/OPC9.png') ?>" alt="Speaker 3" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc9">Alejandro Romano </a></h3>
                            <p>Director Ejecutivo Regional Occidente</p>
                            <div class="social">
                                <a href=""><p>Santander M??xico</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?= url('images/presentadores/OPC10.png') ?>" alt="Speaker 1" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc10">Ver??nica Castellanos</a></h3>
                            <p>Director Ejecutivo Regional Sur</p>
                            <div class="social">
                                <a href=""><p>Santander M??xico</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?= url('images/presentadores/OPC11.png') ?>" alt="Speaker 2" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc11">Jes??s Valderrama</a></h3>
                            <p>Director Ejecutivo Regional Sureste</p>
                            <div class="social">
                                <a href=""><p>Santander M??xico</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= url('images/presentadores/OPC12.png') ?>" alt="Speaker 3" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc12">Antonio Basagoiti Pastor</a></h3>
                            <p>Director Ejecutivo de Grandes Empresas</p>
                            <div class="social">
                                <a href=""><p>Santander M??xico</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?= url('images/presentadores/OPC13.png') ?>" alt="Speaker 1" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc13">Pilar Herrera Lude??a</a></h3>
                            <p>CEO de Negocio Instituciones y Sector P??blico</p>
                            <div class="social">
                                <a href=""><p>Santander M??xico</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?= url('images/presentadores/OPC14.png') ?>" alt="Speaker 2" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc14">Mart??n Eduardo Villarreal</a></h3>
                            <p>Director Ejecutivo de Soluciones Financieras</p>
                            <div class="social">
                                <a href=""><p>Santander M??xico</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= url('images/presentadores/OPC15.png') ?>" alt="Speaker 3" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc15">Rodolfo Hern??ndez Sada</a></h3>
                            <p>Director Ejecutivo de Negocio Internacional y Agronegocios</p>
                            <div class="social">
                                <a href=""><p>Santander M??xico</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= url('images/presentadores/OPC16.png') ?>" alt="Speaker 3" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc16">Marcos Abal</a></h3>
                            <p>Director Ejecutivo Banca Transaccional</p>
                            <div class="social">
                                <a href=""><p>Santander M??xico</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= url('images/presentadores/OPC17.png') ?>" alt="Speaker 3" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc17">Iv??n Riva Palacio</a></h3>
                            <p>Director Ejecutivo de Estrategia Comercial BEI</p>
                            <div class="social">
                                <a href=""><p>Santander M??xico</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= url('images/presentadores/OPC18.png') ?>" alt="Speaker 3" class="img-fluid">
                        <div class="details">
                            <h3><a href="#opc18">Michael Goeters</a></h3>
                            <p>Director Ejecutivo Santander Leasing</p>
                            <div class="social">
                                <a href=""><p>Santander M??xico</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="ftco-section bg-light" id="new3">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Agenda</h2>
                </div>
            </div>
            <div class="timeline  ftco-animate">
                <ul>
                    <li>
                        <div class="content">
                            <h3>Registro de Participantes</h3>
                        </div>
                        <div class="time">
                            <h4>9:30</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Bienvenida</h3>
                            <p>Javier Rodriguez </p>
                        </div>
                        <div class="time">
                            <h4>10:00</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Pl??tica con Directores Regionales</h3>
                            <p>Fernando Quesada</p>
                        </div>
                        <div class="time">
                            <h4>10:05</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentaci??n DGA: Resultados y Retos</h3>
                            <p>Fernando Quesada  </p>
                        </div>
                        <div class="time">
                            <h4>10:30</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Entorno Econ??mico</h3>
                            <p>Luis Flores</p>
                        </div>
                        <div class="time">
                            <h4>11:20</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentaci??n Captaci??n y Seguros Emp.</h3>
                            <p>Javier Rodriguez </p>
                        </div>
                        <div class="time">
                            <h4>11:45</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Mensaje RRHH</h3>
                            <p>Juan Ignacio Echeverr??a  </p>
                        </div>
                        <div class="time">
                            <h4>11:55</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentaci??n ROF y N??mina</h3>
                            <p>Iv??n Riva Palacio</p>
                        </div>
                        <div class="time">
                            <h4>12:00</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentaci??n Sol Financieras</h3>
                            <p>Martin Villareal</p>
                        </div>
                        <div class="time">
                            <h4>12:15</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Mensaje PyP</h3>
                            <p>Pablo Elek  </p>
                        </div>
                        <div class="time">
                            <h4>12:20</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentaci??n Neg. Int y Agro</h3>
                            <p>Rodolfo Hernandez Sada </p>
                        </div>
                        <div class="time">
                            <h4>12:25</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentaci??n Banca Transaccional</h3>
                            <p>Marcos Abal  </p>
                        </div>
                        <div class="time">
                            <h4>12:35</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Pl??tica entre DGA??s</h3>
                            <p>Fernando Quesada y Ricardo Alonso </p>
                        </div>
                        <div class="time">
                            <h4>12:40</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentaci??n Arrendadora</h3>
                            <p>Michael Goeters </p>
                        </div>
                        <div class="time">
                            <h4>12:55</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentaci??n Inst. y SP.</h3>
                            <p>Pilar Herrera </p>
                        </div>
                        <div class="time">
                            <h4>13:00</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Mensaje CFO</h3>
                            <p>Didier Mena </p>
                        </div>
                        <div class="time">
                            <h4>13:05</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentaci??n Grandes Empresas</h3>
                            <p>Antonio Basagoiti</p>
                        </div>
                        <div class="time">
                            <h4>13:15</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentaci??n Segmento Empresas</h3>
                            <p>Javier Rodriguez </p>
                        </div>
                        <div class="time">
                            <h4>13:20</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Mensaje CIB</h3>
                            <p>Octaviano Couttolenc</p>
                        </div>
                        <div class="time">
                            <h4>13:30</h4>
                        </div>
                    </li>


                    <li>
                        <div class="content">
                            <h3>Mensaje presidencia y DGA</h3>
                            <p>H??ctor Grisi y Fernando Quesada </p>
                        </div>
                        <div class="time">
                            <h4>13:35</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Reconocimientos</h3>
                            <p>Fernando Quesada</p>
                        </div>
                        <div class="time">
                            <h4>13:50</h4>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Fin del evento </h3>
                            <p></p>
                        </div>
                        <div class="time">
                            <h4>14:00</h4>
                        </div>
                    </li>
                    <div style="clear:both;"></div>
                </ul>
            </div>
        </div>
        <div class="degree-left-footer"></div>
    </section> --}}

    {{-- @if (auth()->user()->acl_level < 100)
        <div class="btn-opc">
            <img class="img-opc" src="{{ url('images/icons/conversacion.svg') }}" alt="">
        </div>
        <div class="btn-opc2 d-none">
            <img class="img-opc" src="{{ url('images/icons/respuesta.svg') }}" alt="">
        </div>
    @endif --}}

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
        </svg>
    </div>

    @if (auth()->user()->acl_level < 100)
        <div class="chat-popup" id="chat-popup" data-sync="{{ route('read_messages') }}" data-sender="{{ auth()->user()->id }}" data-from="0" data-to="{{ date('U') }}">
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="chat-container"></div>
            <div class="mt-1 chat-control">
                <form action="{{ route('send_message') }}" class="form-container">
                    <input placeholder="Ingrese su mensaje.." name="message" required></textarea>
                    <button type="submit" class="btn"><i class="fa fa-paper-plane"></i></button>
                </form>
            </div>
        </div>

        <div class="response-popup" id="response-popup">
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <form action="/receiver_sync.php" class="form-container">
                <div class="response-container">
                    <h4>Respuestas</h4>
                    <div class="response-row">
                        <div>1:</div>
                        <div>
                            <button type="button" class="btn">A</button>
                        </div>
                        <div>
                            <button type="button" class="btn">B</button>
                        </div>
                        <div>
                            <button type="button" class="btn">C</button>
                        </div>
                        <div>
                            <button type="button" data-mark="1" class="btn">D</button>
                        </div>
                    </div>
                    <div class="response-row">
                        <div>2:</div>
                        <div>
                            <button type="button" class="btn">A</button>
                        </div>
                        <div>
                            <button type="button" data-mark="1" class="btn">B</button>
                        </div>
                        <div>
                            <button type="button" class="btn">C</button>
                        </div>
                        <div>
                            <button type="button" class="btn">D</button>
                        </div>
                    </div>
                    <div class="response-row">
                        <div>3:</div>
                        <div>
                            <button type="button" class="btn">A</button>
                        </div>
                        <div>
                            <button type="button" class="btn">B</button>
                        </div>
                        <div>
                            <button type="button" class="btn" data-mark="1">C</button>
                        </div>
                        <div>
                            <button type="button" class="btn">D</button>
                        </div>
                    </div>
                    <div class="response-row">
                        <div>4:</div>
                        <div>
                            <button type="button" class="btn">A</button>
                        </div>
                        <div>
                            <button type="button" class="btn">B</button>
                        </div>
                        <div>
                            <button type="button" class="btn">C</button>
                        </div>
                        <div>
                            <button type="button" class="btn">D</button>
                        </div>
                    </div>
                    <div class="response-row">
                        <div>5:</div>
                        <div>
                            <button type="button" data-mark="1" class="btn">A</button>
                        </div>
                        <div>
                            <button type="button" class="btn">B</button>
                        </div>
                        <div>
                            <button type="button" class="btn">C</button>
                        </div>
                        <div>
                            <button type="button" class="btn">D</button>
                        </div>
                    </div>
                </div>
                <div class="mt-1 chat-control">
                    <button type="submit" class="btn w-100">Enviar</button>
                </div>
            </form>

            <div class="alert alert-success" style="display: none;">
                <strong>Gracias por comunicarse!</strong> Hemos registrado su pregunta.
            </div>
        </div>
    @endif

    {{-- <div id="opc1" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <div class="headerpro">
                <a href="#">
                    <img src="<?= url('images/presentadores/OPC1.png') ?>" alt="">
                </a>
                <h2 class="nameuserr">Fernando Quesada G??mez</h2>
                <h4 class="cargouserr">Director General Adjunto de Banca de Empresas e Instituciones</h4>
            </div>
            <div class="descripcionuser">
                <p style="text-align: justify;">Es Licenciado en Administraci??n de Empresas por la Universidad Del Valle de Atemajac de Guadalajara.
                    Actualmente ocupa el puesto de Director General Adjunto de Banca de Empresas e Instituciones en Banco Santander M??xico, mismo que desempe??a desde el 2013.
                    Anteriormente ocup?? el cargo de Director General Adjunto de Banca Privada y se ha desempa??ado en diferentes puestos dentro de Grupo Santander M??xico como Director de Segmento de Banca de Empresas e Instituciones, Director Ejecutivo Regional de Metro Sur, as?? como de la Regi??n de
                    Occidente.
                    Tambi??n ha ocupado posiciones importantes tanto en Banco Mercantil Probursa, como en Banca Cremi.
                </p>
            </div>
        </div>
    </div>

    <div id="opc2" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <div class="headerpro">
                <a href="#">
                    <img src="<?= url('images/presentadores/OPC2.png') ?>" alt="">
                </a>
                <h2 class="nameuserr">Javier Rodr??guez Ardila</h2>
                <h4 class="cargouserr">Director Ejecutivo Segmento Empresas y Estrategia BEI</h4>
            </div>
            <div class="descripcionuser">
                <p style="text-align: justify;">Licenciado en Econom??a por la Universidad Iberoamericana. Estudi?? los Diplomados en Financiamiento a Empresas y Contabilidad y Finanzas, ambas por el ITAM, as?? como, diplomado en Financiamiento Executive Private Banking por el London School of
                    Economics y Gesti??n Integral del Talento por el ITESM.
                    Actualmente ocupa el puesto de Director Ejecutivo Segmento Empresas y Estrategia BEI, mismo que desempe??a desde el 2019.
                    Con m??s de 13 a??os en Banco Santander M??xico ha desempe??ado puestos como Director de Large Corporates, Banca de Inversi??n, Director Regional y Director de Estrategia Comercial ambos en Banca Privada, entre otros.
                    Ha ocupado puestos en distintas empresas como GNP, Financiera Rural y KPMG.
                </p>
            </div>
        </div>
    </div>

    <div id="opc3" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <div class="headerpro">
                <a href="#">
                    <img src="<?= url('images/presentadores/OPC3.png') ?>" alt="">
                </a>
                <h2 class="nameuserr">Luis Alberto Castellanos</h2>
                <h4 class="cargouserr">Director Ejecutivo Regional Centro</h4>
            </div>
            <div class="descripcionuser">
                <p style="text-align: justify;">
                    Es Licenciado en Administraci??n de Empresas por la Universidad del ITESO en Guadalajara.
                    Actualmente desempe??a el puesto de Director Ejecutivo Regional Centro de Banca de Empresas e Instituciones, mismo que ocupa desde el 2016.
                    Con 26 a??os de experiencia en el sector financiero, ha desempa??ado otros cargos directivos siempre en Banco Santander.
                </p>
            </div>
        </div>
    </div>

    <div id="opc4" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <div class="headerpro">
                <a href="#">
                    <img src="<?= url('images/presentadores/OPC4.png') ?>" alt="">
                </a>
                <h2 class="nameuserr">Enrique Victorica</h2>
                <h4 class="cargouserr">Director Ejecutivo Regional Metro Norte</h4>
            </div>
            <div class="descripcionuser">
                <p style="text-align: justify;">
                    Es Contador P??blico con Maestr??a en Administraci??n y Finanzas del ITESM y Especialidad en Banca en Luisiana State University.
                    Actualmente desempe??a el puesto de Director Ejecutivo Regional Metro Norte de Banca de Empresas e Instituciones.
                    Con 25 a??os de experiencia en Banca, inici?? su carrera en Bancomer previo a su reprivatizaci??n, Banorte y actualmente Santander.
                </p>
            </div>
        </div>
    </div>

    <div id="opc5" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <div class="headerpro">
                <a href="#">
                    <img src="<?= url('images/presentadores/OPC5.png') ?>" alt="">
                </a>
                <h2 class="nameuserr">Ricardo Valle</h2>
                <h4 class="cargouserr">Director Ejecutivo Regional Metro Sur</h4>
            </div>
            <div class="descripcionuser">
                <p style="text-align: justify;">
                    Es Licenciado en Administraci??n de Empresas y Maestro en Finanzas Corporativas, ambos por el ITAM.
                    Actualmente desempe??a el puesto de Director Ejecutivo Regional Metro Sur de Banca de Empresas e Instituciones, mismo que ocupa desde el 2009.
                    En Banco Santander M??xico lleva 26 a??os de los cuales ha estado 12 a??os en todas las ??reas de Riesgos y 14 a??os en ??rea Comercial.
                </p>
            </div>
        </div>
    </div>

    <div id="opc6" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <div class="headerpro">
                <a href="#">
                    <img src="<?= url('images/presentadores/OPC6.png') ?>" alt="">
                </a>
                <h2 class="nameuserr">Luis Mendiola</h2>
                <h4 class="cargouserr">Director Ejecutivo Regional Noreste</h4>
            </div>
            <div class="descripcionuser">
                <p style="text-align: justify;">
                    Es Licenciado en Administraci??n con un GMBA por la Universidad de Carolina del Sur y un posgrado en el Tec de Monterrey. Est?? certificado en Relaci??n con Inversionistas por la Universidad de Nueva York.
                    Actualmente desempe??a el puesto de Director Regional Noreste de Banca de Empresas e Instituciones, mismo que desempe??a desde 2017.
                    Tiene m??s de 20 a??os de experiencia en el sector financiero, dentro de los cuales 16 los ha transcurrido en Banco Santander ocupando puestos importantes como Director Nacional de Agronegocios y Derivados en Santander Global Connect M??xico y Director Ejecutivo de la Regional Norte
                    de Banca de Empresas e Instituciones.
                </p>
            </div>
        </div>
    </div>

    <div id="opc7" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <div class="headerpro">
                <a href="#">
                    <img src="<?= url('images/presentadores/OPC7.png') ?>" alt="">
                </a>
                <h2 class="nameuserr">Alejandro V??zquez</h2>
                <h4 class="cargouserr">Director Ejecutivo Regional Noroeste</h4>
            </div>
            <div class="descripcionuser">
                <p style="text-align: justify;">
                    Es Licenciado en Administraci??n Financiera por el Tecnol??gico de Monterrey y Master in Finance por Tulane University, Nueva Orleans en Estados Unidos.
                    Actualmente desempe??a el puesto de Director Ejecutivo Regional Noroeste de Banca de Empresas e Instituciones, mismo que desempe??a desde 2017.
                    Anteriormente, con 16 a??os de experiencia, ha desempe??ado diversos puestos en Grupo Santander como FUDI con asignaci??n en San Brasil en ??reas Centrales de Productos para Particulares y Director Zonal en la Regional Sureste de BEI.
                </p>
            </div>
        </div>
    </div>

    <div id="opc8" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <div class="headerpro">
                <a href="#">
                    <img src="<?= url('images/presentadores/OPC8.png') ?>" alt="">
                </a>
                <h2 class="nameuserr">Humberto Pereira</h2>
                <h4 class="cargouserr">Director Ejecutivo Regional Norte</h4>
            </div>
            <div class="descripcionuser">
                <p style="text-align: justify;">
                    Es Licenciado en Administraci??n con concentraci??n en Gerencia Financiera, con Postgrado en Gesti??n de Instituciones Financieras y un MBA por ISEAD, asimismo es Diplomado en Derivados Financieros.
                    Actualmente desempe??a el puesto de Director Ejecutivo Regional Norte de Banca de Empresas e Instituciones.
                    Tiene m??s de 20 a??os de experiencia en la Banca en donde ha desempe??ado posiciones en las ??reas de Banca de Empresas, Riesgos, Debt Capital Markets y Banca de Inversi??n.
                </p>
            </div>
        </div>
    </div>

    <div id="opc9" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <div class="headerpro">
                <a href="#">
                    <img src="<?= url('images/presentadores/OPC9.png') ?>" alt="">
                </a>
                <h2 class="nameuserr">Alejandro Romano</h2>
                <h4 class="cargouserr">Director Ejecutivo Regional Occidente</h4>
            </div>
            <div class="descripcionuser">
                <p style="text-align: justify;">Es Licenciado en Administraci??n de Empresas por la Universidad del ITESO en Guadalajara.
                    Actualmente ocupa el puesto de Director Ejecutivo Regional Occidente de Banca de Empresas e Instituciones, mismo que desempe??a desde 2016.
                    Anteriormente trabaj?? como Director Regional de Banca Privada en Santander durante cuatro a??os y medio.
                    Con 25 a??os de experiencia en el Sector Financiero ha ocupado distintas posiciones en Banco HSBC.
                </p>
            </div>
        </div>
    </div>

    <div id="opc10" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <div class="headerpro">
                <a href="#">
                    <img src="<?= url('images/presentadores/OPC10.png') ?>" alt="">
                </a>
                <h2 class="nameuserr">Ver??nica Castellanos</h2>
                <h4 class="cargouserr">Director Ejecutivo Regional Sur</h4>
            </div>
            <div class="descripcionuser">
                <p style="text-align: justify;">
                    Es Licenciada en Sistemas Computarizados e inform??tica, y cuenta con una especialidad en Finanzas, ambas por la Universidad Iberoamericana.
                    Actualmente desempe??a el puesto de Director Ejecutivo Regional Sur de Banca de Empresas e Instituciones, mismo que desempe??a desde 2014.
                    Anteriormente, con 27 a??os en el sector financiero, y 20 a??os en Banco Santander M??xico, ha desempe??ado diversos puestos como Ejecutivo de Cuenta tanto en Empresas como en Instituciones y Directora Zonal de Banca de Empresas.
                </p>
            </div>
        </div>
    </div>

    <div id="opc11" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <div class="headerpro">
                <a href="#">
                    <img src="<?= url('images/presentadores/OPC11.png') ?>" alt="">
                </a>
                <h2 class="nameuserr">Jes??s Valderrama</h2>
                <h4 class="cargouserr">Director Ejecutivo Regional Sureste</h4>
            </div>
            <div class="descripcionuser">
                <p style="text-align: justify;">
                    Es Contador P??blico con Especialidad en Finanzas por el ITESM y cuenta con un Master en Direcci??n Financiera en Espa??a y Santiago de Chile.
                    Actualmente desempe??a el puesto de Director Ejecutivo Regional Sureste de Banca de Empresas e Instituciones, mismo que desempe??a desde 2013.
                    Tiene m??s de 24 a??os de experiencia en el sector financiero dentro de Banco Santander ocupando puestos importantes como Director de Zona en Particulares y Pymes as?? como de Empresas y Director Ejecutivo Regional Norte en BEI.
                    Trabaj?? 4 a??os en Banco Santander Chile.
                </p>
            </div>
        </div>
    </div>

    <div id="opc12" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <div class="headerpro">
                <a href="#">
                    <img src="<?= url('images/presentadores/OPC12.png') ?>" alt="">
                </a>
                <h2 class="nameuserr">Antonio Basagoiti Pastor</h2>
                <h4 class="cargouserr">Director Ejecutivo de Grandes Empresas</h4>
            </div>
            <div class="descripcionuser">
                <p style="text-align: justify;">
                    Es Licenciado en Derecho por la Universidad de Deusto en Espa??a, as?? como diversos cursos en Liderazgo de Gesti??n, Derivados Financieros y Banca.
                    Actualmente ocupa el puesto de Director Ejecutivo de Grandes Empresas en Banco Santander M??xico, mismo que desempe??a desde 2016.
                    Anteriormente ocup?? cargos dentro de Grupo Santander como Head de Multinacionales en Global Corporate Banking y Director de Desarrollo de Negocio.
                    Tambi??n ha ocupado puestos importantes en la Direcci??n del INJUVE en el Ministerio de Trabajo y Asuntos Sociales del Gobierno de Espa??a, as?? como en Banco Central Hispano.
                </p>
            </div>
        </div>
    </div>

    <div id="opc13" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <div class="headerpro">
                <a href="#">
                    <img src="<?= url('images/presentadores/OPC13.png') ?>" alt="">
                </a>
                <h2 class="nameuserr">Pilar Herrera Lude??a</h2>
                <h4 class="cargouserr">Director Ejecutivo de Negocio Instituciones y Sector P??blico</h4>
            </div>
            <div class="descripcionuser">
                <p style="text-align: justify;">Es Licenciada en Econom??a por el ITESM Campus Monterrey y Maestra en Ciencias de la Administraci??n con Especialidad en Finanzas por el ITESM Campus Estado de M??xico.
                    Actualmente ocupa el puesto de Director Ejecutivo de Negocio Instituciones y Sector P??blico en Banco Santander M??xico, mismo que desempe??a desde 2017.
                    Anteriormente trabaj?? en distintas ??reas como en Banca Corporativa durante 12 a??os y Banca de Sector P??blico por 16 a??os. Tiene 30 a??os de experiencia dentro de Grupo Santander.
                </p>
            </div>
        </div>
    </div>

    <div id="opc14" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <div class="headerpro">
                <a href="#">
                    <img src="<?= url('images/presentadores/OPC14.png') ?>" alt="">
                </a>
                <h2 class="nameuserr">Mart??n Eduardo Villarreal</h2>
                <h4 class="cargouserr">Director Ejecutivo de Soluciones Financieras</h4>
            </div>
            <div class="descripcionuser">
                <p style="text-align: justify;">
                    Es Licenciado en Econom??a por la Universidad Argentina de la Empresa y cuenta con un MBA por el Centro de Estudios Macroecon??micos Argentinos.
                    Actualmente ocupa el puesto de Director Ejecutivo de Soluciones Financieras en Banco Santander M??xico con responsabilidad sobre el Cr??dito y la Banca de Inversi??n, dentro de la Banca de Empresas e Instituciones, puesto que desempe??a desde 2016.
                    Anteriormente, y con 21 a??os en el Grupo Santander, ha desempe??ado varios cargos de alto nivel en Argentina y Chile.
                </p>
            </div>
        </div>
    </div>

    <div id="opc15" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <div class="headerpro">
                <a href="#">
                    <img src="<?= url('images/presentadores/OPC15.png') ?>" alt="">
                </a>
                <h2 class="nameuserr">Rodolfo Hern??ndez Sada</h2>
                <h4 class="cargouserr">Director Ejecutivo de Negocio Internacional y Agronegocios</h4>
            </div>
            <div class="descripcionuser">
                <p style="text-align: justify;">
                    Es Contador P??blico por la Escuela Bancaria y Comercial, con estudios en el Instituto Panamericano de Alta Direcci??n de Empresas (IPADE), en la Ciudad de M??xico.
                    Actualmente ocupa el puesto de Director Ejecutivo de Negocio Internacional y Agronegocios en Banco Santander M??xico, mismo que desempa??a desde el 2017.
                    Anteriormente fue Director Ejecutivo de diferentes ??reas como: Segmento Empresas, Sinergias y Productos Empresas dentro de Grupo Santander.
                    Inici?? en la Banca hace 32 a??os, ocupando diferentes posiciones comerciales en la Banca Mayorista Global, siendo uno de los tres primeros ???Global Account Officer??? de M??xico (Grupo Slim).
                </p>
            </div>
        </div>
    </div>

    <div id="opc16" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <div class="headerpro">
                <a href="#">
                    <img src="<?= url('images/presentadores/OPC16.png') ?>" alt="">
                </a>
                <h2 class="nameuserr">Marcos Abal</h2>
                <h4 class="cargouserr">Director Ejecutivo Banca Transaccional</h4>
            </div>
            <div class="descripcionuser">
                <p style="text-align: justify;">
                    Es Licenciado en Econom??a por la Universidad de la Rep??blica en Uruguay.
                    Actualmente desempe??a el puesto de Director Ejecutivo de Banca Transaccional, mismo que desempe??a desde el 2017.
                    Anteriormente ocup?? distintos puestos dentro de Banco Santander en distintos pa??ses, como son Analista de Riesgos en Uruguay; Ejecutivo de Cuenta Banca Corporativa en Brasil y algunos cargos directivos en M??xico como Director Regional Pyme y Director Zonal de BEI.
                </p>
            </div>
        </div>
    </div>

    <div id="opc17" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <div class="headerpro">
                <a href="#">
                    <img src="<?= url('images/presentadores/OPC17.png') ?>" alt="">
                </a>
                <h2 class="nameuserr">Iv??n Riva Palacio</h2>
                <h4 class="cargouserr">Director Ejecutivo de Estrategia Comercial BEI</h4>
            </div>
            <div class="descripcionuser">
                <p style="text-align: justify;">
                    Es Licenciado en Econom??a por el ITAM y con un MBA por el IESE Business School en Barcelona.
                    Actualmente desempe??a el puesto de Director Ejecutivo de Estrategia Comercial BEI, teniendo a su cargo el Negocio ROF, Negocio Adquirente y N??mina de la BEI, as?? como las Sinergias con otras Bancas, mismo que desempe??a desde 2017.
                    Anteriormente, con m??s de 19 a??os en el Sector Financiero, y 13 a??os en Banco Santander M??xico, ha desempe??ado diversos cargos directivos dentro del Banco como Director de Modelo Comercial de PyP, ??Especialista en Tesorer??a, y Director Zonal Banca de Empresas.
                </p>
            </div>
        </div>
    </div>

    <div id="opc18" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <div class="headerpro">
                <a href="#">
                    <img src="<?= url('images/presentadores/OPC18.png') ?>" alt="">
                </a>
                <h2 class="nameuserr">Michael Goeters</h2>
                <h4 class="cargouserr">Director Ejecutivo Santander Leasing</h4>
            </div>
            <div class="descripcionuser">
                <p style="text-align: justify;">Es Licenciado en Administraci??n de Empresas por la Universidad Intercontinental. Tiene estudios de especialidad estrat??gica y de negocios por el Wharton School, en la Universidad de Pensylvania.
                    ??
                    Actualmente desempe??a el puesto de Director Ejecutivo de Arrendamiento en Santander Leasing, mismo que desempe??a desde el 2019.
                    ??
                    Tiene 30 a??os de experiencia en el sector financiero, pasando por diferentes ??reas entre las que destaca Banca de Empresas, Factoraje y la mayor parte en Arrendamiento.
                </p>
            </div>
        </div>
    </div> --}}
@endsection
