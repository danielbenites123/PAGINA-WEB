<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<br><br>

<label> VALIDACION DE USUARIOS</label>

<form action="mensaje.php" method="post" class="form-control">

	<label> INGRESE USUARIO:</label>
<select name="usuario" id="usuario" style="width: 15%;">
	<option></option>
    <option value="1">DANIEL</option>
    <option value="2">LUZ</option>
    <option value="3">NICKY</option>
  </select>
<br>
<label> INGRESE CLAVE:</label>
<input type="TEXT" name="TXTC" id="TXTC"><br>
<input type="SUBMIT" name="PROCESAR" class="btn btn-primary" value="PROCESAR">
<input type="RESET" name="LIMPIAR" class="btn btn-danger" value="LIMPIAR">


</form>
</div>
</body>
</html>