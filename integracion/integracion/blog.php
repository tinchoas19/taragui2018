<!doctype html>
<html lang="en">
  <?php include 'inc/head.php'; ?>
  <body  ng-app="taragui2018">
    <?php include 'inc/header.php'; ?>
    <section id="blog" ng-controller="TaraguiCtrl" >
      <div class="container-fluid header">
        <img src="" class="img-fluid">
      </div>
      <div class="container leer-index text-center mb-4">
        <p>Quiero leer sobre</p>
        <div class="row">
          <div class="col-4 col-sm-2">
            <a class="category-link-todos d-flex align-items-center"><img class="img-fluid" src="img/blog/produccion.jpg"></a>
            <p class="py-2">Todos</p>
          </div>
          <div class="col-4 col-sm-2">
            <a data-target="cat-100" class="category-link d-flex align-items-center"><img class="img-fluid" src="img/blog/historia.jpg"></a>
            <p class="py-2">Historia</p>
          </div>
          <div class="col-4 col-sm-2">
            <a data-target="cat-energia" class="category-link d-flex align-items-center"><img class="img-fluid" src="img/blog/energia.jpg"></a>
            <p class="py-2">Energía Natural</p>
          </div>
          <div class="col-4 col-sm-2">
            <a data-target="cat-salud" class="category-link d-flex align-items-center"><img class="img-fluid" src="img/blog/salud.jpg"></a>
            <p class="py-2">Salud</p>
          </div>
          <div class="col-4 col-sm-2">
            <a data-target="cat-147" class="category-link d-flex align-items-center"><img class="img-fluid" src="img/blog/howto.jpg"></a>
            <p class="py-2">How To</p>
          </div>
          <div class="col-4 col-sm-2">
            <a data-target="cat-prensa" class="category-link d-flex align-items-center"><img class="img-fluid" src="img/blog/prensa.jpg"></a>
            <p class="py-2">En la prensa</p>
          </div>
        </div>
      </div>
      <div class="container" ng-init="getBlogPostsFromWordpress()">
        <div class="row">
          <div ng-repeat="post in posts" class="col-sm-3 mb-4 nota-preview cat-{{post.category}}" >
            <div class="nota-thumb align-items-center">
              
              <img src="{{post.imagesrc}}" alt="" class="img-fluid">
              
            </div>
            <h2><a href="{{post.link}}">{{post.title["rendered"]}}</a></h2>
          </div>
  
        </div>
      </div>
    </section>
    <?php include 'inc/footer.php'; ?>
    <?php include 'inc/scripts-src.php'; ?>
    <!--custom scripts-->
    <script>
      $(document).ready(function(){
        $('.link-aprender').addClass('active');
        $('.category-link-todos').click(function(){
          $('.nota-preview').show();
        });
        $('.category-link').click(function(){
          $('.nota-preview').hide();
          var ref = $(this).data('target');
          $('.'+ ref).show();
        });
      });
    </script>
  </body>
</html>