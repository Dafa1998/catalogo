

    <link rel="stylesheet" href="./public/css/font-awesome.css">
    <link rel="stylesheet" href="./public/css/normalize.css">
    <link rel="stylesheet" href="./public/login.css">
    
<div class="contenedor">


    <form action="?url=login&action=login" method="post" class="form">
    <div class="datos">
        <i class="fa fa-user-o"></i>
        <input type="text" name="correo_electronico" class="usuario">
    </div>

    <div class="datos1">
        <i class="fa fa-key"></i>
        <input type="password" name="contraseña" class="contrasena">
    </div>    

    <div class="datos2">
        <input type="submit" value="LOGIN"class="btn">
    </div>
    <ul>
        <?php  foreach ($errores as $key => $error):?>
        <li class="color--alert"><?=$error?></li>
        <?php  endforeach?>
        </ul>
</form>

</div>

</body>
</html>