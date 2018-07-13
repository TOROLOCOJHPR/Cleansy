<?php 
    $titulo="Para tu empresa";
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
                include 'mod/para tu empresa/productos.php';
            }else{
        ?>
            <div class="mh-80">
        <?php  
                include 'mod/para tu empresa/lista.php';
        ?>
            </div>
        <?php
            }
            include 'mod/footer.php';
            include 'include/jsFiles.php'
        ?>
    </body>
</html>