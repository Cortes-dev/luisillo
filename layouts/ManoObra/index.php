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
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: yellow;
        }

        .verde {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: green;
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
            <h1 class="fw-bold text-dark text-center">Mano de obra</h1>
        </div>
    </section>

    <!-- Contenido -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3 d-flex flex-column align-items-start gap-4 mb-4">
                <a href="../Materiales/index.php" class=" btnMouse w-100">Datos Generales</a>
                <a href="../Materiales/index.php" class="w-100 btnMouse ">Materiales</a>
                <a href="#" class="w-100 btnMouse ">Cronograma</a>
            </div>
            <div class="col-12 col-lg-8">
                <div class="border p-4">
                    <form>
                        <div class="mb-3">
                            <label for="codigo" class="form-label">Especialidades</label>
                            <select id="codigo" class="form-select">
                                <option selected>Selecciona</option>
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
                    <th>Especialidad</th>
                    <th>Cantidad</th>
                    <th>Costo Dia</th>
                    <th>Dias laborados</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Soldador</td>
                    <td>3</td>
                    <td>$500</td>
                    <td>4</td>
                    <td>$2,000</td>
                </tr>
                <tr>
                    <td>Pintor</td>
                    <td>2</td>
                    <td>$400</td>
                    <td>3</td>
                    <td>$1,200</td>
                </tr>
                <tr>
                    <td>Electricista</td>
                    <td>1</td>
                    <td>$300</td>
                    <td>3</td>
                    <td>$900</td>
                </tr>
                <tr>
                    <td>auxiliares</td>
                    <td>2</td>
                    <td>$200</td>
                    <td>2</td>
                    <td>$800</td>
                </tr>
            </tbody>
        </table>


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