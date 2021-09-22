<?php     /* EN ESTE APARTADO LLAMAREMOS LAS VARIABLES*/ 




$nombre =$_POST['nombre'];/* ACA SE LLAMA A LA VARIABLE NOMBRE*/ 
$comentario =$_POST['comentario'];/* ACA SE LLAMA A LA VARIABLE COMENTARIO*/ 

$conn = mysqli_connect('localhost', 'root', '', 'basecomentarios');/* ACA ESCRIBIREMOS LAS SIGUIENTES VARIABLES
DESPUES DE CONFIGURAR LA BASE DE DATOS EN MYSQL*/ 

$nombre = mysqli_real_escape_string($conn, $nombre);
$comentario = mysqli_real_escape_string($conn, $comentario);

$resultado = mysqli_query($conn, 'INSERT INTO comentarios (nombre, comentario) VALUES("' . $nombre . '", "' . $comentario . '")');

if ($resultado)
echo('Comentario enviado con exito!');/* ESTE APARTADO SE MOSTRARA CUANDO SE REALICE UN COMENTARIO CON EXITO*/ 



else
echo('Error intentando enviar el comentario');/* ESTE APARTADO SE MOSTRARA CUANDO NOO 
SE REALICE UN COMENTARIO CON EXITO*/ 

mysqli_close($conn);


?>

<input id="Volver" type="submit"  value="Volver">

<?php

?>