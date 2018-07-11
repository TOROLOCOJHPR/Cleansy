<?php 
    $titulo="Productos";
    $categoria = $_GET['categoria'];
    
    $sala = array(
        ['producto'=>'Aromas',"src"=>"/img/productos/aromas.jpg"],
        ['producto'=>'Limpia pisos',"src"=>"/img/productos/.jpg"],
        ['producto'=>'Limpia cristal',"src"=>"/img/productos/limpia-cristal.jpg"],
        ['producto'=>'Limpiador desinfectante',"src"=>"/img/productos/limpiador-desinfectante.jpg"],
        ['producto'=>'Escoba',"src"=>"/img/productos/escoba-sala.jpg"],
        ['producto'=>'Trapeador',"src"=>"/img/productos/trapeador.jpg"],
        ['producto'=>'Plumero',"src"=>"/img/productos/plumero.jpg"],
        ['producto'=>'Franela',"src"=>"/img/productos/franela.jpg"],
        ['producto'=>'Abrillantador de muebles',"src"=>"/img/productos/abrillantador-de-muebles.jpg"]
    );
    $cocina = array(
        ['producto'=>'Desengrasante',"src"=>"/img/productos/desengrasante.jpg"],
        ['producto'=>'Detergente para loza',"src"=>"/img/productos/detergente-para-loza.jpg"],
        ['producto'=>'Shampoo liquido para manos',"src"=>"/img/productos/shampoo-liquido-para-manos.jpg"],
        ['producto'=>'Dragan',"src"=>"/img/productos/Dragan.jpg"],
        ['producto'=>'Gel antibacterial',"src"=>"/img/productos/gel-antibacterial.jpg"],
        ['producto'=>'Bomba destapa loza',"src"=>"/img/productos/bomba-destapa-loza.jpg"],
        ['producto'=>'Fibras para loza',"src"=>"/img/productos/fibras-para-loza.jpg"],
        ['producto'=>'Guantes',"src"=>"/img/productos/guantes.jpg"],
        ['producto'=>'Cofias',"src"=>"/img/productos/cofias.jpg"],
        ['producto'=>'Detergente en polvo',"src"=>"/img/productos/detergente-en-polvo.jpg"],
        ['producto'=>'Bolsas',"src"=>"/img/productos/bolsas.jpg"],
        ['producto'=>'Higiénicos',"src"=>"/img/productos/higienicos.jpg"],
        ['producto'=>'Trapeadores antibacteriales',"src"=>"/img/productos/trapeadores-antibacteriales.jpg"],
        ['producto'=>'Jaboneras',"src"=>"/img/productos/jaboneras.jpg"]
    );
    $comedor = array(
        ['producto'=>'Abrillantador de muebles',"src"=>"/img/productos/abrillantador-de-muebles.jpg"],
        ['producto'=>'Escoba',"src"=>"/img/productos/escoba-comedor.jpg"],
        ['producto'=>'Trapeador',"src"=>"/img/productos/trapeador-comedor.jpg"],
        ['producto'=>'Franela',"src"=>"/img/productos/franela-comedor.jpg"],
        ['producto'=>'Limpiador de pisos',"src"=>"/img/productos/limpia-pisos.jpg"],
        ['producto'=>'Liquido desinfectante',"src"=>"/img/productos/liquido-desinfectante.jpg"],
        ['producto'=>'Bolsas',"src"=>"/img/productos/bolsas.jpg"],
        ['producto'=>'Cestos',"src"=>"/img/productos/cestos.jpg"]
    );
    $recamara = array(
        ['producto'=>'escoba',"src"=>"/img/productos/escoba-recamara.jpg"],
        ['producto'=>'Abrillantador de muebles',"src"=>"/img/productos/abrillantador-de-muebles.jpg"],
        ['producto'=>'Trapeador',"src"=>"/img/productos/trapeador-recamara.jpg"],
        ['producto'=>'Franela',"src"=>"/img/productos/franela.jpg"],
        ['producto'=>'Limpiador de pisos',"src"=>"/img/productos/limpiador-de-pisos.jpg"],
        ['producto'=>'Liquido desinfectante',"src"=>"/img/productos/liquido desinfectante.jpg"],
        ['producto'=>'Bolsas',"src"=>"/img/productos/bolsas.jpg"],
        ['producto'=>'Cestos',"src"=>"/img/productos/cestos.jpg"],
        ['producto'=>'Pinol',"src"=>"/img/productos/pinol.jpg"],
        ['producto'=>'Recogedor',"src"=>"/img/productos/recogedor-recamara.jpg"]
    );
    $baño = array(
        ['producto'=>'Sarricida',"src"=>"/img/productos/sarricida.jpg"],
        ['producto'=>'Ácido muriático',"src"=>"/img/productos/acido-muriatico.jpg"],
        ['producto'=>'Limpia pisos',"src"=>"/img/productos/limpia-pisos.jpg"],
        ['producto'=>'Aromas ambientales',"src"=>"/img/productos/aromatizante-ambiental.jpg"],
        ['producto'=>'Shampoo líquido para manos',"src"=>"/img/productos/shampoo-liquido-para-manos-baño.jpg"],
        ['producto'=>'Limpia cristal',"src"=>"/img/productos/limpia-cristal.jpg"],
        ['producto'=>'Quita gotas',"src"=>"/img/productos/quita-gotas.jpg"],
        ['producto'=>'Pastillas',"src"=>"/img/productos/pastillas.jpg"],
        ['producto'=>'Tapetes',"src"=>"/img/productos/tapetes.jpg"],
        ['producto'=>'Aerosoles',"src"=>"/img/productos/aerosoles.jpg"],
        ['producto'=>'Jabones',"src"=>"/img/productos/jabones.jpg"],
        ['producto'=>'Cepillo W/C',"src"=>"/img/productos/cepillo-w-c.jpg"],
        ['producto'=>'Bolsas para basura',"src"=>"/img/productos/bolsas.jpg"],
        ['producto'=>'Bombas',"src"=>"/img/productos/bombas.jpg"],
        ['producto'=>'Higiénicos',"src"=>"/img/productos/higienicos.jpg"],
        ['producto'=>'Despachadores',"src"=>"/img/productos/despachadores.jpg"],
        ['producto'=>'Cestos',"src"=>"/img/productos/cestos.jpg"]
    );
    $pisos = array(
        ['producto'=>'Limpia pisos',"src"=>"/img/productos/limpia-pisos.jpg"],
        ['producto'=>'escoba',"src"=>"/img/productos/escoba-pisos.jpg"],
        ['producto'=>'Trapeador',"src"=>"/img/productos/trapeador-pisos.jpg"],
        ['producto'=>'Desinfectantes',"src"=>"/img/productos/desinfectantes.jpg"],
        ['producto'=>'Recogedor',"src"=>"/img/productos/recogedor-pisos.jpg"]
    );
    $muebles = array(
        ['producto'=>'Abrillantador de muebles',"src"=>"/img/productos/abrillantador-de-muebles.jpg"],
        ['producto'=>'Plumero',"src"=>"/img/productos/plumero.jpg"],
        ['producto'=>'Desinfectante',"src"=>"/img/productos/desinfectante.jpg"],
        ['producto'=>'Franela',"src"=>"/img/productos/franela.jpg"]
    );
    $auto = array(
        ['producto'=>'Escobetas',"src"=>"/img/productos/escobetas.jpg"],
        ['producto'=>'Armorall azul',"src"=>"/img/productos/armorall-azul.jpg"],
        ['producto'=>'Armorall blanco',"src"=>"/img/productos/armorall-blanco.jpg"],
        ['producto'=>'Silicream',"src"=>"/img/productos/silicream.jpg"],
        ['producto'=>'Teflón',"src"=>"/img/productos/teflon.jpg"],
        ['producto'=>'Cera para auto',"src"=>"/img/productos/cera-para-auto.jpg"],
        ['producto'=>'Shampoo para auto',"src"=>"/img/productos/shampoo-para-auto.jpg"],
        ['producto'=>'Desengresante',"src"=>"/img/productos/desengrasante.jpg"],
        ['producto'=>'Aromas Ambientales',"src"=>"/img/productos/aromatizante-ambiental-auto.jpg"],
        ['producto'=>'Guante para carro',"src"=>"/img/productos/guante-para-carro.jpg"],
        ['producto'=>'Esponjas',"src"=>"/img/productos/esponjas.jpg"],
    );
    $exteriores = array(
        ['producto'=>'EScobas',"src"=>"/img/productos/escoba-exteriores.jpg"],
        ['producto'=>'Recogedores',"src"=>"/img/productos/recogedor.jpg"],
        ['producto'=>'Trapeadores',"src"=>"/img/productos/trapeador-exteriores.jpg"],
        ['producto'=>'Limpia vidrios',"src"=>"/img/productos/limpia-vidrios.jpg"],
        ['producto'=>'Desinfectante',"src"=>"/img/productos/desinfectante.jpg"],
        ['producto'=>'Cepillos',"src"=>"/img/productos/cepillos.jpg"],
        ['producto'=>'Franelas',"src"=>"/img/productos/franela-exteriores.jpg"],
        ['producto'=>'Limpia pisos',"src"=>"/img/productos/limpia-pisos.jpg"],
        ['producto'=>'Bolsas',"src"=>"/img/productos/bolsas.jpg"],
        ['producto'=>'Cestos',"src"=>"/img/productos/cestos-exteriores.jpg"],
    );
    $lavado = array(
        ['producto'=>'Detergente',"src"=>"/img/productos/detergente.jpg"],
        ['producto'=>'Detergente de ropa',"src"=>"/img/productos/detergente-de-ropa.jpg"],
        ['producto'=>'Suavitel',"src"=>"/img/productos/suavitel.jpg"],
        ['producto'=>'Pinol',"src"=>"/img/productos/pinol.jpg"],
        ['producto'=>'Cloro',"src"=>"/img/productos/cloro.jpg"],
        ['producto'=>'Vanish',"src"=>"/img/productos/vanish.jpg"],
        ['producto'=>'Detergente en polvo',"src"=>"/img/productos/detergente-en-polvo.jpg"],
        ['producto'=>'Microfibras',"src"=>"/img/productos/microfibras.jpg"],
        ['producto'=>'Escobas',"src"=>"/img/productos/escoba-lavado.jpg"],
        ['producto'=>'Trapeadores',"src"=>"/img/productos/trapeador-lavado.jpg"],
        ['producto'=>'Ganchos',"src"=>"/img/productos/ganchos.jpg"],
        ['producto'=>'Pinzas',"src"=>"/img/productos/pinzas.jpg"],
        ['producto'=>'Cepillos',"src"=>"/img/productos/cepillo-lavado.jpg"],
        ['producto'=>'Recogedores',"src"=>"/img/productos/recogedor-recamara.jpg"],
    );

    $productos = "";

    if($categoria == "sala"){$productos = $sala;}
    if($categoria == "cocina"){$productos = $cocina;}
    if($categoria == "comedor"){$productos = $comedor;}
    if($categoria == "recamara"){$productos = $recamara;}
    if($categoria == "baño"){$productos = $baño;}
    if($categoria == "pisos"){$productos = $pisos;}
    if($categoria == "muebles"){$productos = $muebles;}
    if($categoria == "auto"){$productos = $auto;}
    if($categoria == "exteriores"){$productos = $exteriores;}
    if($categoria == "lavado"){$productos = $lavado;}
?>
<!DOCTYPE html>
<html lang="es">
<?php include 'include/header.php'?>
    <body>
        <?php include 'mod/menu.php'?>
            <h2 class="text-center py-3"><?php echo $categoria?></h2>
            <div class="row mx-0  justify-content-center">
            <?php 
                foreach($productos as $row){
                    ?>
                    <div class="col-md-4 col-lg-3 my-3" style="height:300px; width:100%;">
                        <!-- tarjeta -->
                        <div class=" tarjeta-producto border rounded d-flex flex-column mx-auto">
                            <!-- imagen -->
                            <div class="h-75 w-100 d-flex align-items-center">
                                <?php echo "<img src='".$row['src']."' alt='producto ".$row['producto']."'>" ?>
                            </div><!-- imagen -->
                            <!-- nombre del producto -->
                            <div class="flex-grow-1 w-100 border-top d-flex align-items-center justify-content-center">
                                <div>
                                    <p class="mb-0"><?php echo $row['producto']?></p>
                                </div>
                            </div><!-- nombre del producto -->
                        </div><!-- tarjeta -->
                    </div>
                    <?php
                }//foreach productos
            ?>
            </div><!-- row -->
        </div>
        <?php include 'mod/footer.php';include 'include/jsFiles.php'?>
    </body>
</html>