<html>
    <center>
    <head>
        <title> COMENTARIOS-COMPENSAR</title> <!-- EN ESTA PRIMERA PARTE ENCONTRAMOS LO QUE ES LA CABEZA DELL CODIGO 
        Y LA PAGINA-->
</head>
<body>
    
    <form id="formulario" method="post" action="comentar.php">

    <h1>Nombre</h1>
    <input type="text" name="nombre" id="nombre" placeholder="Escribe aqupi tu nombre"/>
</br>
<h3>Comentario</h3>
        <textarea name="comentario" id="comentario" placeholder= "Escribe aquí tu comentario"></textarea>
        </br></br>
        <input type="submit" value="publicar">

        <h2>Comentarios:</h2>

<!-- EN ESTE APARTADO ENCONTRAREMOS OTRA POSIBLE FORMA DE LLAMAR UNAS VARIABLES PARA 
ALMACENAR LOS DATOS DE LOS COMENTARIOS-->

        <!-- */ 
        <?php 

        $conn = mysqli_connect('localhost', 'root', '', 'basecomentarios');
        $resultado = mysqli_query($conn, 'SELECT + FROM comentarios');
        while ($comentario = mysqli_fetch_object($resultado))
        {
            ?>
            
            <b><?php echo($comentario->nombre); ?></b> (<?php echo($comentario->fecha); ?>) dijo: 
            <br /> 
            <?php echo($comentario->comentario); ?>
            <br />
            <hr />
            
            <?php
        }

        ?>/*-->

</form>

<?php include ("com.html");?>

<style>
    body {


        background-image: linear-gradient(to top, #fddb92 0%, #d1fdff 100%);
}
    
</style>

</body>

<!-- EN ESTE APARTADO ENCONTRAREMOS ALGUNAS CONDICIONES CUANDO AL MOMENTO DE PONER 
UN COMENTARIO NO SE REALICE DE FORMA CORRECTA-->

<script language="javascript">
    $("#submit").click(function(){
        var nombre = $('#nombre').val();
        var comentario = $('#comentario').val();

        if (nombre=="")
        {
            alert('Debe de escribir un numbre');
            return;
        }

        if (comentario=="")
        {
            alert('Debe de escribir un comentario');
        }

        $('#formulario').submit();

    });
    </script>
</html>

