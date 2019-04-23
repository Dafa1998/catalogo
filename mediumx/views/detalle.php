<style type="text/css">
    #article{
        text-align:center;
        color:#fff;
        background-color:rgb(1, 40, 200);
    }
    #title{
        text-align:center;
        font-size:35px;
        font-family:Arial, Helvetica, sans-serif;
    }+
</style>

<div class="rows">
        
          <article class="col-s-12  p4 card" id="article">
          

              <h3 class=" align-baseline-s justify-between-s" id="title">
                <?= $title?>
                </h3>
              <p>
              <?=$descripcion?>
              </p>
              <p>
             <img src="public/img/<?=$url_foto?>" alt="">
              </p>
              <p>
              <?=$direccion?>
              </p>
              <p>
              <?=$correo_electronico?>
              </p>
              <p>
              <?=$telefono?>
              </p>
          </article>
      </div> <!-- fin de rows-->
      </div><!-- fin de container-->

</body>
</html>