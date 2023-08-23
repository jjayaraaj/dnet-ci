<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title><?= $this->renderSection("title") ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="<?php echo base_url() ?>css/normalize.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/css/app.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/css/owl.theme.default.min.css">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600;1,700;1,800&family=Poppins:wght@400;500;600;700;800&family=Roboto:ital,wght@0,100;0,300;1,100;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <meta name="theme-color" content="#fafafa">

  <?php
  $bannerImage = base_url() . '/images/home-banner.svg';
  $redefineBg = base_url() . '/images/redefine-banner.svg';
  $successBg = base_url() . '/images/success-stories-bg.svg';
  $digitalBg = base_url() . '/images/digital-banner.svg';
  $formBg = base_url() . '/images/form-bg.svg';
  $formBg2 = base_url() . '/images/form-bg-2.svg';
  $footerBg = base_url() . '/images/footer-bg.svg';


  ?>

  <style>
    .bg-banner {
      background-image: url('<?php echo $bannerImage ?>');
    }

    .bg-redefine {
      background-image: url('<?php echo $redefineBg ?>');
    }

    .bg-success {
      background-image: url('<?php echo $successBg ?>');
    }

    .bg-digital {
      background-image: url('<?php echo $digitalBg ?>');
    }

    .bg-form {
      background-image: url('<?php echo $formBg ?>');
    }

    .bg-form-2 {
      background-image: url('<?php echo $formBg2 ?>');
    }

    .bg-footer {
      background-image: url('<?php echo $footerBg ?>');
    }



    /* @media (min-width: 640px) {
      .bg-banner {
        background-image: url('<?php // echo $bannerImage 
                                ?>');
      }
    }

    @media (min-width: 1024px) {
      .bg-large {
        background-image: url('<?php // echo $largeImageURL 
                                ?>');
      }
    } */
  </style>

</head>

<body>
  <div>
    <?= $this->renderSection("content") ?>
  </div>

  <script src="<?php echo base_url() ?>/js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="<?php echo base_url() ?>/js/plugins.js"></script>
  <script src="<?php echo base_url() ?>/js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function() {
      ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'anonymizeIp', true);
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

  <script src="<?php echo base_url() ?>/js/owl.carousel.min.js"></script>

  <script>
    $(document).ready(function() {

      $("#success").owlCarousel({
        items: 1,
      });

      $(".owl-client").owlCarousel({
        items: 8,
        margin: 20
      });

    });

    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
  </script>

</body>

</html>