<?php include "./header.php"; ?>

<div class="container py-4">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card shadow-lg mt-4">
				<div class="card-body">
					
					<div class="mb-3">
						<a href="index.php" class="btn btn-outline-primary">
							<i class="fa-solid fa-angles-left"></i> Regresar
						</a>
					</div>

					<h2 class="text-center mb-4">🐾 Agregar nueva mascota 🐾</h2>

					<form action="./procesos/insertar.php" method="post">
						
						<div class="mb-3">
							<label for="nombre_mascota" class="form-label fw-semibold">Nombre de la mascota</label>
							<input type="text" class="form-control" id="nombre_mascota" name="nombre_mascota" required>
						</div>

						<div class="mb-3">
							<label for="edad" class="form-label fw-semibold">Edad</label>
							<input type="text" class="form-control" id="edad" name="edad" required>
						</div>

						<div class="mb-3">
							<label for="especie" class="form-label fw-semibold">Especie</label>
							<select class="form-select" id="especie" name="especie" required>
								<option value="">Selecciona una especie</option>
								<option value="Perro">Perro 🐶</option>
								<option value="Gato">Gato 🐱</option>
								<option value="Ave">Ave 🐦</option>
								<option value="Otro">Otro 🦎</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="raza" class="form-label fw-semibold">Raza</label>
							<input type="text" class="form-control" id="raza" name="raza">
						</div>

						<div class="mb-4">
							<label for="nombre_dueno" class="form-label fw-semibold">Nombre del dueño</label>
							<input type="text" class="form-control" id="nombre_dueno" name="nombre_dueno" required>
						</div>

						<button class="btn btn-success w-100 py-2">
							<i class="fa-solid fa-floppy-disk"></i> Guardar Mascota
						</button>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

<?php include "./scripts.php"; ?>
