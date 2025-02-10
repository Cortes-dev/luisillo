<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color: #020712; color: #fff;">

    <!--//! Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img class="logo-Nav" src="./images/prossesa.png" alt="Logo">
            </a>

            <!-- Botón de colapso para móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img class="nav-icon" src="./images/AddUser.svg" alt="Añadir Usuario">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img class="nav-icon" src="./images/exit.svg" alt="Salir">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!--//! Home -->
    <?php include "layouts/home/index.php"; ?>


    <div class="container py-5">
        <div class="row justify-content-center gap-5">
            <?php
            include "components/card.php";

            card("./images/cross-sign.webp", "Activos", "./layouts/activos/index.php");
            card("./images/cross-sign.webp", "Finalizados", "#");
            card("./images/cross-sign.webp", "Todos", "#");
            ?>
        </div>
    </div>


    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
                <button class="btnMouse text-center">Agregar</button>
            </div>
        </div>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>

</html>