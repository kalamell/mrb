<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Magnolias | Unit Layout Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('meta');?>
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="magnolias">
    <meta name="description" content="Magnolias Condo">
    <link href="<?php echo base_url();?>/assets/style/normalize.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,600" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/style/viewer.min.css">
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
    <div class="wrapper unit-layout-details top" id="unit-layout-details">
      <div class="wrapper breadcrumb">
        <div class="container">
          <ul>
            <li><a href="<?php echo site_url('unit/layout');?>">unit layout</a></li>
            <li><a href="#">one bedroom</a></li>
          </ul>
        </div>
      </div>
      <div class="wrapper unit-wrap">
        <div class="container">
          <div class="box layout-wrap">
            <div class="layout">
              <div class="pic" id="zoom"><img src="<?php echo base_url();?>/assets/images/05-layout-details/ab.jpg" alt=""></div>
            </div>
          </div>
          <div class="box layout-details-wrap">
            <div class="detail">
              <div class="type">
                <h1>one bedroom residence</h1>
              </div>
              <div class="size">
                <table>
                  <tr>
                    <td>SQ.M.</td>
                    <td>: 45-58</td>
                  </tr>
                  <tr>
                    <td>SQ.FT.</td>
                    <td>: 516-645</td>
                  </tr>
                </table>
              </div><a class="interested button" href="<?php echo site_url('enquiries');?>">contact us</a>
            </div>
            <div class="anoter-unit">
              <p>you may be interested in :</p>
              <div class="slide">
                <ul class="layout-items">
                  <li data-type="ab">
                    <div class="box-slide"><img src="<?php echo base_url();?>/assets/images/05-layout-details/ab.jpg" alt=""></div>
                    <div class="box-slide text">
                      <h2>one bedroom residence Type ab</h2>
                      <p>SQ.M. :<span>43.73-50.55</span></p>
                    </div>
                  </li>
                  <li data-type="ac">
                    <div class="box-slide"><img src="<?php echo base_url();?>/assets/images/05-layout-details/ac.jpg" alt=""></div>
                    <div class="box-slide text">
                      <h2>one bedroom residence Type ac</h2>
                      <p>SQ.M. :<span>57.35</span></p>
                    </div>
                  </li>
                  <li data-type="ad">
                    <div class="box-slide"><img src="<?php echo base_url();?>/assets/images/05-layout-details/ad.jpg" alt=""></div>
                    <div class="box-slide text">
                      <h2>one bedroom residence Type ad</h2>
                      <p>SQ.M. :<span>55.91-58.38</span></p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php $this->load->view('footer');?>

    <script src="<?php echo base_url();?>/assets/script/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>/assets/script/viewer.js" type="text/javascript"></script>
    <script>
      new Viewer(document.getElementById('zoom'), {
      	'inline' : true,
      	'toolbar': true,
      	'button': false,
      	'navbar': false,
      	'title': false
      });
      $('.layout-items').slick({
      	infinite: true,
      	slidesToShow: 3,
      	slidesToScroll: 1,
      	vertical: true,
      	focusOnSelect: true,
      	responsive: [
          {
            breakpoint: 480,
            settings: "unslick"
          }
        ]
      });
      $('.layout-items li').on('click', function(){
      	var type = $(this).data('type');
      	var pic = $(this).find('img').attr('src');
      	
      	$('.type-name').text(type);
      	$('.viewer-canvas img').attr('src',pic);
      
      });
    </script>
    <script src="<?php echo base_url();?>/assets/script/main.js?v=2" type="text/javascript"></script>
  </body>
</html>