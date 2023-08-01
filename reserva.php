<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias por tu respuesta</title>
    <link rel="stylesheet" href="CSS/estilos_general.css" />
</head>
<body>
    <section>
    
        <h1>Muchas gracias por su reserva! Esperamos su visita!</h1>
       
        <ul>
        <?php
            $nombre;
            $apellido;
            $number;
            $email;
            $comentario;
            

            if($_GET['nombre']){

                $nombre = $_GET['nombre'];

                echo "<li>$nombre</li>";

            }

            if($_GET['apellido']){

                $apellido = $_GET['apellido'];

                echo "<li>$apellido</li>";

            }

            if($_GET['number']){

                $number = $_GET['number'];

                echo "<li>$number</li>";

            }

            if($_GET['email']){

                $email = $_GET['email'];

                echo "<li>$email</li>";

            }

            if($_GET['comentario']){

                $comentario = $_GET['comentario'];

                echo "<li>$comentario</li>";

            }

            
            
        ?>
        </ul>
    </section>
</body>
</html>