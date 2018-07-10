<?php $titulo ="Inicio-Cleansy"?>
<!DOCTYPE html>
<html lang="es">
<?php include 'include/header.php'?>
    <body>
        <?php include 'mod/menu.php'?>

        <!-- slider -->
        <div class="row mx-0">
            <div class="slider col-12 col-md-7 p-0 position-relative text-white ff-Luna t-shadow-2-black" style="overflow:hidden;">
                <div id="carousel-principal" class="carousel slide h-100" data-ride="carousel">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active h-100">
                            <img class="d-block w-100 h-100 img-cover-right" src="/img/productos-de-limpieza.jpg" alt="productos de limpieza">
                            <div class="carousel-caption">
                                <h2 class="text-shadow">La mejor calidad en productos de limpieza</h2>
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <img class="d-block w-100 h-100 img-cover" src="/img/productos-de-limpieza-hogar.jpg" alt="productos de limpieza hogar">
                            <div class="carousel-caption">
                                <h2 class="text-shadow">Paquetes hechos a tu medida</h2>
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <img class="d-block w-100 h-100 img-cover" src="/img/productos-liquidos.jpg" alt="productos de limpieza liquidos">
                            <div class="carousel-caption">
                                <h2 class="text-shadow">Todo lo que necesitas y un poco más</h2>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev h-100" href="#carousel-principal" role="button" data-slide="prev">
                        <svg style="height:1.5rem" viewBox="0 0 444.819 444.819">
                            <g transform="matrix(-1, 1.22465e-16, -1.22465e-16, -1, 444.819, 444.819)">
                        	    <path fill="#74487f" d="M352.025,196.712L165.884,10.848C159.029,3.615,150.469,0,140.187,0c-10.282,0-18.842,3.619-25.697,10.848L92.792,32.264   c-7.044,7.043-10.566,15.604-10.566,25.692c0,9.897,3.521,18.56,10.566,25.981l138.753,138.473L92.786,361.168   c-7.042,7.043-10.564,15.604-10.564,25.693c0,9.896,3.521,18.562,10.564,25.98l21.7,21.413   c7.043,7.043,15.612,10.564,25.697,10.564c10.089,0,18.656-3.521,25.697-10.564l186.145-185.864   c7.046-7.423,10.571-16.084,10.571-25.981C362.597,212.321,359.071,203.755,352.025,196.712z" data-original="#000000"></path>
                            </g>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next h-100" href="#carousel-principal" role="button" data-slide="next">
                        <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                        <svg style="height:1.5rem" viewBox="0 0 444.819 444.819">
                        	<path fill="#74487f" d="M352.025,196.712L165.884,10.848C159.029,3.615,150.469,0,140.187,0c-10.282,0-18.842,3.619-25.697,10.848L92.792,32.264   c-7.044,7.043-10.566,15.604-10.566,25.692c0,9.897,3.521,18.56,10.566,25.981l138.753,138.473L92.786,361.168   c-7.042,7.043-10.564,15.604-10.564,25.693c0,9.896,3.521,18.562,10.564,25.98l21.7,21.413   c7.043,7.043,15.612,10.564,25.697,10.564c10.089,0,18.656-3.521,25.697-10.564l186.145-185.864   c7.046-7.423,10.571-16.084,10.571-25.981C362.597,212.321,359.071,203.755,352.025,196.712z"></path>
                        </svg>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div><!-- slider -->

            <!-- promoción -->
            <div class="slider col-12 col-md-5 bg-secondary">
                
            </div><!-- promoción -->
        </div>

        <!-- botones -->
        <div class="w-100 position-relative text-center">
            <h2 class="py-4">PRODUCTOS PARA</h2>
            <div id="botones" class="row mx-0 justify-content-center">

                <div class="col-12 col-sm-6 col-md-3 p-3">
                    <a class="w-50 d-block text-dark mx-auto" href="/productos?categoria=sala">
                        <img src="/img/iconos/sala.jpg" alt="productos de sala">
                        <p class="pt-3 mb-0">Sala</p>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-3 p-3">
                    <a class="w-50 d-block text-dark mx-auto" href="/productos?categoria=cocina">
                        <img src="/img/iconos/cocina.jpg" alt="productos de cocina">
                        <p class="pt-3 mb-0">Cocina</p>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-3 p-3">
                    <a class="w-50 d-block text-dark mx-auto" href="/productos?categoria=comedor">
                        <img src="/img/iconos/comedor.jpg" alt="productos de comedor">
                        <p class="pt-3 mb-0">Comedor</p>
                    </a>
                </div>
                <!-- ficticios -->
                <div class="col-12 col-sm-6 col-md-3 p-3">
                    <a class="w-50 d-block text-dark mx-auto" href="/productos?categoria=recamara">
                        <img src="/img/iconos/recamara.jpg" alt="productos de recamara">
                        <p class="pt-3 mb-0">Recamara</p>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-3 p-3">
                    <a class="w-50 d-block text-dark mx-auto" href="/productos?categoria=baño">
                        <img src="/img/iconos/baño.jpg" alt="productos de baño">
                        <p class="pt-3 mb-0">Baño</p>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-3 p-3">
                    <a class="w-50 d-block text-dark mx-auto" href="/productos?categoria=pisos">
                        <img src="/img/iconos/pisos.jpg" alt="productos de pisos">
                        <p class="pt-3 mb-0">Pisos</p>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-3 p-3">
                    <a class="w-50 d-block text-dark mx-auto" href="/productos?categoria=muebles">
                        <img src="/img/iconos/muebles.jpg" alt="productos de muebles">
                        <p class="pt-3 mb-0">Muebles</p>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-3 p-3">
                    <a class="w-50 d-block text-dark mx-auto" href="/productos?categoria=auto">
                        <img src="/img/iconos/auto.jpg" alt="productos de auto">
                        <p class="pt-3 mb-0">Auto</p>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-3 p-3">
                    <a class="w-50 d-block text-dark mx-auto" href="/productos?categoria=exteriores">
                        <img src="/img/iconos/exteriores.jpg" alt="productos de exteriores">
                        <p class="pt-3 mb-0">Exteriores</p>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-3 p-3">
                    <a class="w-50 d-block text-dark mx-auto" href="/productos?categoria=lavado">
                        <img src="/img/iconos/lavado.jpg" alt="productos de lavado">
                        <p class="pt-3 mb-0">Lavado</p>
                    </a>
                </div>
    
            </div><!-- row -->
        </div>

    <?php include 'mod/footer.php';include 'include/jsFiles.php'?>
    </body>
<html