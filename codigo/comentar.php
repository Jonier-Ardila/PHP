<?php     /* EN ESTE APARTADO LLAMAREMOS LAS VARIABLES*/ 


$comentario =$_POST['comentario']; /* */ 


$voz = fopen("com.html","a");
fwrite ($voz,"<p>$comentario</p>");
fclose($voz);

include("index.php");

$nombre =$_POST['nombre'];/* ACA SE LLAMA A LA VARIABLE NOMBRE*/ 
$comentario =$_POST['comentario'];/* ACA SE LLAMA A LA VARIABLE COMENTARIO*/ 

$conn = mysqli_connect('localhost', 'root', '', 'basecomentarios');/* ACA ESCRIBIREMOS LAS SIGUIENTES VARIABLES
DESPUES DE CONFIGURAR LA BASE DE DATOS EN MYSQL*/ 

$nombre = mysqli_real_escape_string($conn, $nombre);
$nombre = mysqli_real_escape_string($conn, $comentario);

$resultado = mysqli_query($conn, 'INSERT INTO comentarios (nombre, comentario) VALUES("' . $nombre . '", "' . $comentario . '")');

if ($resultado)
echo('Comentario enviado con exito!');/* ESTE APARTADO SE MOSTRARA CUANDO SE REALICE UN COMENTARIO CON EXITO*/ 
else
echo('Error intentando enviar el comentario');/* ESTE APARTADO SE MOSTRARA CUANDO NOO 
SE REALICE UN COMENTARIO CON EXITO*/ 

mysqli_close($conn);


?>