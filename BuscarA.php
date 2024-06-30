<<html >
<body>
  <center><img Src = "encabezado.png" height = 100 width = 900 >
  <p><font color="black" size="4" face="tahoma"> <center>COLEGIO DE ESTUDIOS CIENTIFICOS Y TECNOLOGICOS DEL ESTADO DE MÉXICO.
PLANTEL IXTLAHUACA </center></font></p>

<p><font color="black" size="3" face="tahoma"> <center><strong>Elaborado por:</strong>Axel Bandidooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo
<strong>Grupo:</strong> 404. <strong>Numero de Lista:9</strong><br>
<strong>Fecha de Elaboración:</strong> 13 de junio de 2024.<strong> Hora:</strong>12:17 a.m.

<p><font color="black" size= face="tahoma"><center><strong>BUSCAR REGISTROS</strong></center><br>
</center><br /
    
<meta charset="utf-8">

<form action="" method="POST">
        <label for="Matricula">Matricula:</label>
        <input type="text" id="Matricula" name="Matricula" required>
        <button type="submit" name="buscar">Buscar</button>
    </form>


    <?php
    // Si se envió el formulario
    if(isset($_POST['buscar'])) {
        // Configuración de la conexión a la base de datos
        $servername = "localhost"; // Cambia esto si tu servidor MySQL no está en localhost
        $username = "root";
        $password = "";
        $dbname ="9_agenda";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Obtener el ID ingresado por el usuario
        $Matricula = $_POST['Matricula'];

        // Consulta SQL para seleccionar el registro con el ID especificado
        $sql = "SELECT Matricula, fecha_i, hora, actividad , responsable , materiales,producto, evidencia  FROM 9_usuario WHERE Matricula = $Matricula";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar los datos del registro encontrado
            while($row = $result->fetch_assoc()) {
                echo "<h3>Registro encontrado:</h3>";
                echo "Matricula: " . $row["Matricula"]. "<br>";
                echo "fecha_i: " . $row["fecha_i"]. "<br>";
                echo "hora: " . $row["hora"]. "<br>";
                echo "actividad: " . $row["actividad"]. "<br>";
                echo "responsable: " . $row["responsable"]. "<br>";
                echo "materiales: " . $row["materiales"]. "<br>";
                echo "producto: " . $row["producto"]. "<br>";
                echo "evidencia: " . $row["evidencia"]. "<br>";
            }
        } else {
            echo "<h3>No se encontraron resultados para el Matricula $Matricula.</h3>";
        }
// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el ID ingresado por el usuario
$Matricula = $_POST['Matricula'];

// Consulta SQL para seleccionar el registro con el ID especificado

}
?>

</body>
</html>
<center></table= border "1"></center>
<center><table ></center>
<center><img Src = "pie.png" width = 900 height = 20 ></center><br />

                                <center><font size="2"><font face= "Calibri">Todos los derechos reservados, Elaborado por shary luciano reyes , Tel:7121006397, Email:sharyreyes.499@gmail.com, Pagina Eliminar.php, Domicilio desconocido.</font></font></center><br /><br />
</able ></center>
</body>
</html>