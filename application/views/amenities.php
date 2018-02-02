<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Magnolias | Amenities</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('meta');?>
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="magnolias">
    <meta name="description" content="Magnolias Condo">
    <link href="<?php echo base_url();?>assets/style/normalize.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,600" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css" rel="stylesheet" type="text/css">
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
    <div class="wrapper amenities top" id="amenities">
      <div class="container">
        <div class="section-concept pic-right">
          <div class="box"><img src="<?php echo base_url();?>assets/images/07-amenities/1.png" alt=""></div>
          <div class="box text">
            <div class="text-wrap">
              <h1>Residence Services</h1>
              <ul>
                <li>Director of Residences - Dedicated for the well-being of the residents</li>
                <li>Common Area Property Management - Provided by Magnolia Ratchadamri Boulevard property management under a long term management agreement</li>
                <li>24-hour welcoming desk/reception/concierge/security</li>
                <li>Direct telephone access from ground lobby to residences</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="section-concept">
          <div class="box"><img class="space" src="<?php echo base_url();?>assets/images/07-amenities/2.png" alt=""><img src="<?php echo base_url();?>assets/images/07-amenities/3.png" alt=""></div>
          <div class="box text">
            <div class="text-wrap">
              <h1>Residence Facilities</h1>
              <ul>
                <li>The Magnolia Ratchadamri Boulevard Residences Lounge - an exclusive and private club for the use of residents only</li>
                <li>Exclusive residential lobby and drop off area</li>
                <li>Welcoming desk/receptionist desk/concierge desk</li>
                <li>Garden curve view Library</li>
                <li>Jogging track with slope garden</li>
                <li>Meeting room</li>
                <li>Juristic office</li>
                <li>Mail room and mailbox area</li>
                <li>High speed residential passenger elevators(s)</li>
                <li>High speed service elevator</li>
                <li>Dedicated guest parkings</li>
                <li>Utility meters</li>
                <li>Fitness Center</li>
                <li>Business Center</li>
                <li>Multipurpose room</li>
                <li>Swimming pool with kid's pool</li>
                <li>Steam and sauna room</li>
                <li>Changing and locker room</li>
              </ul>
            </div>
          </div>
        </div><img class="image" src="<?php echo base_url();?>assets/images/07-amenities/4.png" alt="">
      </div>
    </div>
    <?php $this->load->view("footer");?>

    <script src="<?php echo base_url();?>assets/script/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script>
      $("html, body").animate({ scrollTop: 5 }, 1000);
      
      $(window).resize(function() {
        if ($(window).width() >= 568 && $(window).width() <= 736) {
            $('.text-wrap').css('opacity','1');
        }else{
          $('.text-wrap').css('opacity','');
        }
      });
    </script>
    <script src="<?php echo base_url();?>assets/script/main.js?v=2" type="text/javascript"></script>
  </body>
</html>