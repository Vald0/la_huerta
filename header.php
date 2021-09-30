<?php session_start();
if ($_SESSION['usuario'] == ''){
    header("Location:login.php?err_login=0");
 }
?>
<?php header("Content-Type: text/html;charset=utf-8"); ?>
<header>
    <a href="index.php">
    <div class="logo-place ">
        <img src="assets/logo.png" alt="logotipo">
    </div>
    </a>
    <div class="search-place desktop">
        <input type="text" id="idbusqueda" placeholder="Encuentra todo lo que necesitas">
        <button class="btn-main btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
    <div class="options-place desktop">
        <div class="item-option" title="Foto de perfil de <?php echo $_SESSION['usuario']['nombre'];?>">

            <!-- <a href="admin.php"> -->
                <img class="perfil" src="img/<?php echo $_SESSION['usuario']['file_name'];?>" alt="imagen de perfil">
                 <!-- <i class="fas fa-user" aria-hidden="true"></i> -->
                
                
                <!-- </a> -->
        </div>
        <div class="item-option" title="Salir">
            <a href="close_Login.php"><i class="fas fa-sign-in-alt" aria-hidden="true"></i></a>
        </div>
        <div class="item-option" title="Mis compras" style="display:flex;">
        
            <a href="carrito.php"><i class="fas fa-shopping-cart" aria-hidden="true"></i></a>
            <span class="selected_count" id="conteo_carro"></span>
        </div>
    </div>

    <!--↓ Navbar Hamburguesa ↓-->

    <div class="hamburguesa">
        <nav class="ham "> </nav>
        <nav class="ham "> </nav>
        <nav class="ham "> </nav>
    </div>

    <div class="fondo">

    </div>
    <div class="transparente"> </div>
    <div class="contMovil" id="contenedor">
        <div class="link">
            <input class="search-movile" type="text" id="idbusqueda" placeholder="Encuentra todo lo que necesitas">
            <button class="btn-main btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
        <!-- <a href="#" class="link">Iniciar sesión <i class="fas fa-user" aria-hidden="true"></i></a> -->
        <a href="close_Login.php" class="link">Cerrar sesión <i class="fas fa-sign-in-alt" aria-hidden="true"></i></a>
        
        <a href="carrito.php" class="link">Carrito <i class="fas fa-shopping-cart" aria-hidden="true"></i><span class="selected_count"></span></a>


    </div>



</header>
<script src="js/hamburguesa.js"></script>