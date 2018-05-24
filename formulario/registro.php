
<?php
    include("dll/config.php");
    include("dll/mysql.php");
    extract($_POST);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Forulario de registro</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Formulario de Registro</h1>
<form method="post" action="internas/procesar.php">
	<label for="nombres"> Nombres</label>
	<input type="text" name = "nombres" placeholder="Nombres"><br>
	<label for="apellidos"> apellidos</label>
	<input type="text" name = "apellidos" placeholder="Apellidos"><br>
    <label for="telefono"> telefono</label>
    <input type="number" name = "telefono" placeholder="Teléfono"><br>
    <label for="email"> Email</label>
    <input type="email" name = "correo" placeholder="Correo" required=""><br>
    <label for="fecha_nacimiento"> Fecha de Nacimiento</label>
    <input type="date" name = "fecha_nacimiento" placeholder="Fecha de Nacimiento"><br>
	<label for="cedula"> Cédula</label>
    <input type="number" name = "cedula" placeholder="Cédula"><br>
    <label for="direccion"> direccion</label>
    <input type="text" name = "direccion" placeholder="Direccion"><br>
  

	
	
    <select name="tipo">
    	<option>Seleccione el tipo de participante</option>
    	<option name ="docente" value="1">Profesor</option>
    	<option name = "estudiante" value="2">Estudiante</option>
    	<option name = "otro" value="3">Externo</option>
    </select><br>

     <select name="curso">
    	<option >Seleccione Curso</option>
    	<option value="1">Programacion</option>
    	<option value="2">Android</option>
    	<option value="3">Riact</option>
    </select><br>

    <select name="taller[]" id="taller" multiple=" "><br>
        <?php
        $query = "Select * from  talleres";
        $talleres = mysql_query ($query) or die ('error de sql');
        // convertir a un arraylist el resultado de la variable
        while ($taller = mysql_fetch_array($talleres,MYSQL_ASSOC)){
        ?>
        <option value="<?php echo $taller ['id'] ?>"> <?php echo $taller['nombre'] ?>  </option>
        <?php
        }

        ?>
        
    </select>
    <button>Guardar</button>
	</input>
</form>
</body>
</html>