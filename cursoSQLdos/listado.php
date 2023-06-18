<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title></title>
</head>
<body>

    <?php
        //Conectar con servidor

        $servername="localhost";
        $username="root";
        $password="";
        $dbname="cursosqldos";

        //Conectar con la base de datos

        $conn=new mysqli($servername,$username,$password,$dbname);

        // Probar conexion 
            
        if ($conn->connect_error) {
            die("La conexión ha fallado: " . $conn->connect_error);

        } 

        $sql2="SELECT * FROM usuariodos";
        $resultado2=$conn->query($sql2);

        echo('<table border="1" cellpadding=4 bgcolor=antiquewhite >');
        echo('<tr>');
        echo('<th>Nombre</th><th>Primer Apellido</th><th>Segundo Apellido</th><th>Email</th><th>Usuario</th><th>Contraseña</th>');
        echo('</tr>');

        while($fila=mysqli_fetch_array($resultado2))
        {

        echo "<tr><td>".$fila["nombre"]."</td>"."<td>".$fila["primer_apellido"]."</td><td>".$fila["segundo_apellido"]."</td><td>".$fila["email"]."</td>"."<td>".$fila["usuario"]."</td><td>".$fila["contrasena"]."</td></tr>";  
     
        }

         echo "<BR>";

        $conn->close(); 

        echo('</table>');

    ?>

</body>
</html>