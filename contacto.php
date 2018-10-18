<!doctype html>
<html lang="en">
<?php include 'inc/head.php'; ?>
<body>
  <?php include 'inc/header.php'; ?>
  <section id="form-contacto">
   <div class="container contacto">
    <div class="div text-center py-4">
      <h2>Contactanos</h2>
    </div>
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" id="nombre" placeholder="Nombre" />
        </div>
        <div class="form-group col-md-6">
          <input type="number" class="form-control" id="telefono" placeholder="Telefono" />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="email" class="form-control" id="mail" placeholder="Email" />
        </div>
        <div class="form-group col-md-6">
          <input type="email" class="form-control" id="repEmail" placeholder="Reingrese su email" />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <select id="inputState" class="form-control">
            <option selected>Seleccione el motivo</option>
            <option>Informaci&oacute;n sobre Productos</option>
            <option>Informaci&oacute;n sobre Mate Experience</option>
            <option>Informaci&oacute;n sobre cómo preparar un mate</option>
            <option>Quiero comercializar Taragüi en mi tienda</option>
            <option>Estoy interesado en ser distribuidor de Taragüi</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <select id="inputState" class="form-control">
            <option selected>Selecciones pa&iacute;s</option>
            <option>Argentina</option>
            <option>Brasil</option>
            <option>Uruguay</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-12">
          <textarea rows="6" name="message" class="form-control" id="message" aria-invalid="false" placeholder="Message"></textarea>
        </div>
      </div>
      <div class="form-row">
        <button type="submit" class="btn btn-primary btn-submit">Sign in</button>
      </div>
    </div>
  </form>
</div>
<?php include 'inc/footer.php'; ?>
<?php include 'inc/scripts-src.php'; ?>
<!--custom scripts-->
<script>

</script>
</body>
</html>