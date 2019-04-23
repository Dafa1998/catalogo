<style type="text/css">
*::before,
*::after,
*{
    box-sizing: border-box;
}

body{
    margin: 0px;
    margin-top:8%;
    padding: 0px;
    display: flex;
    justify-content: center;
}

.formulario{
    width:2000px;
    background:rgba(1, 1, 1,0.3);
    padding: 10px;
    height:350px;
    margin-right:28%;
}

.nom{
    width: 80%;
    margin: 20px auto;
    display: flex;
    justify-content: space-between;
}

.nom input{
    padding: 13px;
    width: 49%;
    font-size: 15px;
    border: none;
}

.nom .correo{
    width: 100%;
    font-size: 15px;
}

.nom .contra{
    width: 100%;
    font-size: 15px;
}

input[type=submit]{
    padding: 15px;
    width: 100%;
    background: rgb(26, 218, 218);
    color:#fff;
    font-family: Arial, Helvetica, sans-serif;
    cursor: pointer;
    transition: 0.3s;
}

input[type=submit]:active{
    transform: scale(0.9);
    transition: 0.3s;
}
input[type=reset]{
    padding: 15px;
    width: 100%;
    background: rgb(26, 218, 218);
    color:#fff;
    font-family: Arial, Helvetica, sans-serif;
    cursor: pointer;
    transition: 0.3s;
}

input[type=reset]:active{
    transform: scale(0.9);
    transition: 0.3s;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>resgistrar</title>

</head>
<body>

    <form action="?url=register&action=add" method="post" class="formulario">

                <div class="nom">
                    <input type="text" name="nombres" placeholder="Nombres"><input type="text" name="apellidos" placeholder="Apellidos">
                </div>
                    <div class="nom">
                        <input type="text" name="correo_electronico" class="correo" placeholder="Correo">
                    </div>
                
                    <div class="nom">
                        <input type="password" name="contraseña" class="contra" placeholder="Password">
                    </div>

                   <div class="nom">
                            <input type="submit" value="REGISTRAR" class="btn">
                    </div>
                    <div class="nom">
                            <input type="reset" value="CANCELAR" class="btn">
                    </div>
                    <ul>
    <?php foreach ($errores as $key => $error):?>
<li><?= $error ?></li>
    <?php endforeach ?>
    </ul>
    </form>


</body>
</html>