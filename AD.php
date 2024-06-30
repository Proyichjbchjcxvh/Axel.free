<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Datos</title>
</head>
<body>
    <div align="center">
        <img src= "Encabezado.png"width="1000">
<p><font color= "black"; size= 4; face= "Tahoma"><center>COLEGIO DE ESTUDIOS CIENTIFICOS Y TECNOLOGICOS DEL ESTADO DE MÉXICO. PLANTEL IXTLAHUACA</center></font></p>

<p><font color= "black"; size= "3"; face= "Tahoma"><center><strong>Elaborado por:</strong>Axel GOnzlez Felipe
<strong>Grupo:</strong>404<strong>Número de lista:</strong><br>
<strong>Fecha de elaboración:</strong>14 de Marzo de 2024.<strong>Hora:</strong>8:00 a.m.


        <form method="post">
            <label for="orden">Selecciona el orden:</label>
            <select name="orden" id="orden">
                <option value="1">Descendente por Matricula</option>
                <option value="2">Ascendente por Matricula</option>
                <!-- Agrega más opciones según tus necesidades -->
            </select>
            <input type="submit" value="Ordenar">
        </form>
        <br>
        <table width="600" border="1" bgcolor="#FFFA99" align="center">
            <tr bgcolor="#E8E8E8">
                <th align="center"><font face="Georgian" size="4">Número:</th>
                <th align="center"><font face="Georgian" size="4">Matricula:</th>
                <th align="center"><font face="Georgian" size="4">Fecha_I:</th>
                <th align="center"><font face="Georgian" size="4">Hora:</th>
                <th align="center"><font face="Georgian" size="4">Actividad:</th>
                <th align="center"><font face="Georgian" size="4">Responsable:</th>
                <th align="center"><font face="Georgian" size="4">Materiales:</th>
                <th align="center"><font face="Georgian" size="4">Producto:</th>
                <th align="center"><font face="Georgian" size="4">Evidencia:</th>
            </tr>
            <?php
            $conexion = new mysqli("localhost", "root", "", "9_agenda");
            if ($conexion->connect_error) {
                die("Conexión fallida: " . $conexion->connect_error);
            }
            
            $orden = isset($_POST['orden']) ? $_POST['orden'] : 1;

            if ($orden == 1) {
                $sql = "SELECT Matricula, Fecha_i, hora, actividad, responsable, materiales, producto, evidencia FROM 9_usuario ORDER BY Matricula DESC";
            } else {
                $sql = "SELECT Matricula, Fecha_i, hora, actividad, responsable, materiales, producto, evidencia FROM 9_usuario ORDER BY Matricula ASC";
            }

            $resultado = $conexion->query($sql);
            $cont = 1;

            if ($resultado->num_rows > 0) {
                while($reg = $resultado->fetch_assoc()) {
                    echo "
                    <tr>
                        <td align='center'>$cont</td>
                        <td align='center'>{$reg['Matricula']}</td>
                        <td align='center'>{$reg['Fecha_i']}</td>
                        <td align='center'>{$reg['hora']}</td>
                        <td align='center'>{$reg['actividad']}</td>
                        <td align='center'>{$reg['responsable']}</td>
                        <td align='center'>{$reg['materiales']}</td>
                        <td align='center'>{$reg['producto']}</td>
                        <td align='center'>{$reg['evidencia']}</td>
                    </tr>";
                    $cont++;
                }
            } else {
                echo "<tr><td colspan='5' align='center'>No hay resultados</td></tr>";
            }

            $conexion->close();
            ?>
        </table>
    </div>
</body>
</html>