

<?php

function regexCheck($variable,$case)
{
    //Selector de la regex (expresión regular)
   switch ($case)
   {
      case "emailform":
            $regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
      break;
 
      case "usuarioform":
            $regex = "/^[a-z\d_]{4,15}$/i";
      break;

      case "contrasenaform":
            $regex = "/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{4,8}$/";
      break;
   }
   if(preg_match($regex,$variable))
   {
      return TRUE;
   }
   else
   {
      return FALSE;
   }
 
}

    
    if (count($_POST)!=0 ) {
            $nombre=$_POST['nombre'];
            $primer_apellido=$_POST['primer_apellido'];
            $segundo_apellido=$_POST['segundo_apellido'];
            $usuario=$_POST['usuario'];

            //comprobar si el mail tiene el formato adecuado, sino reenviar al formulario
            if(@$_POST['email'])
            {
                if(regexCheck($_POST['email'],"emailform")){
                    $email=$_POST['email'];
                }else
                {
                    //mensaje de alerta email mal
                    echo '<script language="javascript">alert("El mail debe tener el formato adecuado");</script>';
                    //reenvio al formulario con include
                    include('c:\xampp\htdocs\cursoSQLdos\formulario2.html');
                }
            }
            
            //comprobar si la contraseña tiene el formato adecuado, sino reenviar al formulario
            if(@$_POST['contrasena'])
            {
                if(regexCheck($_POST['contrasena'],"contrasenaform")){
                    $contrasena=$_POST['contrasena'];
                }else
                {
                    //mensaje de alerta contraseña mal
                    echo '<script language="javascript">alert("la contraseña debe contener al menos 1 mayuscula, 1 minuscula, 1 numero y entre 4 y 8 caracteres");</script>';
                    //reenvio al formulario con include
                    include('c:\xampp\htdocs\cursoSQLdos\formulario2.html');
                         
                }
            }  
        //Conectar con servidor

        $servername="localhost";
        $username="root";
        $password="";
        $dbname="cursosqldos";

        //Conectar con la base de datos

        $conn=new mysqli($servername,$username,$password,$dbname);

        // Probar conexion 
            
        /*if ($conn->connect_error) {
            die("La conexión ha fallado: " . $conn->connect_error);
        } 

		    $sqlmail="SELECT email FROM usuariodos WHERE email = '".$_POST['email']."'";
            
            $resultadomail=$conn->query($sqlmail);
            
		    if($resultadomail = $_POST['email']){
                //mensaje de alerta si existe el mail
                echo '<script language="javascript">alert("Ya hay un usuario con este email.");</script>';
                printf($resultadomail);
                //reenvio al formulario con include
                include('c:\xampp\htdocs\cursoSQLdos\formulario2.html');          
            
            } */   
             
                              
            if ($conn->connect_error) {
                die("La conexión ha fallado: " . $conn->connect_error);
            } else {
                $sql="INSERT INTO usuariodos (nombre, primer_apellido, segundo_apellido, email, usuario, contrasena) VALUES ('$nombre', '$primer_apellido', '$segundo_apellido', '$email', '$usuario','$contrasena')";
                $resultado=$conn->query($sql);
                if(!$resultado){
                    //mensaje de alerta error al ingresar datos
                    echo '<script language="javascript">alert("Error al ingresar los datos en la base de datos.");</script>';
                    //reenvio al formulario con include
                    include('c:\xampp\htdocs\cursoSQLdos\formulario21.html');
                } 
                
                echo '<script language="javascript">alert("Registro completado con éxito.");</script>';
                                                             
            }

    $conn->close(); 
    } 
               
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <form action="listado.php" method="post">

        <button type="submit">Consulta</button>
    </form>
</body>
</html>






