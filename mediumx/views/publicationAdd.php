<style type="text/css">
.contenedor{
    margin-left:30%;
    background: rgba(85, 85, 95, 0.5);
    width: 35%;
    border-top: 3px solid #00D0BA;
    margin-top: 4%;
    box-shadow: 1px 2px 4px rgba(1, 1, 1,0.7);
}

.form{
    width: 100%;
}

.datos{
    
    width: 80%;
    background: #fff;
    min-width:20%;
    margin: auto;
    margin-top:70px;
    padding: 4px;
    margin-bottom:-10%;
}

.datos1{
    
    width: 80%;
    background: #fff;
    min-width:20%;
    margin: auto;
    margin-top:20px;
    padding: 4px;
}



.usuario{
    background:#fff;
    padding: 11px;
    margin-left: -4px;;
    font-family: Arial, Helvetica, sans-serif;
    border:none;
    width: 80%;
    margin: auto;
    font-size: 17px;
    outline: none;
}
.usuario1{
    background:#fff;
    padding: 11px;
    margin-left: -4px;;
    font-family: Arial, Helvetica, sans-serif;
    border:none;
    width: 100%;
    margin: auto;
    font-size: 17px;
    outline: none;
}


i{
    background: #fff;
    color: #ccc;
    margin-left: 2px;
    height: 33px;
    padding: 4px;
}

.contrasena{
    background:#fff;
    padding: 11px;
    margin-left: -4px;;
    border:none;
    font-family: Arial, Helvetica, sans-serif;
    width: 80%;
    margin: auto;
    font-size: 17px;
    outline: none;
    
}

.btn{
    padding: 10px;
    width: 100%;
    height:60px;
    border: none;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
    color: #fff;
    font-weight: bold;
    background: #00D0BA;  
    cursor: pointer;
    transition: 0.3s;
    margin-bottom: 3px;
}

.datos2{
    width: 82%;
    background: rgba(85, 85, 95, transparent);
    min-width:20%;
    margin: auto;
    margin-top:80px;
    margin-bottom: 60px;
}

.btn:active{
    transform: scale(0.9);
    transition: 0.4s;
}


@media(max-width:1142px){
    .contenedor{
        width: 50%;
    }
}



@media( max-width:1072px){
    .contrasena{
        margin: auto;
    }
   
}

@media( max-width:843px){
    .contenedor{
        width: 60%;
    }
    .contrasena{
        width: 65%;
        
    }
    .usuario{
        width: 70%;
        
    }
   
}

@media(max-width:453px){
    .contenedor{
        width: 90%;
    }
}

@media(max-width:321px){
    .contenedor{
        width: 100%;
    }
    .contrasena{
        width: 65%;
        
    }
    .usuario{
        width: 70%;
        
    }
}
.textarea{
    width:80%;
  
}
</style>


<script src="public/js/ckeditor5/ckeditor.js"></script>
<script src="public/js/ckeditor5/translations/es.js"></script>


    
<div class="contenedor">


    <form action="?url=publication&action=add" method="post" class="form" enctype="multipart/form-data">
    <div class="datos">
        <input type="text" name="nombreEmpresa" class="usuario" placeholder="Nombre Empresa">
    </div>

    <div class="datos textarea">
            <textarea id="editor" name="descripcion"  cols="40" rows="5">
    
    </textarea>
    </div>

    <div class="datos">
        <input type="file" name="foto" class="usuario" accep='img/jpg'>
    </div>

    <div class="datos">
        <input type="text" name="direccion" class="usuario" placeholder="Direccion">
    </div>

    <div class="datos">
        <input type="text" name="correo_electronico" class="usuario" placeholder="correo_electronico">
    </div>

    <div class="datos">
        <input type="text" name="telefono" class="usuario" placeholder="Telefono">
    </div>

    <div class="datos">

    <select name="idCategoria" class="usuario1">
        <option value="">Seleccionar Categoria</option>
        <?php  foreach ($categorias as $key => $categoria):?>
        <option value="<?=$categoria['id_categoria']?>"><?=$categoria['categoria']?></option>
        <?php  endforeach?>

    </select>

    </div>

    <div class="datos2">
        <input type="submit" value="Agregar Empresa"class="btn">
    </div>
    <ul>
        <?php  foreach ($errores as $key => $error):?>
        <li class="color--alert"><?=$error?></li>
        <?php  endforeach?>
        </ul>
</form>

</div>
<script src="public/js/ckeditor5/config.js"></script>
</body>
</html>