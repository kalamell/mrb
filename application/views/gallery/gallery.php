<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Magnolias | Gallery</title>
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

    <div class="wrapper gallery" id="gallery">
      <div class="arrow-control">
        <div class="arrow prev"><i class="fa fa-angle-left"></i></div>
        <div class="arrow next"><i class="fa fa-angle-right"></i></div>
      </div>
      <div class="text-title">
        <h1>A thoughtful and heartfelt development at the heart of Bangkok.</h1>
      </div>
      <div class="home-button"><a class="button" href="<?php echo site_url('gallery/interior');?>">interior</a><a class="button" href="<?php echo site_url('gallery/exterior');?>">exterior</a><a class="button vid" data-fancybox="video" href="https://www.youtube.com/embed/9sMUpFsYyYc?rel=0">video</a></div>
    </div>
    
    <?php $this->load->view('footer');?>

    <script src="<?php echo base_url();?>assets/script/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/script/vegas.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js" type="text/javascript"></script>
    <script>
      //- $(window).on('resize', function(){
      //-   location.reload();
      //- });
      $('.gallery').vegas({
        delay: 10000,
          timer: false,
          shuffle: false,
          transition: 'fade',
          transitionDuration: 2000,
          slides: [
              { src: "<?php echo base_url();?>assets/images/06-gallery/1.png" },
              { src: "<?php echo base_url();?>assets/images/06-gallery/2.png" },
              { src: "<?php echo base_url();?>assets/images/06-gallery/3.png" },
              { src: "<?php echo base_url();?>assets/images/06-gallery/4.png" },
              { src: "<?php echo base_url();?>assets/images/06-gallery/5.png" },
              { src: "<?php echo base_url();?>assets/images/06-gallery/6.png" }
          ]
      });
      
      $(".vid").fancybox({ 
        animationEffect : 'fade',
        clickContent : false,
        loop : true,
        buttons : ['close']
      
      });
    </script>
    <script src="<?php echo base_url();?>assets/script/main.js?v=2" type="text/javascript"></script>
  </body>
</html>