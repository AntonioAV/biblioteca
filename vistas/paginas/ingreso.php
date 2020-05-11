<div class="recuadro">
	<header>
		<i class="icono fas fa-book-reader"></i>
	</header>

	<form method="post" class="formulario">
		<div class="inputs">
			<div class="grupo">
				<input type="text" name="ingresoNombre" id="name" required /><span class="barra"></span>
				<label class="nombre_label" for="">Nombre</label>
			</div>
			<div class="grupo">
				<input type="email" name="ingresoEmail" id="email" required /><span class="barra"></span>
				<label class="nombre_label" for="">Email</label>
			</div>
			<div class="grupo">
				<input type="password" name="ingresoPassword" id="password" required /><span class="barra"></span>
				<label class="nombre_label" for="">Contraseña</label>
			</div>
		</div>

		<?php
		// Comprobamos si hacemos un ingreso correcto
		$ingreso = new ControladorFormularios();
		$ingreso->ctrIngreso();
		?>

		<button type="submit" class="cont_inicio recuadro_btn">Ingresar</button>

		<div class="btn_inferiores">
			<a href="#" class="cont_registro recuadro_btn">Registrarse</a>
			<a href="#" class="cont_sesion recuadro_btn">Iniciar</a>
		</div>
	</form>
</div>