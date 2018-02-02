<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Magnolias | Disclaimer</title>
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
    <div class="wrapper disclaimer top" id="disclaimer">
      <div class="container">
        <h1>DISCLAIMER</h1>
        <p>All materials, plans, specifiations, computer generated images, perspectives in this marketing material are artist’s impressions which serve only as guideline for general conceptual idea of the project. Information provided is deemed accurate at the time of publication. The company reserves the right to change and/or correct details without prior notice.</p><br>
        <p>The information contained in the brochure is subject to change as may be approved by authorities and cannot form part of an offer or contract. All plans are subject to any amendments approved by the relevant authorities. Floors areas and dimensions are approximate and subject to fial survey and construction. Illustrations in this brochure are artist’s impression and serve only to give approximate idea of the project. While every reasonable care has been taken in providing this information, its owners or agents cannot be held responsible for any inaccuracies.</p>
      </div>
    </div>
    <?php $this->load->view('footer');?>
    <script src="<?php echo base_url();?>assets/script/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/script/main.js?v=2" type="text/javascript"></script>
  </body>
</html>