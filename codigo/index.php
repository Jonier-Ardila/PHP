<html>
    <center>
    <head> <!-- JONIER ARDILA-->
        <title> COMENTARIOS-COMPENSAR</title> <!-- EN ESTA PRIMERA PARTE ENCONTRAMOS LO QUE ES LA CABEZA DELL CODIGO 
        Y LA PAGINA--> 
</head>
<body>
    
    <form id="formulario" method="post" action="comentar.php">

    <h1>Nombre</h1>
    <input type="text" name="nombre" id="nombre" placeholder="Escribe aqupi tu nombre"/>
</br>
<h3>Comentario</h3>
<from method="post" action="comentar.php">
        <textarea name="comentario" id="comentario" placeholder= "Escribe aquí tu comentario"></textarea>
        </br></br>
        <input id="enviar" type="submit" onclick="alerta()" value="publicar">

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
        font-size: 16px;
        margin-top: 25px !important;
        background-image: linear-gradient(to top, #fddb92 0%, #d1fdff 100%);
}
form{
    padding: 50px 20px;
    background-color: #ededed;
    margin: calc(25% + 100px);
    margin-top:70px;
    padding-top: 28px;
    margin-bottom: 30px;
}

textarea {
    width: 30%;
    min-height: 120px;
}
    
</style>

</body>

<!-- EN ESTE APARTADO ENCONTRAREMOS ALGUNAS CONDICIONES CUANDO AL MOMENTO DE PONER 
UN COMENTARIO NO SE REALICE DE FORMA CORRECTA-->
<script language="javascript">


    function alerta(){

       

        alert("Su Comentario Se Esta Enviando, Aguarde un Momento..");
        
    }
    </script>


</html>

