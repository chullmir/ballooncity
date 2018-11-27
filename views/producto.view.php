<body>
  <?php
  $img = 'img/productos/'.$producto[0]['thumb'];
  $tiene_imagen = file_exists($img);

  // echo "<pre>";
  // var_dump($producto);
  // echo "</pre>";
  ?>
  <div class="container product-page">
    <div class="row header">
      <div class="col-12">
        <h1 class="titulo-pagina"><?php echo $producto[0]['nombre']; ?></h1>
      </div>
    </div>
    <div class="row body">
      <div class="col-12 col-md-6">
        <div class="imagen">
          <?php if (!$tiene_imagen): ?>
             <img src="img/producto/producto.jpg" alt="">
           <?php else: ?>
             <img src="<?php echo $img; ?>" alt="">
           <?php endif; ?>
        </div>
        
      </div>
      <div class="col-12 col-md-6">
        <p class="codigo">Código: <?php echo $producto[0]['codigo'] ?></p>
        <p class="precio">Precio: <?php echo $producto[0]['precio'] ?></p>
        <p class="stock">Stock: <?php echo $producto[0]['stock']; ?></p>
        <a href="#" class="btn btn-info">Comprar</a>
      </div>

    </div>

  </div>


  <?php require_once 'partials/footer.php'; ?>
</body>
