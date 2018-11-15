<body>
  <div class="container producto">
    <div class="row productos">
      <div class="col-md-6 imagen">
        <div class="imagen_producto">
          <?php
          $img = 'img/productos/'.$producto[0]['imagen'];
          $tiene_imagen = file_exists($img);
           ?>

           <?php if (!$tiene_imagen): ?>
             <img src="img/producto/producto.jpg" alt="">
           <?php else: ?>
             <img src="<?php echo $img; ?>" alt="">
           <?php endif; ?>



        </div>
      </div>
      <div class="col-6 texto">

          <h2 class="titulo"><?php echo $producto[0]['nombre']; ?></h2>
          <p class="codigo"><?php echo $producto[0]['codigo']; ?></p>
          <p class="precio"><?php echo $producto[0]['precio']; ?></p>
          <!-- <h2 class="titulo">Titulo</h2>
          <p class="codigo">Codigo</p>
          <p class="precio">Precio</p> -->
          <p class="stock">Disponible</p>
          <div class="opcional form-group form-check">
            <input type="checkbox" class="form-check-input" id="inflado">
            <label for="inflado">Inflado con aire</label>
          </div>
          <div class="cantidad form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="" value="">
          </div>
          <a href="#" class="btn btn-info">Agregar al Carrito</a>
      </div>


    </div>
  </div>

  <?php require_once 'partials/footer.php'; ?>
</body>
