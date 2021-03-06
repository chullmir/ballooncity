<div class="container-fluid container-main-body">
  <div class="row d-flex flex-row-reverse">




    <div class="col-md-9 body-store">

      <div class="banner d-none d-md-block">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/banner/banner1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/banner/banner2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/banner/banner3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="best-selling">
        <h2>Best Selling</h2>
        

        <hr>
        <div class="row">

          <?php foreach ($productos as $producto): ?>

            <div class="col-6 col-sm-4 col-lg-3 producto p-3">
              <?php if (file_exists("img/productos/".$producto['imagen'])): ?>
                <img class="img-fluid" src="img/productos/<?php echo($producto['imagen']) ?>" alt="product image cap">
              <?php else: ?>
                <img class="img-fluid" src="img/producto/producto.jpg" alt="product image cap">
              <?php endif ?>
              


              <div class="product-body">
                <h5 class="product-title"><a href="producto.php?id=<?php echo $producto['codigo']; ?>"><?php echo $producto['nombre']; ?></a></h5>
                <p class="product-text">$ <?php echo $producto['precio']; ?></p>
                <a href="#" class="btn btn-info">Comprar</a>
              </div>
            </div>

          <?php endforeach; ?>








        </div>
      </div>

      <div class="new-products">
        <h2>New Products</h2>
        <hr>
        <div class="row">

          <div class="col-6 col-sm-4 col-lg-3 producto p-3">
            <img class="img-fluid" src="img/producto/producto.jpg" alt="product image cap">
            <div class="product-body">
              <h5 class="product-title">Lorem ipsum dolor sit amet.</h5>
              <p class="product-text">$47</p>
              <a href="#" class="btn btn-info">Comprar</a>
            </div>
          </div>




        </div>
      </div>

      <div class="categorias-store">
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-3 categoria">
            <p><a href="#">Categoria 1</a></p>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 categoria">
            <p><a href="#">Categoria 2</a></p>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 categoria">
            <p><a href="#">Categoria 3</a></p>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 categoria">
            <p><a href="#">Categoria 4</a></p>
          </div>
        </div>
      </div>

      <div class="newsletter">
        <div class="row">
          <div class="col-sm-12 col-md d-flex align-items-center">

            <div class="imagen mr-3">
              <img class="" src="img/newsletter.png" alt="">
            </div>
            <div class="texto">
              Suscribite a nuestro Newsletter y enterate de todas las ofertas y novedades.
            </div>

          </div>

          <div class="col-sm-12 col-md form-group row email">
            <div class="col-12">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="col-12">
              <button class="btn btn-info btn-block">Suscribirse</button>
            </div>
          </div>


        </div>
      </div>


    </div>

    <div class="col col-md-3 aside">

      <div class="list-categorias">
        <a href="productos.php" class="list-group-item">Ver Todos</a>
        <a href="#" class="list-group-item">Cumpleaños</a>
        <a href="#" class="list-group-item">Amor</a>
        <a href="#" class="list-group-item">Felicidades</a>
        <a href="#" class="list-group-item">Religioso</a>
        <a href="#" class="list-group-item">Personajes</a>
        <a href="#" class="list-group-item">Nacimientos</a>
        <a href="#" class="list-group-item">Festejos</a>
        <a href="#" class="list-group-item">Mensajes</a>
        <a href="#" class="list-group-item">Decoracion</a>

      </div>



    </div>

  </div>

</div>



<?php require_once 'partials/footer.php'; ?>
</body>
</html>
