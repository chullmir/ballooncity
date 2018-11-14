<body>
  <div class="container producto">
    <div class="row productos">
      <div class="col-6 imagen">
        <div class="imagen_producto">
          <img src="img/producto/producto.jpg" alt="">
        </div>
      </div>
      <div class="col-6 texto">
          <h2 class="titulo">Globo Metalizado 9´´ Corazon Liso Celeste</h2>
          <p class="codigo">341009</p>
          <p class="precio">$ 50</p>
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
