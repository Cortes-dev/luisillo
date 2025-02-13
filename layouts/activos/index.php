<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img class="logo-Nav" src="../../images/prossesa.png" alt="Logo">
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
                            <img class="nav-icon" src="../../images/AddUser.svg" alt="Añadir Usuario">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php">
                            <img class="nav-icon" src="../../images/exit.svg" alt="Salir">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<section class="py-3">
    <div class="container">
        <div class="row align-items-center justify-content-between text-center text-lg-start">
            <!-- Flecha a la izquierda -->
            <div class="col-12 col-lg-auto mb-3 mb-lg-0">
                <h1 class="text-white fw-bold m-0"><a href="../../" class="text-white text-decoration-none">&larr;</a></h1>
            </div>

            <!-- Título centrado en móvil y alineado en pantallas grandes -->
            <div class="col-12 col-lg-auto d-flex justify-content-center justify-content-lg-end gap-3">
                <h1 class="text-white fw-bold">Proyectos Prossesa</h1>
            </div>
        </div>


        <div class="container py-5">
            <div class="row justify-content-center gap-5">
                <?php
                include "../../components/card.php";

                for ($i = 0; $i < 7; $i++) {
                    card("../../images/container-alv.webp", "Proyecto " . ($i), "../DtsGenerales/index.php");
                }

                ?>
            </div>
        </div>


        


    </div>
</section>