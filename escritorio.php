<?php
/*
Archivo principal de la aplicación que consiste en el escritorio a partir del cual el usuario administrador puede realizar cualquier operación con la información contenida en la base de datos 
*/
    session_start();
    if(!isset($_SESSION['login'])){
        header("Location: index.html");
    }
    include "inc/calculapagina.php";
?>
<!DOCTYPE html>
<html>
    <head>
    <?php include "inc/cabeza.php"?>
    </head>
    <body>
        <header>
            <h1>
                <img id="logo" src="https://evo-luciona.es/static/logo/evopanel.svg" alt="Logo">
                Evoluciona | EvoPanel
            </h1>
            <div id="cerrarsesion">
                <a href="logout.php">
                    <img id="logout" src="img/disconnect.png" alt="Cerrar sesión">
                </a>
            </div>
        </header>
        <main>
            <nav>
                <ul>
                    <li class="destacado">Tablas:</li>
                    <?php include "inc/menu.php"?>
                    <li class="destacado">Documentos:</li>
                    <?php include "inc/listadodocumentos.php"?>
                </ul>
            </nav>
            <section>
                <?php include "inc/tabla.php"?>
                <?php include "inc/documentos.php"?>
                <?php include "inc/documento.php"?>
                <?php include "inc/formulario.php"?>         
            </section>
        </main>
        <script src = "js/codigo.js"></script>
    </body>
</html>