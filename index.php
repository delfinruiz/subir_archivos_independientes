<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>


</head>

<body>

	<form id="formarchivo" method="post" enctype="multipart/form-data">
    <input type="file" name="archivos[]" >
    <input type="file" name="archivos[]" >
    <input type="file" name="archivos[]" >
    <input type="text" name="nombre">

    <button type="button" id="btn_enviar">Enviar</button>
    
	</form>

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="js/archivo.js"></script>


</body>
</html>