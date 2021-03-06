<!doctype html>
<html lang="en">
  <?php include 'inc/head.php'; ?>
  <body>
    <?php include 'inc/header.php'; ?>
    <section id="home">


        <div id="carouselHeader" class="carousel slide red3bg" data-ride="carousel">
          <div class="carousel-inner">

            <div class="carousel-item active slide-ganate red3bg">
              <div class="d-flex align-middle justify-content-center">
                <a href="#"><img src="img/home/slide-ganate.svg" class="img-fluid"></a>
              </div>
            </div>

            
            <div class="carousel-item slide-exp red3bg">
              <div class="d-flex align-middle justify-content-end">
                <a href="#"><img src="img/home/slide-exp.svg" class="img-fluid"></a>
              </div>
            </div>

            <!--div class="carousel-item">
              <img class="d-block w-100" src="img/home/header1.png" alt="Third slide">
            </div-->
          </div>
          <a class="carousel-control-prev" href="#carouselHeader" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselHeader" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="container">
          <h2 class="text-center py-3">Enjoy all the healthy benefits of yerba mate!</h1>
          <div class="row">
              <div class="col-md-4 text-center">
                  <p><img src="img/home/img1.jpg" class="img-fluid" ></p>
                  <h3 class="sub-title">Natural and healthy energizing effect</h2>
                  <p>It contains xanthines that make it a natural energizer, even more so than coffee. Yerba maté is healthy, it improves concentration and stimulates physical effort.</p>
              </div>
              <div class="col-md-4 text-center">
                  <p><img src="img/home/img2.jpg" class="img-fluid" ></p>
                  <h3 class="sub-title">Antioxidant effect</h2>
                  <p>Thanks to its polyphenols, it is a very powerful antioxidant that helps to decrease cardiovascular risks and to avoid cellular aging. It contains more antioxidants than green tea.</p>
              </div>
              <div class="col-md-4 text-center">
                  <p><img src="img/home/img3.jpg" class="img-fluid" ></p>
                  <h3 class="sub-title">Source of vitamins and minerals</h2>
                  <p>Its B vitamins help you to take advantage of the energy present in food and also aid muscle function. Yerba maté contains potassium and magnesium, essential for a healthy heart and for protein absorption.</p>
              </div>
          </div>
        </div>

        <div class="container pb-5 d-none d-md-block">
          <img src="img/home/banner.svg" alt="" class="img-fluid">
        </div>

        <div class="container banner p-4 d-md-none">
          <div class="banner-inner">
            <div class="row">
              <div class="col-sm-7">
                <img src="img/home/guia.svg" alt="" class="img-fluid">
              </div>
              <div class="col-sm-5">
                <img src="img/home/matexp.svg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

        <div class="parle py-3 d-none d-md-block">
          <div class="container">
            <h2>On parle de Yerba Mate Taragüi</h2>
            <div id="carouselParle" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-2 px-2">
                      <div class="parle-logo text-center p-l-2 p-xl-3">
                        <img src="img/home/parle1.png" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-2 px-2">
                      <div class="parle-logo text-center p-l-2 p-xl-3">
                        <img src="img/home/parle1.png" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-2 px-2">
                      <div class="parle-logo text-center p-l-2 p-xl-3">
                        <img src="img/home/parle1.png" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-2 px-2">
                      <div class="parle-logo text-center p-l-2 p-xl-3">
                        <img src="img/home/parle1.png" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-2 px-2">
                      <div class="parle-logo text-center p-l-2 p-xl-3">
                        <img src="img/home/parle1.png" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-2 px-2">
                      <div class="parle-logo text-center p-l-2 p-xl-3">
                        <img src="img/home/parle1.png" class="img-fluid">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselParle" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselParle" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>

        <div class="text-center products py-5">
          <h2>Products</h2>

          <div class="d-sm-none">
            <?php include 'inc/prods-xs.php'; ?>
          </div>
          <div class="d-none d-sm-block d-md-none">
            <?php include 'inc/prods-sm.php'; ?>
          </div>
          <div class="d-none d-md-block d-lg-none">
            <?php include 'inc/prods-md.php'; ?>
          </div>
          <div class="d-none d-lg-block">
            <?php include 'inc/prods-lg.php'; ?>
          </div>

        </div>

    </section>
    <?php include 'inc/footer.php'; ?>
    <?php include 'inc/scripts-src.php'; ?>
  </body>
</html>