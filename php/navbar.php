<nav>
    <ul>
        <?php if (isset($mostrarMenu) && $mostrarMenu) { ?>
            <li><a href="/php/menu.php">MENU <span class="burger-icon"><img src="../img/hamburger.ico" alt=""></span></a></li>       
        <?php }
        ?>
        <?php if (isset($mostrarHome) && $mostrarHome) { ?>
            <li><a href="/index.php">HOME <span class="burger-icon"><img src="../img/hamburger.ico" alt=""></span></a></li>       
        <?php }
        ?>   
        <?php if (isset($mostrarCarrito) && $mostrarCarrito) { ?>
            <li><a href="/php/carrito.php">CARRITO <span class="burger-icon"><img src="../img/hamburger.ico" alt=""></span></a></li>       
        <?php }
        ?>   
        <?php if (isset($mostrarNosotros) && $mostrarNosotros) { ?>
            <li><a href="/php/nosotros.php">NOSOTROS <span class="burger-icon"><img src="../img/hamburger.ico" alt=""></span></a></li>       
        <?php }
        ?>       
    </ul>
</nav>