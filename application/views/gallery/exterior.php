<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Magnolias | Gallery Exterior</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('meta');?>
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="magnolias">
    <meta name="description" content="Magnolias Condo">
    <link href="<?php echo base_url();?>assets/style/normalize.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,600" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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

    <div class="wrapper gallery-details top" id="gallery-details">
      <div class="container">
        <div class="title title-tag">
          <h1>exterior</h1>
          <p>With its dazzling sculptural appearance, Magnolias Ratchadamri Boulevard utilizes intelligent design features that, with its sensual petal-inspired curves and dramatic profile.</p>
          <a class="interested button" href="<?php echo site_url('enquiries');?>">Contact Us</a>
        </div>
        <div class="gallery-wrap fancybox"><a class="item" href="<?php echo base_url();?>assets/images/06-gallery/exterior/6.jpg" data-caption="Magnolias Ratchadamri Boulevard, Panorama view at night">
            <div class="item-content"><img src="<?php echo base_url();?>assets/images/06-gallery/exterior/6.jpg" alt=""></div></a><a class="item" href="<?php echo base_url();?>assets/images/06-gallery/exterior/7.jpg" data-caption="Magnolias Ratchadamri Boulevard, Panorama view at night">
            <div class="item-content"><img src="<?php echo base_url();?>assets/images/06-gallery/exterior/7.jpg" alt=""></div></a><a class="item" href="<?php echo base_url();?>assets/images/06-gallery/exterior/1.jpg" data-caption="Slope garden and swimming pool">
            <div class="item-content"><img src="<?php echo base_url();?>assets/images/06-gallery/exterior/1.jpg" alt=""></div></a><a class="item" href="<?php echo base_url();?>assets/images/06-gallery/exterior/2.jpg" data-caption="Waldorf Astoria Hotel Bangkok">
            <div class="item-content"><img src="<?php echo base_url();?>assets/images/06-gallery/exterior/2.jpg" alt=""></div></a><a class="item" href="<?php echo base_url();?>assets/images/06-gallery/exterior/3.jpg" data-caption="The Magnolia Ratchadamri Boulevard Residence">
            <div class="item-content"><img src="<?php echo base_url();?>assets/images/06-gallery/exterior/3.jpg" alt=""></div></a><a class="item" href="<?php echo base_url();?>assets/images/06-gallery/exterior/4.jpg" data-caption="Curved stair at amenity area">
            <div class="item-content"><img src="<?php echo base_url();?>assets/images/06-gallery/exterior/4.jpg" alt=""></div></a><a class="item" href="<?php echo base_url();?>assets/images/06-gallery/exterior/5.jpg" data-caption="Exclusive and private club">
            <div class="item-content"><img src="<?php echo base_url();?>assets/images/06-gallery/exterior/5.jpg" alt=""></div></a></div>
      </div>
    </div>
    
    <?php $this->load->view('footer');?>
    
    <script src="<?php echo base_url();?>assets/script/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js" type="text/javascript"></script>
    <script>
      $(".fancybox a").fancybox({ 
       	animationEffect : 'fade',
       	clickContent : false,
       	loop : true,
       	buttons : ['close']
      
      }).attr('data-fancybox', 'group1');
    </script>
    <script src="<?php echo base_url();?>assets/script/main.js?v=2" type="text/javascript"></script>
  </body>
</html>