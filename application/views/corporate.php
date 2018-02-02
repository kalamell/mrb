<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Magnolias | Corporate</title>
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

    <div class="wrapper corporate top" id="corporate">
      <div class="container">
        <div class="corporate-section-1">
          <h1>WHAT MAKES US DIFFERENT</h1>
          <p>Magnolia Finest Corporation Co., Ltd., a member of DT Group of Companies, established in 2000, operates the Property Development business under the concept of “Think and Create for Human Sustainability”.With this in mind, we develop projects that best respond to the demands and well-being of our residents. The Company invests and develops real estate projects on an international level to build growth of joint ventures and development of international real estate projects with our domestic and international partners and investors. Each project is unique with state-of-the-art design incorporating quality materials, energy and environmental technology. We not only build a place for living, we also innovate to achieve the best quality of life.</p><img src="<?php echo base_url();?>assets/images/03-corporate/1.png" alt="">
        </div>
        <div class="corporate-section-2">
          <ul class="corporate-list">
            <li class="corporate-img"><img src="<?php echo base_url();?>assets/images/03-corporate/2.png" alt=""></li>
            <li class="corporate-text">
              <h2>absolute world care</h2>
              <p>genuine environmental-friendly projects</p>
              <p>- helping create a better world today for a better world tomorrow</p>
              <ul class="corporate-sub">
                <li class="corporate-sub-inner">
                  <ul class="sub-box">
                    <li class="sub-box-img"><img src="<?php echo base_url();?>assets/images/03-corporate/3.png" alt=""></li>
                    <li class="sub-box-text">
                      <p>clean energy</p>
                    </li>
                  </ul>
                </li>
                <li class="corporate-sub-inner">
                  <ul class="sub-box">
                    <li class="sub-box-img"><img src="<?php echo base_url();?>assets/images/03-corporate/4.png" alt=""></li>
                    <li class="sub-box-text">
                      <p>clean transportation</p>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="corporate-list">
            <li class="corporate-img"><img src="<?php echo base_url();?>assets/images/03-corporate/5.png" alt=""></li>
            <li class="corporate-text">
              <h2>boundless life quality design</h2>
              <p>design for quality of life</p>
              <p>- seeking the ultimate living experience</p>
              <p>- state of the art and beyond</p>
            </li>
          </ul>
          <ul class="corporate-list">
            <li class="corporate-img"><img src="<?php echo base_url();?>assets/images/03-corporate/6.png" alt=""></li>
            <li class="corporate-text">
              <h2>ultimate loving community</h2>
              <p>create a loving and caring society</p>
              <p>- buiding long term relationship</p>
              <p>- safe and  secure living</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <?php $this->load->view('footer');?>
    <script src="<?php echo base_url();?>assets/script/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/script/main.js?v=2" type="text/javascript"></script>
  </body>
</html>