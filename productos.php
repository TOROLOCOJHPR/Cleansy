<?php 
    $titulo="Productos";
    $categoria = "";
    if(isset($_GET['categoria'])){
        $categoria = $_GET['categoria'];
    }
?>
<!DOCTYPE html>
<html lang="es">
<?php include 'include/header.php'?>
    <body>
        <?php 
            include 'mod/menu.php';
            if($categoria != ""){
                include 'mod/productos/productos.php';
            }else{
        ?>
            <div class="mh-80">
        <?php
            include 'mod/productos/lista.php';
        ?>
            </div>
        <?php
            }
            include 'mod/footer.php';
            include 'include/jsFiles.php'
        ?>
    </body>
</html>