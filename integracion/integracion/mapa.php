<!doctype html>
<html lang="en">
  <?php include 'inc/head.php'; ?>
  <body>
    <?php include 'inc/header.php'; ?>
    <section id="mapa">
      <div class="container-fluid header-static p-0 position-relative">
        <div class="position-absolute w-100 tab d-none d-sm-block">
          <div class="container text-right">
            <a href="https://shop.taragui.com/" class="btn">Shop Online ></a>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="div text-center py-4">
          <h2>Mapa de Tiendas Taragüi</h2>
          <p>Encontrá tu Yerba Mate Taragüi más cercana</p>
        </div>
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=10XvUKe8l5YUGfGNySW5abSg4bz8sHruT" width="100%" height="480"></iframe>
          </div>
          <style>.mapouter{text-align:right;height:100%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style>
        </div>
        <div class="row py-4">
          <div class="col-sm-4 text-center text-md-right">
            <h3>Tienda para USA</h3>
            <p>Its B vitamins help you to take advantage of the energy present in food and also aid muscle function</p>
          </div>
          <div class="d-none d-sm-block col-sm-4 text-center">
            <img src="img/mapa/marker.svg" alt="" class="img-fluid">
          </div>
          <div class="col-sm-4 text-center text-md-left">
            <h3>Tienda para Europa</h3>
            <p>Its B vitamins help you to take advantage of the energy present in food and also aid muscle function</p>
          </div>
        </div>
      </div>

      
    </section>
    <?php include 'inc/footer.php'; ?>
    <?php include 'inc/scripts-src.php'; ?>
    <!--custom scripts-->
    <script>
    
    </script>
  </body>
</html>