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
    <div class="w-100 position-relative text-center">
        <h2 class="t-under-line-purple">PRODUCTOS PARA</h2>
        <div class="row">
            <div class="col-12 col-sm-8 col-md-4 mx-auto p-3">
                <a class="w-50 d-block text-dark mx-auto mx-md-0 ml-md-auto" href="/productos/#hogar">
                    <svg version="1.1" width="100%" fill="#c8802c" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 611.997 611.998" style="enable-background:new 0 0 611.997 611.998;" xml:space="preserve">
                        <path d="M511.114,300.251c-9.94,0-17.638,7.663-17.638,17.651v241.105H368.401v-98.453c0-9.236-7.697-17.31-17.002-17.31h-90.435    c-9.948,0-17.96,8.073-17.96,17.31v98.453h-124.76v-233.1c0-9.306-7.69-17.036-17.638-17.036c-9.298,0-16.995,7.73-16.995,17.036    v250.752c0,9.305,7.697,17.036,16.995,17.036h160.358c9.298,0,16.995-7.731,16.995-17.036v-98.454h55.801v98.454    c0,9.305,7.697,17.036,17.639,17.036h159.715c9.299,0,16.995-7.731,16.995-17.036V317.903    C528.109,307.915,520.413,300.251,511.114,300.251z"></path>
		                <path d="M607.003,314.003L467.819,174.225V78.919c0-9.921-8.019-17.583-17.96-17.583c-9.305,0-17.001,7.663-17.001,17.583v60.345    L318.046,23.774c-3.518-3.558-7.697-5.474-11.864-5.474c-4.81,0-8.983,1.984-12.507,5.474L5.361,312.087    c-6.917,6.91-7.375,17.994,0,24.357c6.411,7.389,17.454,6.91,24.371,0l276.45-275.793l275.807,278.393    c2.873,2.874,7.054,4.516,12.507,4.516c4.81,0,8.976-1.642,12.507-4.516C613.42,332.613,613.899,320.982,607.003,314.003z"></path>
                    </svg>
                    <span>Hogar</span>
                </a>
            </div>
            <div class="col-12 col-sm-8 col-md-4 p-3 mx-auto">
                <a class="w-50 d-block text-dark mx-auto" href="/productos/#oficina">
                    <svg version="1.1" id="Capa_1"  width="100%" fill="#c8802c" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
	                    <path d="M488.727,279.273c-6.982,0-11.636,4.655-11.636,11.636v151.273c0,6.982-4.655,11.636-11.636,11.636H46.545    c-6.982,0-11.636-4.655-11.636-11.636V290.909c0-6.982-4.655-11.636-11.636-11.636s-11.636,4.655-11.636,11.636v151.273    c0,19.782,15.127,34.909,34.909,34.909h418.909c19.782,0,34.909-15.127,34.909-34.909V290.909    C500.364,283.927,495.709,279.273,488.727,279.273z"></path>
		                <path d="M477.091,116.364H34.909C15.127,116.364,0,131.491,0,151.273v74.473C0,242.036,11.636,256,26.764,259.491l182.691,40.727    v37.236c0,6.982,4.655,11.636,11.636,11.636h69.818c6.982,0,11.636-4.655,11.636-11.636v-37.236l182.691-40.727    C500.364,256,512,242.036,512,225.745v-74.473C512,131.491,496.873,116.364,477.091,116.364z M279.273,325.818h-46.545v-46.545    h46.545V325.818z M488.727,225.745c0,5.818-3.491,10.473-9.309,11.636l-176.873,39.564v-9.309c0-6.982-4.655-11.636-11.636-11.636    h-69.818c-6.982,0-11.636,4.655-11.636,11.636v9.309L32.582,237.382c-5.818-1.164-9.309-5.818-9.309-11.636v-74.473    c0-6.982,4.655-11.636,11.636-11.636h442.182c6.982,0,11.636,4.655,11.636,11.636V225.745z"></path>
		                <path d="M314.182,34.909H197.818c-19.782,0-34.909,15.127-34.909,34.909v11.636c0,6.982,4.655,11.636,11.636,11.636    s11.636-4.655,11.636-11.636V69.818c0-6.982,4.655-11.636,11.636-11.636h116.364c6.982,0,11.636,4.655,11.636,11.636v11.636    c0,6.982,4.655,11.636,11.636,11.636c6.982,0,11.636-4.655,11.636-11.636V69.818C349.091,50.036,333.964,34.909,314.182,34.909z"></path>
                    </svg>
                    <span>Oficina</span>
                </a>
            </div>
            <div class="col-12 col-sm-8 col-md-4 p-3 mx-auto">
                <a class="w-50 d-block text-dark mx-auto mx-md-0 mr-md-auto" href="/productos/#auto">
                    <svg fill="#c8802c" width="100%" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 336 336" style="enable-background:new 0 0 336 336;" xml:space="preserve">
                        <path d="M312,123.2c0-0.4,0-0.8,0-1.2l-18.4-82.8c-4-18.4-20.4-31.6-39.2-31.6H77.6c-18.8,0-35.2,13.2-39.2,31.6L20,122.4     c-0.4,1.2-0.4,2,0,3.2c-12,6.8-20,20-20,34.8v80c0,12.4,6.8,22.8,16.4,30c0,0.4-0.4,1.2-0.4,2v28c0,15.6,12.4,28,28,28h8     c15.6,0,28-12.4,28-28v-20h176v20c0,15.6,12.4,28,28,28h8c15.6,0,28-12.4,28-28v-28c9.6-7.2,16-18.8,16-32V160     C336,143.6,326,129.6,312,123.2z M54.4,42.8C56.8,32,66.4,24,77.6,24h176.8c11.2,0,21.2,8,23.2,18.8l17.2,77.2H40     c-0.8,0-2,0-2.8,0L54.4,42.8z M64,300c0,6.8-5.2,12-12,12h-8c-6.8,0-12-5.2-12-12v-22c4,1.2,8,2,12,2h20V300z M304,300     c0,6.8-5.2,12-12,12h-8c-6.8,0-12-5.2-12-12v-20h24c2.8,0,5.6-0.4,8-0.8V300z M320,240c0,13.2-10.8,24-24,24H44     c-12.8,0-28-10.8-28-24v-80c0-13.2,10.8-24,24-24h256c13.2,0,24,10.8,24,24V240z"></path>
			            <path d="M60,172c-13.2,0-24,10.8-24,24s10.8,24,24,24s24-10.8,24-24S73.2,172,60,172z M60,204c-4.4,0-8-3.6-8-8c0-4.4,3.6-8,8-8     c4.4,0,8,3.6,8,8C68,200.4,64.4,204,60,204z"></path>
			            <path d="M276,172c-13.2,0-24,10.8-24,24s10.8,24,24,24s24-10.8,24-24S289.2,172,276,172z M276,204c-4.4,0-8-3.6-8-8     c0-4.4,3.6-8,8-8c4.4,0,8,3.6,8,8C284,200.4,280.4,204,276,204z"></path>
                    </svg>
                    <span>Auto</span>
                </a>
            </div>
        </div>
    </div>
</body>
<?php
    include 'include/jsFiles.php';
    include'include/footer.php'; 
?>