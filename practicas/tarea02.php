<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Cargar los estilos -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>
<section class="hero is-primary">
  <div class="hero-body">
    <p class="title">
    <p input style="color: #003366; background-color: #99CCFF"> Almacenar Información de algunos titulos de libros: </p> 
    <p class="subtitle">
    <div>
			
</div>
  </div>
</section>
          
  		</div>
	</section>
    <section class="section">
		
		<form action="guardar2.php" method="post">
			<div>
            <label>Nombre del libro: </label>
				<input type="text" class="input" name="NombreLibro" placeholder="Escribe el título de la pelicula"  >
			</div>

			<div>
            <label>Descripción:</label>
				<textarea name="Descripcion" class="input" placeholder="Agregue la descripción">
					
				</textarea>
			</div>

			<input type="submit" class="button is-link" value="Guardar">
		</form>

	</section>

    
</body>
</html>