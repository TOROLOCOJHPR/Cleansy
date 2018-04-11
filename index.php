<?php 
    //titulo del documento
    $titulo ="Inicio-Cleansy";
    //header
    include 'include/header.php' ;
?>
<body>
    <?php include 'mod/menu.php';?>
    <!-- slider -->
    <div class="w-100 position-relative text-white ff-Reenie t-shadow-2-black" style="overflow:hidden; height:90vh;">
        <!-- slide -->
        <div id="sliderPrincipal" class="w-100 h-100 d-flex flex-column flex-wrap" style="line-height:3.3rem;">
            <!-- contenedor uno -->
            <div class="w-100 h-100 bg-primary">
                <div class="imgSlider bg-cover-center w-100 h-100 position-absolute bg-success" style="background-image:url('/img/Home1.jpg');"></div>
                <div class=" item w-100 position-absolute text-right px-2 px-md-4">
                    <span>Todo lo que necesites</span><br>
                    <span>y un Poco mas</span>
                </div>
            </div>
            <!-- contenedor dos -->
            <div class="w-100 h-100 bg-secondary">
                <div class="imgSlider bg-cover-center w-100 h-100 position-absolute bg-primary" style="background-image:url('/img/Home2.jpg');"></div>
                <div class=" item w-100 position-absolute text-right px-2 px-md-4">
                    <span>Manten tu Empresa limpia,</span><br>
                    <span>en Cleansy tenemos lo que necesitas</span>
                </div>
            </div>
        </div>
    </div>
    <!-- botones -->
    <!-- <div class="w-100 h-100 bg-secondary"></div> -->
</body>
<?php
    include 'include/jsFiles.php';
    include'include/footer.php'; 
?>