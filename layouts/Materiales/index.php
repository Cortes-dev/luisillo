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
    </style>

</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container d-flex justify-content-between align-items-center position-relative">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img class="logo-Nav" src="../../images/prossesa.png" alt="Logo">
        </a>

        <!-- Título centrado -->
        <h1 class="position-absolute start-50 translate-middle-x text-white">Proyecto 1</h1>

        <!-- Bolita animada -->
        <div class="color-ball" id="colorEfect"></div>
    </div>
</nav>

    <!-- Sección de título -->
    <section class="py-3">
        <div class="container">
            <h1 class="fw-bold text-dark text-center">Materiales</h1>
        </div>
    </section>

    <!-- Contenido -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3 d-flex flex-column align-items-start gap-4 mb-4">
                <a href="../Materiales/index.php" class=" btnMouse w-100">Datos Generales</a>
                <a href="#" class="w-100 btnMouse ">Mano de obra</a>
                <a href="#" class="w-100 btnMouse ">Cronograma</a>
            </div>
            <div class="col-12 col-lg-8">
                <div class="border p-4">
                    <h5 class="text-center">Búsqueda Por Código</h5>
                    <form>
                        <div class="mb-3">
                            <label for="codigo" class="form-label">Código</label>
                            <select id="codigo" class="form-select">
                                <option selected>Selecciona un código</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <select id="cantidad" class="form-select">
                                <option selected>Selecciona cantidad</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha de carga</label>
                            <input type="date" id="fecha" class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
    <table class="table table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>Tipo de Material</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Soldador</td>
                <td>$33,230</td>
            </tr>
            <tr>
                <td>Pintor</td>
                <td>$15,410</td>
            </tr>
            <tr>
                <td>Eléctrico</td>
                <td>$20,500</td>
            </tr>
            <tr>
                <td>Auxiliares</td>
                <td>$6,235</td>
            </tr>
        </tbody>
    </table>

    <div class="text-white text-center fw-bold p-2 bg-dark">
        Total Materiales <span class="ms-3">$105,725</span>
    </div>

    <div class="text-white text-center fw-bold p-2 bg-dark mt-1">
        Total Mano de Obra y Materiales <span class="ms-3">$105,725</span>
    </div>
</div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const btnColor = document.getElementById("btnColor");
            const colorEfect = document.getElementById("colorEfect");

            // Cargar estado desde localStorage
            let estado = localStorage.getItem("estadoProyecto") === "true";

            // Función para actualizar la UI
            function actualizarUI() {
                if (estado) {

                    colorEfect.classList.remove("amarillo");
                    colorEfect.classList.add("verde");
                } else {
                    colorEfect.classList.remove("verde");
                    colorEfect.classList.add("amarillo");
                }
            }

            // Inicializar UI con estado guardado
            actualizarUI();

        });
    </script>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>