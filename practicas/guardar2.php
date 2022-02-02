<?php

	$Nombre = $_POST['NombreLibro'];
	$Descripcion = $_POST['Descripcion'];
	
	
    $contenido=
"Nombre: $Nombre
Descripcion: $Descripcion";

	$archivo = fopen("libros2.txt", "w");
	fwrite($archivo,$contenido);
	// Instrucciones para guardar los datos en el archivo libros.txt
     
?>

<?php

				$lecturaArchivo = fopen("libros2.txt", "r");

				while (!feof($lecturaArchivo)) {
					$linea = fgets($lecturaArchivo);
					echo nl2br($linea);
				}

				fclose($lecturaArchivo);

			?>
</heady>
<body> 
	<div>
	<h2>Datos Almacenados Correctamente

    </h2>
</div>
</body>
</html>