<meta charset="utf-8">
<?php 
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Agenda</title>
    <link rel="icon" href="caa.png"> 
</head>
<body>

<form action=""method="post">

 
<p align="left"><center><table border="1" width="500">
<form name="MyForm">

<img src="Encabezado.png" width="1000" >

<p><font color="black" size="3" face"tahoma"><center>COLEGIO DE ESTUDIOS CIENTIFICOS Y TECNOLOGICOS DEL ESTADO DE MEXICO.
PLANTEL IXTLAHUACA</center></font></p>

<p><font color="black" size"3" face="tahoma"><center><strong>Elaborado por:</strong>Axel.
<strong>Grupo:</strong> 404.<strong>Numero de lista:9</strong><br>
<strong>Fecha de Elaboracion:</strong>23 de Mayo de 2024.<strong> Hora:</strong>12:00 p.m.<br>
<p><font color="black" size"4" face"tahoma"><center><strong>Actualizar Registros</strong></center><br>

<form action="" method="post">
    <center>
        <table border="1">
            <tr>
                <td width="250">
                Matricula: 
                </td>
                <td>
                <input type="text" name="ma">
                </td>
                <td rowspan="9">
                <center><img Src = "insano.png" width = 150></center>
                </td>
            </tr>
            <tr>

                <td>
                fecha_i: 
                </td>
                <td>
                <input type="text" name="fe">
                </td>
            </tr>
            <tr>
                <td>
                hora: 
                </td>
                <td>
                <input type="text" name="ho">
                </td>
            </tr>
            <tr>
                <td>
                actividad: 
                </td>
                <td>
                <input type="text" name="ac">

                </td>
            </tr>
            <tr>
                <td>
                responsable: 
                </td>
                <td>
                <input type="text" name="re">
                </td>
            </tr>
            <tr>
                <td>
                materiales: 
                </td>
                <td>
                <input type="text" name="mat">
                </td>
            </tr>
            <tr>
                <td>
                producto: 

                </td>
                <td>
                <input type="text" name="pr">
                </td>
            </tr>
            <tr>
                <td>
                evidencias: 
                </td>
                <td>
                <input type="text" name="ev">
                </td>
            </tr>
            <tr>
            <tr>
                <td colspan="2">
                    <center>
                    <input type="button" value="Actualizar" onclick="submit()">
                    </center>
                </td>

            </tr>
        </table>
    </center>
</form>
<?php
if ($_POST){
    $a=$_POST['ma'];
    $b=$_POST['fe'];
    $c=$_POST['ho'];
    $d=$_POST['ac'];
    $e=$_POST['re'];
    $f=$_POST['mat'];
    $g=$_POST['pr'];
    $h=$_POST['ev'];

    $sql="update 9_usuario set fecha_i='$b',hora='$c',actividad='$d',responsable='$e',materiales='$f',producto='$g',evidencia='$h' where Matricula='$a'" or 'dile'('mysql_error'());
    if(mysqli_query($con,$sql)){

        echo"<script>
            alert('El producto se actualizo correctamente');
            </script>";
    }
    else{
        echo"<script>
            alert('Error el producto no se actualizo en la base de datos');
            </script>";
}

}
?>

<br  /><center><img src="pie.png" width ="950" ></center><center><font size="0">
