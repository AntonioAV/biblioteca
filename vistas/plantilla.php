<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Libros</title>
    <link rel="stylesheet" href="vistas/css/login.estilos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/c556ede870.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="recuadro">
        <header>
            <i class="icono fas fa-book-reader"></i>
        </header>

        <form method="post" class="formulario">
            <div class="inputs">
                <div class="grupo">
                    <input type="text" name="ingresoNombre" id="name" placeholder="Nombre" required />

                </div>
                <div class="grupo">
                    <input type="email" name="ingresoEmail" id="email" placeholder="Email" required />

                </div>
                <div class="grupo">
                    <input type="password" name="ingresoPassword" id="password" placeholder="Contraseña" required />

                </div>
            </div>

            <!-- <?php
// Comprobamos si hacemos un ingreso correcto
// $ingreso = new ControladorFormularios();
// $ingreso->ctrIngreso();
?> -->

            <button type="submit" class="cont_inicio recuadro_btn">Ingresar</button>

            <div class="btn_inferiores">
                <a href="#" class="cont_registro recuadro_btn">Registrarse</a>
                <a href="#" class="cont_sesion recuadro_btn">Iniciar</a>
            </div>
        </form>
    </div>

</body>

</html>