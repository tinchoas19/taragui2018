<!doctype html>
<html lang="en">
  <?php include 'inc/head.php'; ?>
  <body>
    <?php include 'inc/header.php'; ?>
    <section id="blog">
      <div class="container-fluid leer-index text-center py-4">
        <div class="container">
          <p>Quiero leer sobre</p>
          <div class="row">
            <div class="col-4 col-sm-2 d-flex align-items-center flex-column">
              <a class="category-link-todos"></a>
              <p class="py-2">Todos</p>
            </div>
            <div class="col-4 col-sm-2 d-flex align-items-center flex-column">
              <a data-target="cat-historia" class="category-link"></a>
              <p class="py-2">Historia</p>
            </div>
            <div class="col-4 col-sm-2 d-flex align-items-center flex-column">
              <a data-target="cat-energia" class="category-link"></a>
              <p class="py-2">Energía Natural</p>
            </div>
            <div class="col-4 col-sm-2 d-flex align-items-center flex-column">
              <a data-target="cat-salud" class="category-link"></a>
              <p class="py-2">Salud</p>
            </div>
            <div class="col-4 col-sm-2 d-flex align-items-center flex-column">
              <a data-target="cat-howto" class="category-link"></a>
              <p class="py-2">How To</p>
            </div>
            <div class="col-4 col-sm-2 d-flex align-items-center flex-column">
              <a data-target="cat-prensa" class="category-link"></a>
              <p class="py-2">En la prensa</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid bgbg py-4">
        <div class="container">
          <div class="text-center py-4">
            <p class="smaller-txt mb-2"><a href="blog.php">Aprender</a> / <a href="#cat-historia" class="filtro-hide cat-historia">Historia</a><a href="#cat-energia" class="filtro-hide cat-energia">Energia</a><a href="#cat-salud" class="filtro-hide cat-salud">Salud</a><a href="#cat-howto" class="filtro-hide cat-howto">How To</a><a href="#cat-prensa" class="filtro-hide cat-prensa">En La Prensa</a></p>
            <h1 class="my-0 font-weight-bold titu-todos">Todas las notas</h1>
            <h1 class="my-0 font-weight-bold filtro-hide cat-historia">Historia</h1>
            <h1 class="my-0 font-weight-bold filtro-hide cat-energia">Energia</h1>
            <h1 class="my-0 font-weight-bold filtro-hide cat-salud">Salud</h1>
            <h1 class="my-0 font-weight-bold filtro-hide cat-prensa">En La Prensa</h1>
            <h1 class="my-0 font-weight-bold filtro-hide cat-howto">How To</h1>
          </div>
          <div class="masonry">
             <div class="item nota-preview cat-salud">
              <img src="img/blog/blog01.jpg" alt="" class="img-fluid">
              <div class="p-4">
                <h4><a class="red3txt" href="salud.php">SALUD</a></h4>
                <h3><a href="salud.php">Titulo de la nota</a></h3>
                <p>En su top 50 de mejores bebidas con alcohol y sin alcohol, CNN Travel decide colocar el mate por encima de una de las cervezas. <a href="salud.php" class="red3txt">[+]</a></p>
              </div>
              
             </div>
             <div class="item nota-preview cat-prensa">
              <img src="img/blog/blog02.jpg" alt="" class="img-fluid">
              <div class="p-4">
                <h4><a class="red3txt" href="prensa.php">EN LA PRENSA</a></h4>
                <h3><a href="prensa.php">Titulo de la nota</a></h3>
                <p>En su top 50 de mejores bebidas con alcohol y sin alcohol, CNN Travel decide colocar el mate por encima de una de las cervezas. <a href="prensa.php" class="red3txt">[+]</a></p>
              </div>
              
             </div>
             <div class="item nota-preview cat-energia">
              <img src="img/blog/blog03.jpg" alt="" class="img-fluid">
              <div class="p-4">
                <h4><a class="red3txt" href="energia.php">ENERGIA SALUDABLE</a></h4>
                <h3><a href="energia.php">Titulo de la nota</a></h3>
                <p>En su top 50 de mejores bebidas con alcohol y sin alcohol, CNN Travel decide colocar el mate por encima de una de las cervezas. <a href="energia.php" class="red3txt">[+]</a></p>
              </div>
              
             </div>
             <div class="item nota-preview cat-historia">
              <img src="img/blog/blog04.jpg" alt="" class="img-fluid">
              <div class="p-4">
                <h4><a class="red3txt" href="historia.php">HISTORIA</a></h4>
                <h3><a href="historia.php">Titulo de la nota</a></h3>
                <p>En su top 50 de mejores bebidas con alcohol y sin alcohol, CNN Travel decide colocar el mate por encima de una de las cervezas. <a href="historia.php" class="red3txt">[+]</a></p>
              </div>
              
             </div>
             <div class="item nota-preview cat-howto">
              <img src="img/blog/howto/paso8.jpg" alt="" class="img-fluid">
              <div class="p-4">
                <h4><a class="red3txt" href="howto.php">HOW TO</a></h4>
                <h3><a href="howto.php">Titulo de la nota</a></h3>
                <p>En su top 50 de mejores bebidas con alcohol y sin alcohol, CNN Travel decide colocar el mate por encima de una de las cervezas. <a href="howto.php" class="red3txt">[+]</a></p>
              </div>
              
             </div>
             <div class="item nota-preview cat-salud">
              <img src="img/blog/blog01.jpg" alt="" class="img-fluid">
              <div class="p-4">
                <h4><a class="red3txt" href="salud.php">SALUD</a></h4>
                <h3><a href="salud.php">Titulo de la nota</a></h3>
                <p>En su top 50 de mejores bebidas con alcohol y sin alcohol, CNN Travel decide colocar el mate por encima de una de las cervezas. <a href="salud.php" class="red3txt">[+]</a></p>
              </div>
              
             </div>
             <div class="item nota-preview cat-prensa">
              <img src="img/blog/blog02.jpg" alt="" class="img-fluid">
              <div class="p-4">
                <h4><a class="red3txt" href="prensa.php">EN LA PRENSA</a></h4>
                <h3><a href="prensa.php">Titulo de la nota</a></h3>
                <p>En su top 50 de mejores bebidas con alcohol y sin alcohol, CNN Travel decide colocar el mate por encima de una de las cervezas. <a href="prensa.php" class="red3txt">[+]</a></p>
              </div>
              
             </div>
             <div class="item nota-preview cat-energia">
              <img src="img/blog/blog03.jpg" alt="" class="img-fluid">
              <div class="p-4">
                <h4><a class="red3txt" href="energia.php">ENERGIA SALUDABLE</a></h4>
                <h3><a href="energia.php">Titulo de la nota</a></h3>
                <p>En su top 50 de mejores bebidas con alcohol y sin alcohol, CNN Travel decide colocar el mate por encima de una de las cervezas. <a href="energia.php" class="red3txt">[+]</a></p>
              </div>
              
             </div>
             <div class="item nota-preview cat-historia">
              <img src="img/blog/blog04.jpg" alt="" class="img-fluid">
              <div class="p-4">
                <h4><a class="red3txt" href="historia.php">HISTORIA</a></h4>
                <h3><a href="historia.php">Titulo de la nota</a></h3>
                <p>En su top 50 de mejores bebidas con alcohol y sin alcohol, CNN Travel decide colocar el mate por encima de una de las cervezas. <a href="historia.php" class="red3txt">[+]</a></p>
              </div>
              
             </div>
             <div class="item nota-preview cat-howto">
              <img src="img/blog/howto/paso8.jpg" alt="" class="img-fluid">
              <div class="p-4">
                <h4><a class="red3txt" href="howto.php">HOW TO</a></h4>
                <h3><a href="howto.php">Titulo de la nota</a></h3>
                <p>En su top 50 de mejores bebidas con alcohol y sin alcohol, CNN Travel decide colocar el mate por encima de una de las cervezas. <a href="howto.php" class="red3txt">[+]</a></p>
              </div>
              
             </div>
          </div>

        </div>
      </div>
      
    </section>
    <?php include 'inc/footer.php'; ?>
    <?php include 'inc/scripts-src.php'; ?>
    <!--custom scripts-->
    <script>
      $(document).ready(function(){
     var hash = window.location.hash;
     if(hash)
     {
       var ref = hash.replace('#', '');
      
      $('.nota-preview').css('display', 'none');
      $('.filtro-hide').css('display', 'none');
      $('.titu-todos').css('display', 'none');
       $('.category-link').removeClass('cat-active');
       $('.category-link-todos').removeClass('cat-active');
       $('.'+ ref).css('display', 'inline-block');
       $("category-link").find("[data-target=" + ref + "]").addClass('cat-active');

     }
     $('.link-aprender').addClass('active');
     $('.category-link-todos').click(function(){
       $('.category-link').removeClass('cat-active');
       $('.filtro-hide').css('display', 'none');
       $('.nota-preview').show();
       $('.titu-todos').css('display', 'block');
       $(this).addClass('cat-active');
     });
     $('.category-link').click(function(){
       $('.nota-preview').css('display', 'none');
       $('.filtro-hide').css('display', 'none');
       $('.titu-todos').css('display', 'none');
       $('.category-link').removeClass('cat-active');
       $('.category-link-todos').removeClass('cat-active');
       var ref = $(this).data('target');
       $('.'+ ref).css('display', 'inline-block');
       $(this).addClass('cat-active');
     });
   });
    </script>

  </body>
</html>