<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Magnolias | Press &amp; Media</title>
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

    <div class="wrapper press-and-media top" id="news">
      <div class="container">
        <div class="title title-tag">
          <h1>press & media </h1>
          <p>In the heart of Bangkok’, is a truly remarkable development, combining modernity, luxury, and convenience with traditional values to create a unique
living experience.
</p>
        </div>
        <div class="news-wrap">

          <?php foreach($rs as $r):?>
          <div class="item">
            <div class="item-content"><a class="img-wrap" data-fancybox="video" href="https://www.youtube.com/embed/<?php echo $r->youtubeid;?>?rel=0"><img src="https://img.youtube.com/vi/<?php echo $r->youtubeid;?>/0.jpg" alt=""></a>
              <div class="text-content">
                <div class="text-title">
                  <h5><?php echo $r->title;?></h5>
                </div>
                <div class="text-detail">
                  <p><?php echo $r->shortly;?></p>
                </div><a class="more" href="<?php echo site_url('media/detail/'.$r->url);?>">discover more<span>></span></a>
              </div>
            </div>
          </div>

        <?php endforeach;?>
          
        </div>
      </div>
    </div>
    
    <?php $this->load->view('footer');?>

    <script src="<?php echo base_url();?>assets/script/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js" type="text/javascript"></script>
    <script>
      $(".img-wrap").fancybox({ 
       	animationEffect : 'fade',
       	clickContent : false,
       	loop : true,
       	buttons : ['close']
      
      });
    </script>
    <script src="<?php echo base_url();?>assets/script/main.js?v=2" type="text/javascript"></script>
  </body>
</html>