<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Magnolias | Enquiries Thankyou</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('meta');?>
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="magnolias">
    <meta name="description" content="Magnolias Condo">
    <link href="<?php echo base_url();?>assets/style/normalize.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,600" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
    <div class="wrapper enquiries" id="enquiries">
      <div class="section">
        <div class="left box">
          <div class="kv"></div>
          <div class="contact"><img class="logo" src="<?php echo base_url();?>assets/images/00-share/logo-color.png" alt="">
            <h1>connected at the heart</h1><span>
              <p>Sales Office </p><br>
              <p>Ratchadamri Road Lumpini Sub-district Patumwan District Bangkok</p></span><span>
              <p>Phone +66(2)6522111</p><br>
              <p>Email : sales@magnolias-ratchadamri.com </p></span>
            <div class="line">
              <ul>
                <li><img src="<?php echo base_url();?>assets/images/02-enquiries/line.png" alt=""></li>
                <li>Please add our official line account for more information and updates.</li>
              </ul><img src="<?php echo base_url();?>assets/images/02-enquiries/line-qr.png" alt="">
            </div>
          </div>
        </div>
        <div class="right box">
          <div class="thankyou">
            <h1>thank you very much</h1>
            <p>for your information our sales representative will contact you shortly.</p>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('footer');?>
    <script src="<?php echo base_url();?>assets/script/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/script/main.js?v=2" type="text/javascript"></script>
  </body>
</html>