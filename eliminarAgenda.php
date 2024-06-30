<center><img src="Encabezado.PNG"></center><br>
<center><table border="1">
<meta charset="utf-8">
<?php
include("conexion.php");
?>
<form action="" method="post">
	Insertar la Matricula a Eliminar: <input required name="ma"><br>
	<input type="submit" value="Eliminar">
</form>

<?php
if ($_POST){
	$m=$_POST['ma'];

	$sql="delete from  9_usuario  where Matricula='$m'";
	if(mysqli_query($con,$sql)){
		echo"<script>
		alert('El regristo se elimino correctamente');
		</script>";
}else{
	echo"<script>
	          alert('Error, no se elimino el regristo, favor de verificar');
	</script>";
}
}
?>

<p><center><img src="pie.PNG"></center>