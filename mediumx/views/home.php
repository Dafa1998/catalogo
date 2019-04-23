<style type="text/css">
    #color{
        text-decoration:none;
        font-family: arial;
        color:black;
        text-align:center;
    }
    .card{
        transition:0.4s;
    display: block;
    border: 1px solid #ccc;
    padding: 5px;
    border-radius: 4px;
    box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.1);
  

    }
    .card:hover{
        background-color:rgba(1,1,1,0.4);
        transition:0.4s;
    }

     .card:active{
        transition:0.4s;
        
    transform: scale(0.8);
    }

</style>

<body>
    
   <div class="rows">
    <?php foreach ($datos as $key => $empresa):?>

        <a id="color" href="?url=detalle&action=view&id=<?=$empresa['id_empresa']?>">

    <article class="col-s-12 col-m-6 col-l-4 p4">
        <div class="card">
        <h3>
            <?= $empresa['nombre_empresa'] ?>
        </h3>
        <p>
            <?= substr($empresa['descripcion'],0,25) ?>
        </p>
 </a>
        </div>
    </article>
    <?php endforeach ?>
   </div>
</body>
</html>