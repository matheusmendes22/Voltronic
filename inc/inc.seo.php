<?php

header("Content-Type: text/html; charset=utf-8", true);

# ----------------------------------------
# Catch actual page
# ----------------------------------------
$activePage = basename($_SERVER['REQUEST_URI']);

# ----------------------------------------
# Cases
# ----------------------------------------
switch($activePage)
{

  

  case "sobre-nos":
      $title= "Sobre Nós | Voltronic power Solution";
      $description = "Assistência, Comércio e Serviços em Eletrônica Ltda.";
      break;
  
  case "produtos":
      $title= "Produtos | Voltronic power Solution";
      $description = "Assistência, Comércio e Serviços em Eletrônica Ltda.";
      break;
 
 case "contato":
      $title= "Fale conosco | Voltronic power Solution";
      $description = "Assistência, Comércio e Serviços em Eletrônica Ltda.";
      break;
 
 case "servicos":
      $title= "Serviços | Voltronic power Solution";
      $description = "Contamos com uma linha completa de serviços para voce, confira.";
      break;

 case "bateria-estacionaria":
      $title= "Bateria Estacionária | Voltronic power Solution";
      $description = "Baterias estacionárias prontas para suportar a sua demanda, saiba mais.";
      break;

 case "bateria-vrla-selada":
      $title= "Bateria VRLA Selada | Voltronic power Solution";
      $description = "Baterias seguras com tecnologia de ponta, a dispor de suportar a sua demanda, saiba mais.";
      break;

 case "contato":
      $title= "Contato | Voltronic power Solution";
      $description = "Entre em contato conosco, estamos prontos para oferecer a melhor solução em energia ininterrupta para você! Saiba mais";
      break;

 case "estabilizador-system-mmb":
      $title= "ESTABILIZADOR SYSTEM MMB  5 a 50 kva | Voltronic power Solution";
      $description = "Estabilizadores equipados com tecnologia de ponta, prontos para te atender.";
      break;

 case "estabilizador-monofasico":
      $title= "ESTABILIZADOR SYSTEM MT | Voltronic power Solution";
      $description = "Estabilizadores com um excelente custo benefício, equipados com tecnologia de ponta, prontos para te atender. Saiba mais";
      break;

 case "manutencao":
      $title= "Manutenção | Voltronic power Solution";
      $description = "Veja nossas manutenções e veja como a Power System tem caminhado rumo a melhor empresa no segmento de energia ininterrupta da região. Veja mais";
      break;

 case "system-mono":
      $title= "SYSTEM MONO 1Kva a 20Kva | Voltronic power Solution";
      $description = "Conheça o mais famoso No-Break da Power System, projetado especialmente para você que busca potência a um logno periodo. Veja mais";
      break;

 case "system-bif":
      $title= "SYSTEM BIF 6 a 20 kva | Voltronic power Solution";
      $description = "Confira o quão estável e potente é o nosso No-Break, que oferece o melhor com o que há de mmelhor no mercado, Confira";
      break;

 case "servicos":
      $title= "Serviços | Voltronic power Solution";
      $description = "Veja nossos serviços, confira o que nós lhe oferecemos, energia ininterrupta para o seu negócio. Saiba mais";
      break;

 case "sobre-nos":
      $title= "Sobre nós | Voltronic power Solution";
      $description = "Conheça mais sobre a nossa história, veja como a Power System tem se diferenciado ao longo dos anos. Saiba mais";
      break;

 case "system-tri":
      $title= "SYSTEM TRI 10 à 180 kva | Voltronic power Solution";
      $description = "Conheça mais sobre um dos mais tecnológicos de nossa linha, que possibilita a troca de baterias sem ser necessário o desligamento entre outros muitos beneficios. Saiba mais";
      break;

 case "system-rt":
      $title= "SYSTEM RT 3 a 20 kva | Voltronic power Solution";
      $description = "Conheça o nosso No-Break System Tri e se surpreenda com a tecnologia envolvida. Saiba mais";
      break;

      default: "";
      $title= "Voltronic Power Solution";
      $description ="Assistência, Comércio e Serviços em Eletrônica Ltda.";
    }

$keywords="";

  $proto = (isset($_SERVER['HTTPS']) === true) ? 'https' : 'http';
  $canonical = $proto.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
<!doctype html>
<html lang="pt-BR">
<head>

<!DOCTYPE html>
<html lang="pt-BR" class="no-js">
    <!-- Begin Head -->
   

  <!-- Sempre checar se está OK daqui para baixo -->
  
  <!-- Title -->
  <title><?= $title?></title>
  <!-- Charset -->
  <meta charset="UTF-8">
  <!-- Meta Tags -->
  <meta name="description" content="<?=$description?>">
  <meta name="keywords" content="<?=$keywords?>">
    <!-- Canonical -->
  <link rel="canonical" href="<?=$canonical?>" />
    <!-- OpenGraph -->
  <meta property="og:region" content="Brasil">
  <meta property="og:title" content="<?=$title?>">
  <meta property="og:type" content="article">
  <meta property="og:description" content="<?=$description?>">
  <meta property="og:site_name" content="<?=$title?>">
  <meta property="og:keywords" content="<?=$keywords?>">
  <meta property="og:canonical" content="<?=$canonical?>">

  <meta name="author" content="Matheus Mendes">
  <meta name="fone" content="11 9 7761-7473" />
  <meta name="city" content="São Paulo"/>

  <!-- Daqui para baixo é padrão, não mexer -->

  <meta name="country" content="Brasil"/>
  <meta name="geo.region" content="-BR" />
  <meta name="copyright" content="Copyright " />
  <meta name="geo.position" content="-23.539351;-46.681925"> 
  <meta name="geo.placename" content="São Paulo-SP"> 
  <meta name="geo.region" content="SP-BR">
  <meta name="ICBM" content="-23.539351;-46.681925">
  <meta name="robots" content="index,follow">
  <meta name="rating" content="General">
  <meta name="revisit-after" content="2 days">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
  <!-- CSS -->
<?php include 'inc/inc.css.php'; ?>
