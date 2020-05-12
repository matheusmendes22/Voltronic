<!doctype html>
<html lang="pt-BR">
<head>
  <?php include 'inc/inc.seo.php';?>
</head>
<body>


    <!--================Header Menu Area =================-->
    <?php include 'inc/inc.header.php';?>
    <!--================Header Menu Area =================-->


 
 <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h1>Contato</h1>
            </div>
            <div class="page_link">
              <a href="index.php">Home</a>
              <a href="contato.php">Contato</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->


  <!-- ================ contact section start ================= -->
  <section class="contact-section area-padding">
    <div class="container">


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Entre em Contato</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Mensagem"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Nome">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="E-mail">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Assunto">
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm">Enviar</button>
            </div>
          </form>


        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fas fa-home"></i></span>
            <div class="media-body">
              <h3>Diadema-SP Av. Fukuichi Nakata, 806</h3>
              <p>Piraporinha, Diadema-SP</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fas fa-tablet-alt"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654">(11) 97113-3733</a></h3>
              <p>Seg. à Sex: 08:30hs às 18:00</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fas fa-mail-bulk"></i></span>
            <div class="media-body">
              <h3><a href="mailto:atendimento@voltronicpowersolution.com.br">atendimento@voltronicpowersolution.com.br</a></h3>
              <p>Envie-nos um e-mail à qualquer momento!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->


<!-- start footer Area -->
    <?php include 'inc/inc.footer.php';?>
    <?php include 'inc/inc.js.php';?>
</body>
</html>