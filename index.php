<!doctype html>
<html lang="pt-BR">
<head>
 <? include 'inc/inc.seo.php'; ?>
</head>
<body>

    <? include 'inc/inc.header.php'; ?>
<!-- Carrossel container -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/banner/slider-1.jpg" alt="Primeiro Slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/banner/slider-2.jpg" alt="Segundo Slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/banner/slider-3.jpg" alt="Terceiro Slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>

    <!-- Produtos -->
    <div class="site-section bg-light pt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ml-auto">
            <div class="row mb-4">
              <div class="col-12 text-center mb-4">
                <h3 class="section-sub-title">Produtos</h3>
                <h2 class="section-title mb-4">Conheça nossos produtos</h2>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <img src="img/products/produto-1.jpg" alt="">
                  <h3 class="text-center mt-3">Web Design</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nostrum ducimus temporibus, quod ipsa fuga fugiat deserunt.</p>
                  <p><a href="#" class="readmore">Learn more</a></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <img src="img/products/produto-1.jpg" alt="">
                  <h3 class="text-center mt-3">Web Development</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nostrum ducimus temporibus, quod ipsa fuga fugiat deserunt.</p>
                  <p><a href="#" class="readmore">Learn more</a></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <img src="img/products/produto-1.jpg" alt="">
                  <h3 class="text-center mt-3">Web Apps</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nostrum ducimus temporibus, quod ipsa fuga fugiat deserunt.</p>
                  <p><a href="#" class="readmore">Learn more</a></p>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <img src="img/products/produto-1.jpg" alt="">
                  <h3 class="text-center mt-3">Mobile Apps</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nostrum ducimus temporibus, quod ipsa fuga fugiat deserunt.</p>
                  <p><a href="#" class="readmore">Learn more</a></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <img src="img/products/produto-1.jpg" alt="">
                  <h3 class="text-center mt-3">CopyWriting</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nostrum ducimus temporibus, quod ipsa fuga fugiat deserunt.</p>
                  <p><a href="#" class="readmore">Learn more</a></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <img src="img/products/produto-1.jpg" alt="">
                  <h3 class="text-center mt-3">Search Engine Optimization</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nostrum ducimus temporibus, quod ipsa fuga fugiat deserunt.</p>
                  <p><a href="#" class="readmore">Learn more</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sobre -->
    <section class="about-area pt-5 pb-4">
        <div class="container">
        <div class="row align-items-lg-center">
          <div class="col-md-6 mb-5 mb-lg-0 position-relative">
            <img src="img/about/about_1.jpg" class="img-fluid" alt="Image">
            <div class="experience">
              <span class="year">50 anos</span>
              <span class="caption">de experiência</span>
            </div>
          </div>
          <div class="col-md-5 ml-auto">
            <h3 class="section-sub-title">Sobre Nós</h3>
            <h2 class="section-title mb-3">Bem-vindo à Medcare</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui fuga ipsa, repellat blanditiis nihil, consectetur. Consequuntur eum inventore, rem maxime, nisi excepturi ipsam libero ratione adipisci alias eius vero vel!</p>
            <p><a href="sobre-nos.php" class="btn main_btn">Sobre Nós</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- CTA -->
    <section class="hotline-area text-center area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Fale Conosco</h2>
                    <span>(11) 6452-5852</span>
                    <p class="pt-3">Estamos sempre prontos para melhor atendê-los.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <? include 'inc/inc.footer.php'; ?>
    <? include 'inc/inc.js.php'; ?>


</body>
</html>