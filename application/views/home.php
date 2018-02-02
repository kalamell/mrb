<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Magnolias | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('meta');?>
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="magnolias">
    <meta name="description" content="Magnolias Condo">
    <link href="<?php echo base_url();?>assets/style/normalize.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,600" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/style/vegas.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css">
    <link href="<?php echo base_url();?>assets/style/main.css?v=<?php echo time();?>" rel="stylesheet" type="text/css">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push(
    {'gtm.start': new Date().getTime(),event:'gtm.js'}
    );var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KQFQBXF');</script>
    <!-- End Google Tag Manager -->
  </head>
  <body>
    
    <?php $this->load->view('menu');?>
    
    <!--<div class="wrapper home" id="home">
      <div class="container">
        <div class="home-header">
          <ul>
            <li class="logo"><img src="<?php echo base_url();?>assets/images/01-home/logo.png" alt=""></li>
            <li>
              <h2>bkk today</h2>
              <h3 class="date"></h3>
              <h3 class="time"></h3>
            </li>
          </ul>
        </div>
      </div>
      <div class="home-text">
        <h1>
           Fulfilling The Legacy<br>Of Ratchadamri</h1>
      </div>
      <div class="home-button"><a class="button" href="<?php echo site_url('gallery');?>">residences</a><a class="button" href="<?php echo site_url('happenings');?>">happenings</a></div>
    </div>-->

    <div class="wrapper home" id="home">
      <div class="container"></div>
      <video class="home-vdo" src="<?php echo base_url();?>assets/vdo/mrb-2k.mp4" autoplay muted loop></video>
      <div class="home-text">
        <h1>
           Fulfilling The Legacy<br>Of Ratchadamri</h1>
      </div>
      <div class="home-button"><a class="button" href="<?php echo site_url('gallery');?>">residences</a><a class="button" href="<?php echo site_url('happenings');?>">happenings</a></div>
    </div>

    <footer id="footer">
      <div class="contact">
        <div class="container">
          <ul>
            <li class="address"><img src="<?php echo base_url();?>assets/images/00-share/icon1.png" alt="">
              <p>695 Magnolia Finest Corporation Limited Sukhumvit 50, Klongtoey, Prakanong, Bangkok 10260</p>
            </li>
            <li><img src="<?php echo base_url();?>assets/images/00-share/icon2.png" alt="">
              <p><a href="mailto:sales@magnolias-ratchadamri.com">sales@magnolias-ratchadamri.com</a></p>
            </li>
            <li><img src="<?php echo base_url();?>assets/images/00-share/icon3.png" alt="">
              <p><a href="tel:+6626522111">+66.2652.2111</a></p>
            </li>
            <li class="line"><a href=""><img src="<?php echo base_url();?>assets/images/00-share/icon4.png" alt="">: @MRB_MQDC</a></li>
          </ul>
        </div>
      </div>
      <div class="footer">
        <div class="container">
          <ul>
            <li>
              <h5>Connected at the Heart </h5>
              <p>At the heart of a country held in the highest regard as a place to live, at the heart of a dream city for international travellers, there is a prestigious boulevard that is a crossroads of the city’s life and spirit.Presenting a uniquely superior world of fine architecture and greenvistas, of outstanding hotels and entrancing diversions, Ratchadamri Boulevard offers the perfect home.</p>
            </li>
            <li>
              <h5>more information</h5>
              <ul class="sub-menu">
                <li><a href="press-and-media.html">Press & Media</a></li>
                <li><a href="<?php echo base_url();?>assets/download/minibrochure_feb_20.pdf">Download brochure</a></li>
                <li><a href="corporate.html">Corporate info</a></li>
                <li><a href="disclaimer.html">Disclaimer</a></li>
              </ul>
            </li>
            <li>
              <div class="map"><a href="https://www.google.co.th/maps/dir/''/magnolias-ratchadamri+map/@13.7654117,100.5140509,11z/data=!4m8!4m7!1m0!1m5!1m1!1s0x30e29ed08645896b:0x69dbe581cc2baac3!2m2!1d100.540276!2d13.742584" target="_blank"><img src="<?php echo base_url();?>assets/images/00-share/map.png" alt=""></a></div>
            </li>
          </ul>
        </div>
      </div>
      <div class="copyright">
        <div class="container">
          <p>Copyright © 2017 MQDC (Magnolia Quality Development Corporation Limited)</p>
        </div>
      </div>
    </footer>
    <script src="<?php echo base_url();?>assets/script/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/script/vegas.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.13/moment-timezone.min.js" type="text/javascript"></script>
    <script>
      //$('header , footer').hide();
      /*
      $('.home').vegas({
        delay: 10000,
          timer: false,
          shuffle: true,
          transition: 'fade',
          transitionDuration: 2000,
          slides: [
              { src: "<?php echo base_url();?>assets/images/01-home/1.png" }
          ]
      });
      */
      
      var date = moment.tz('Asia/Bangkok').format('DD MMM YYYY');
      var time = moment().format("h" + " : " + "m" + " " + "A");

      /*$.fancybox.open({
        src: '<?php echo base_url();?>assets/images/01-home/popup.jpg',
        type: 'image'
      })*/
      
      $(".date").text(date);
      $(".time").text(time);
    </script>
    <script src="<?php echo base_url();?>assets/script/main.js?v=2" type="text/javascript"></script>
  </body>
</html>