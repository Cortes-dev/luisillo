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

    <style>
        .colorEfect {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: inline-block;
        }

        .amarillo {
            background-color: yellow;
        }

        .verde {
            background-color: green;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container d-flex justify-content-between align-items-center position-relative">
            <a class="navbar-brand" href="#">
                <img class="logo-Nav" src="../../images/prossesa.png" alt="Logo">
            </a>
            <h1 class="position-absolute start-50 translate-middle-x text-white">Proyecto 1</h1>
            <div class="colorEfect" id="colorEfect"></div>
        </div>
    </nav>

    <!-- Sección de título -->
    <section class="py-3">
        <div class="container">
            <div class="row align-items-center justify-content-between text-center text-lg-start">
                <div class="col-12 col-lg-auto mb-3 mb-lg-0">
                    <h1 class="fw-bold m-0">
                        <a href="../../layouts/activos/index.php" class="text-dark text-decoration-none">&larr;</a>
                    </h1>
                </div>
                <div class="col-12 col-lg-auto">
                    <h1 class="fw-bold text-dark text-center text-lg-start">Materiales</h1>
                </div>
                <div class="col-12 col-lg-auto d-flex justify-content-center justify-content-lg-end">
                    <button class="btnMouse">
                        <img src="../../images/imprimir.svg" alt="Imprimir">
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contenido -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3 d-flex flex-column align-items-start align-items-lg-end gap-4 mb-4 mb-lg-0">
                <a href="../Materiales/index.php" class="btnMouse w-100 w-lg-auto">Datos Generales</a>
                <a href="#" class="btnMouse w-100 w-lg-auto">Mano de obra</a>
                <a href="#" class="btnMouse w-100 w-lg-auto">Cronograma</a>
            </div>
            <div class="col-12 col-lg-8">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            <tr><th class="p-3">Nombre del Cliente</th><td class="p-3 text-dark">Cliente</td></tr>
                            <tr><th class="p-3">Número de Serie</th><td class="p-3 text-dark">3487VTR75</td></tr>
                            <tr><th class="p-3">Número de Proyecto</th><td class="p-3 text-dark">001-2024</td></tr>
                            <tr><th class="p-3">Medidas</th><td class="p-3 text-dark">8' x 40'</td></tr>
                            <tr><th class="p-3">Fecha de Inicio</th><td class="p-3 text-dark">28-Nov-2024</td></tr>
                            <tr><th class="p-3">Fecha de Terminación</th><td class="p-3 text-dark">15-Ene-25</td></tr>
                            <tr><th class="p-3">Precio Venta</th><td class="p-3 text-dark">$425,000</td></tr>
                            <tr><th class="p-3">Utilidad Bruta</th><td class="p-3 text-dark">$272,295</td></tr>
                            <tr><th class="p-3">Porcentaje</th><td class="p-3 text-dark">64%</td></tr>
                            <tr><th class="p-3">Descripción Proyecto</th><td class="p-3 text-dark">Proyecto para la empresa X, con detallados en X y ...</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const btnColor = document.getElementById("btnColor");
            const colorEfect = document.getElementById("colorEfect");
            let estado = localStorage.getItem("estadoProyecto") === "true";

            function actualizarUI() {
                btnColor.textContent = estado ? "Retomar Proyecto" : "Finalizar Proyecto";
                colorEfect.classList.toggle("verde", estado);
                colorEfect.classList.toggle("amarillo", !estado);
            }

            actualizarUI();

            btnColor?.addEventListener("click", () => {
                estado = !estado;
                localStorage.setItem("estadoProyecto", estado);
                actualizarUI();
            });
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
