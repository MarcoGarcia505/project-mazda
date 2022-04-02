<!DOCTYPE html>
<html lang="en">
<head>
    <title>CWA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ url('images/icons/logo_cwa.svg') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main.v1.css') }}">
</head>
<body>
    <main>
        <section>
            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100">
                        <form method="post" action="{{ route('_login') }}" class="login100-form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <span class="login100-form-title p-b-50">
                                <h1 class="tittle">Congreso MFS</h1>
                                {{-- <i class=""> <img src="{{ url('images/icons/logo_cwa.png') }}" alt="logo cwa" class="logo_cwa"></i> --}}
                            </span>
                            <div class="block-names">
                                <div class="wrap-input100 validate-input" data-validate="Ingresar correo valido">
                                    <input class="input100" type="text" name="text" value="">
                                    <span class="focus-input100" data-placeholder="Nombre"></span>
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Ingresar correo valido">
                                    <input class="input100" type="text" name="text" value="">
                                    <span class="focus-input100" data-placeholder="Apellidos"></span>
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Ingresar correo valido">
                                    <input class="input100" type="text" name="email" value="">
                                    <span class="focus-input100" data-placeholder="Email"></span>
                                </div>
                            </div>
            
            
                            <div class="block-selects modificador ">
                                <div class="validate-input" data-validate="Ingresar correo valido">
                                    <select class="form-control">
                                        <option>Mazda Acapulco</option>
                                        <option>Mazda Acueducto</option>
                                        <option>Mazda Aguascalientes</option>
                                        <option>Mazda Américas</option>
                                        <option>Mazda Bajío</option>
                                        <option>Mazda Campeche</option>
                                        <option>Mazda Cancún</option>
                                        <option>Mazda Carmen</option>
                                        <option>Mazda Cd. Juárez</option>
                                        <option>Mazda Chiapas</option>
                                        <option>Mazda Chihuahua</option>
                                        <option>Mazda Churubusco</option>
                                        <option>Mazda Coatzacoalcos</option>
                                        <option>Mazda Colima</option>
                                        <option>Mazda Cuautla</option>
                                        <option>Mazda Cuernavaca</option>
                                        <option>Mazda Culiacán</option>
                                        <option>Mazda Cumbres</option>
                                        <option>Mazda Del Valle</option>
                                        <option>Mazda Durango</option>
                                        <option>Mazda Ecatepec</option>
                                        <option>Mazda Ensenada </option>
                                        <option>Mazda Galerías</option>
                                        <option>Mazda Gonzalitos</option>
                                        <option>Mazda Hermosillo</option>
                                        <option>Mazda Interlomas</option>
                                        <option>Mazda Irapuato</option>
                                        <option>Mazda La Joya</option>
                                        <option>Mazda Laguna</option>
                                        <option>Mazda Las Torres</option>
                                        <option>Mazda Lázaro Cárdenas</option>
                                        <option>Mazda Lindavista</option>
                                        <option>Mazda Manzanillo</option>
                                        <option>Mazda Mazatlán</option>
                                        <option>Mazda Metepec</option>
                                        <option>Mazda Mexicali</option>
                                        <option>Mazda Monclova</option>
                                        <option>Mazda Oaxaca</option>
                                        <option>Mazda Obregón</option>
                                        <option>Mazda Pachuca</option>
                                        <option>Mazda Picacho</option>
                                        <option>Mazda Picacho Suc. San Ángel</option>
                                        <option>Mazda Piedras Negras</option>
                                        <option>Mazda Plasencia</option>
                                        <option>Mazda Polanco</option>
                                        <option>Mazda Puebla</option>
                                        <option>Mazda Ral</option>
                                        <option>Mazda Ravisa</option>
                                        <option>Mazda Ravisa México</option>
                                        <option>Mazda Ravisa Uruapan</option>
                                        <option>Mazda Reynosa</option>
                                        <option>Mazda Salamanca</option>
                                        <option>Mazda Salina Cruz</option>
                                        <option>Mazda Saltillo</option>
                                        <option>Mazda San Luis</option>
                                        <option>Mazda San Luis Carranza</option>
                                        <option>Mazda San Luis Carretera 57</option>
                                        <option>Mazda Santa Anita</option>
                                        <option>Mazda Santa Fe</option>
                                        <option>Mazda Sendero</option>
                                        <option>Mazda Serdán</option>
                                        <option>Mazda Sureste</option>
                                        <option>Mazda Tabasco</option>
                                        <option>Mazda Tampico</option>
                                        <option>Mazda Tapachula</option>
                                        <option>Mazda Tepic</option>
                                        <option>Mazda Tijuana</option>
                                        <option>Mazda Tláhuac</option>
                                        <option>Mazda Universidad</option>
                                        <option>Mazda Vallarta</option>
                                        <option>Mazda Valle Oriente</option>
                                        <option>Mazda Veracruz</option>
                                        <option>Mazda Xalapa</option>
                                        <option>Mazda Zacatecas</option>
                                        <option>Mazda Zapata</option>
                                        <option>Mazda Zapata Celaya</option>
                                        <option>Mazda Zapata Cuautitlán</option>
                                        <option>Mazda Zapata Lindavista</option>
                                        <option>Mazda Zapata Querétaro</option>
                                        <option>Mazda Zapata San Juan del Río</option>
                                        <option>Mazda Zapata Torre Norte</option>
                                        <option>Mazda Zapata Zona Esmeralda</option>
                                        <option>Mazda Zapata Cuautitlán</option>
                                        <option>Mazda Zapata Lindavista</option>
                                        <option>Mazda Zapata Querétaro</option>
                                        <option>Mazda Zapata Querétaro</option>
                                        <option>Mazda Zapata San Juan del Río</option>
                                        <option>Mazda Zapata Torre Norte</option>
                                        <option>Mazda Collision Center Bajío</option>
                                        <option>Mazda Collision Center Ciudad del Carmen</option>
                                        <option>Mazda Collision Center Colima</option>
                                        <option>Mazda Collision Center Guadalajara</option>
                                        <option>Mazda Collision Center Huixquilucan </option>
                                        <option>Mazda Collision Center Las Torres</option>
                                        <option>Mazda Collision Center Picacho</option>
                                        <option>Mazda Collision Center Querétaro</option>
                                        <option>Mazda Collision Center Ral</option>
                                        <option>Mazda Collision Center Vallarta</option>
                                        <option>Mazda Collision Center Zapata</option>
                                        <option>Mazda México Corporativo </option>
                                        <option>Santander </option>
                                      </select>
                                    <span class="focus-input100_select" data-placeholder="Nombre">Distribuidor</span>
                                </div>

                                <div class="validate-input" data-validate="Ingresar correo valido">
                                    
                                    <select class="form-control">
                                        <option>Gerente de Ventas</option>
                                        <option>F&I</option>
                                        <option>Director Santander</option>
                                        <option>Subdirector Santander </option>
                                        <option>Gerente Santander </option>
                                        <option>Especialista MFS </option>
                                        <option>Gerente de Postventa </option>
                                        <option>Gerente Collision Center </option>
                                        <option>Gerente Administrativo</option>
                                        <option>Director Servicios Financieros</option>
                                        <option>Director de Operaciones</option>
                                        <option>Director de Finanzas </option>
                                        <option>Gerente de Servicios Financieros </option>
                                        <option>Encargada de Seguros </option>
                                        <option>Gerente  de Operaciones </option>
                                        <option>Gerente de Mercadotecnia </option>
                                        <option>Gerente de Relaciones Públicas </option>
                                      </select>
                                      <span class="focus-input100_select" data-placeholder="Nombre">Puesto</span>
                                </div>

                                {{-- <div class="wrap-input100 validate-input" data-validate="Ingresar correo valido">
                                    <input class="input100" type="text" name="text" value="">
                                    <span class="focus-input100" data-placeholder="Nombre"></span>
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Ingresar correo valido">
                                    <input class="input100" type="text" name="text" value="">
                                    <span class="focus-input100" data-placeholder="Apellidos"></span>
                                </div> --}}
                            </div>
            
            
                            <div class="block-names">
                                <div class="wrap-input100 validate-input" data-validate="Ingresar correo valido">
                                    <input class="input100" type="text" name="tell" value="" minlength="10" maxlength="10" >
                                    <span class="focus-input100" data-placeholder="Teléfono"></span>
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Ingresar correo valido">
                                    <input class="input100" type="datetime" name="text" value="">
                                    <span class="focus-input100" data-placeholder="Hora de llegada"></span>
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Ingresar correo valido">
                                    <input class="input100" type="text" name="alergías" value="">
                                    <span class="focus-input100" data-placeholder="Alergías "></span>
                                </div>
                            </div>
            
                            <div class="block-selects">
                                <div class="wrap-input100 validate-input" data-validate="Ingresar correo valido">
                                    {{-- <input class="input100" type="text" name="text" value="">
                                    <span class="focus-input100" data-placeholder="Extiendo mi estancia"></span> --}}
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="checkData" value="option1" onchange="javascript:showContent()">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Si
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="checkData" value="option2" onchange="javascript:showContent()">
                                        <label class="form-check-label" for="exampleRadios2">
                                            No
                                        </label>
                                      </div>
                                </div>
                                <input class="input100" type="date" name="text" value="" id="fechaEvent" style="display: none">
                                {{-- <div class="wrap-input100 validate-input" data-validate="Ingresar correo valido">
                                    
                                    <span class="focus-input100" data-placeholder="Apellidos"></span>
                                </div> --}}
                            </div>
                            
            
                            {{-- <div class="wrap-input100 validate-input" data-validate="Ingresar una contraseña">
                                    <span class="btn-show-pass">
                                        <i class="zmdi zmdi-eye"></i>
                                    </span>
                                <input class="input100" type="password" name="password" value="">
                                <span class="focus-input100" data-placeholder="Password"></span>
                            </div> --}}
            
                            {{-- <div class="text-uppercase text-center" style="font-size: 0.8rem;">
                                Toda la información transmitida en este evento es estrictamente confidencial.
                            </div> --}}
                            <div class="button_register-home">
                                <button type="submit" class="login100-form-btn">
                                    <span class="bob">Registrar</span>
                                </button>
                            </div>
                            
                            {{-- <div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                    <div class="login100-form-bgbtn"></div>
                                    <button type="submit" class="login100-form-btn">
                                        <span class="bob">Login</span>
                                    </button>
                                </div>
                            </div> --}}
            
                            {{-- <div class="text-center p-t-30">
                                <a class="txt2" href="https://api.whatsapp.com/send?phone=5215562329209&text=" target="_target">
                                    ¿Necesitas ayuda?
                                </a><br>
                                <a class="txt2" href="https://api.whatsapp.com/send?phone=5215562329209&text=" target="_target">
                                    Envía un WhatsApp al +55 62 32 92 09
                                </a>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="login_agenda">
            <div class="container">
                <h4 class="text-center mb-5 tittle_agent">Agenda</h4>
                <div class="main-timeline">
        
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                    <span class="month">11 DE MAYO</span>
                                    <span class="year">2022</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title">14:00</h5>
                            <p class="description">
                                Comida libre en restaurantes del hotel
                            </p>
                            <h5 class="title">15:30 – 19:00</h5>
                            <p class="description">
                                Sesión de trabajo (Salón Sanctuary)
                            </p>
                            <h5 class="title">20:00</h5>
                            <p class="description">
                                Cena de bienvenida (Salón Sanctuary)
                            </p>
                            <h5 class="title">23:00</h5>
                            <p class="description">
                                Fin del evento
                            </p>
                        </div>
                    </div>
        
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                    <span class="month">12 DE MAYO</span>
                                    <span class="year">2022</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title">07:00 – 8:45</h5>
                            <p class="description">
                                Desayuno (Restaurante Market)
                            </p>
                            <h5 class="title">09:00- 15:00</h5>
                            <p class="description">
                                Sesión de trabajo (Salón Sanctuary)
                            </p>
                            <h5 class="title">15:00 – 16:00</h5>
                            <p class="description">
                                Comida Libre en restaurantes del hotel
                            </p>
                            <h5 class="title">16:00 – 18:00</h5>
                            <p class="description">
                                Sesión de trabajo Plan 2025 (Salón Sanctuary)
                            </p>
                            <h5 class="title">20:00</h5>
                            <p class="description">
                                Cena de Clausura (Playa Sunset)
                            </p>
                            <h5 class="title">21:30</h5>
                            <p class="description">
                                Show (Salón Sanctuary)
                            </p>
                            <h5 class="title">23:00</h5>
                            <p class="description">
                                Fin de actividades
                            </p>
        
                        </div>
                    </div>
        
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                    <span class="month">13 DE MAYO </span>
                                    <span class="year">2022</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title">08:00</h5>
                            <p class="description">
                                Desayuno Hotel
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</main>


<script>
    
</script>
<script src="{{ url('vendor/jquery/jquery-3.2.1.min.js')  }}"></script>
<script src="{{ url('vendor/animsition/js/animsition.min.js')  }}"></script>
<script src="{{ url('vendor/bootstrap/js/popper.js')  }}"></script>
<script src="{{ url('vendor/bootstrap/js/bootstrap.min.js')  }}"></script>
<script src="{{ url('vendor/select2/select2.min.js')  }}"></script>
<script src="{{ url('vendor/daterangepicker/moment.min.js')  }}"></script>
<script src="{{ url('vendor/daterangepicker/daterangepicker.js')  }}"></script>
<script src="{{ url('vendor/countdowntime/countdowntime.js')  }}"></script>
<script src="{{ url('js/main-login.js')  }}"></script>
</body>
</html>
