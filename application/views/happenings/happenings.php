<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Magnolias | Happenings</title>
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

    <div class="wrapper happenings top" id="news">
      <div class="container">
        <div class="title title-tag">
          <h1>Happenings </h1>
          <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>-->
        </div>
        <div class="news-wrap">
          <?php foreach($rs as $r):?>
          <a class="item" href="<?php echo site_url('happenings/detail/'.$r->id);?>">
            <div class="item-content">
              <div class="img-wrap"><img src="<?php echo base_url();?>upload/<?php echo $r->img_path;?>" alt=""></div>
              <div class="text-content">
                <div class="text-title">
                  <h5><?php echo $r->title;?></h5>
                </div>
                <div class="text-detail">
                  <p><?php echo $r->short_desc;?></p>
                </div>
              </div>
            </div></a>
          <?php endforeach;?>

            <!--<a class="item" href="<?php echo site_url('happenings/detail');?>">
            <div class="item-content">
              <div class="img-wrap"><img src="<?php echo base_url();?>assets/images/09-happenings/2.png" alt=""></div>
              <div class="text-content">
                <div class="text-title">
                  <h5>Contrary to popular belief, Lorem Ipsum is not simply random text. </h5>
                </div>
                <div class="text-detail">
                  <p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Lubia.</p>
                </div>
              </div>
            </div></a><a class="item" href="<?php echo site_url('happenings/detail');?>">
            <div class="item-content">
              <div class="img-wrap"><img src="<?php echo base_url();?>assets/images/09-happenings/3.png" alt=""></div>
              <div class="text-content">
                <div class="text-title">
                  <h5>Contrary to popular belief, Lorem Ipsum is not simply random text. </h5>
                </div>
                <div class="text-detail">
                  <p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in</p>
                </div>
              </div>
            </div></a><a class="item" href="<?php echo site_url('happenings/detail');?>">
            <div class="item-content">
              <div class="img-wrap"><img src="<?php echo base_url();?>assets/images/09-happenings/4.png" alt=""></div>
              <div class="text-content">
                <div class="text-title">
                  <h5>Contrary to popular belief, Lorem Ipsum is not simply random text. </h5>
                </div>
                <div class="text-detail">
                  <p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in</p>
                </div>
              </div>
            </div></a><a class="item" href="<?php echo site_url('happenings/detail');?>">
            <div class="item-content">
              <div class="img-wrap"><img src="<?php echo base_url();?>assets/images/09-happenings/5.png" alt=""></div>
              <div class="text-content">
                <div class="text-title">
                  <h5>Contrary to popular belief, Lorem Ipsum is not simply random text. </h5>
                </div>
                <div class="text-detail">
                  <p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in</p>
                </div>
              </div>
            </div></a><a class="item" href="<?php echo site_url('happenings/detail');?>">
            <div class="item-content">
              <div class="img-wrap"><img src="<?php echo base_url();?>assets/images/09-happenings/6.png" alt=""></div>
              <div class="text-content">
                <div class="text-title">
                  <h5>Contrary to popular belief, Lorem Ipsum is not simply random text. </h5>
                </div>
                <div class="text-detail">
                  <p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in</p>
                </div>
              </div>
            </div></a><a class="item" href="<?php echo site_url('happenings/detail');?>">
            <div class="item-content">
              <div class="img-wrap"><img src="<?php echo base_url();?>assets/images/09-happenings/7.png" alt=""></div>
              <div class="text-content">
                <div class="text-title">
                  <h5>Contrary to popular belief, Lorem Ipsum is not simply random text. </h5>
                </div>
                <div class="text-detail">
                  <p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in</p>
                </div>
              </div>
            </div></a><a class="item" href="<?php echo site_url('happenings/detail');?>">
            <div class="item-content">
              <div class="img-wrap"><img src="<?php echo base_url();?>assets/images/09-happenings/8.png" alt=""></div>
              <div class="text-content">
                <div class="text-title">
                  <h5>Contrary to popular belief, Lorem Ipsum is not simply random text. </h5>
                </div>
                <div class="text-detail">
                  <p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in</p>
                </div>
              </div>
            </div></a><a class="item" href="<?php echo site_url('happenings/detail');?>">
            <div class="item-content">
              <div class="img-wrap"><img src="<?php echo base_url();?>assets/images/09-happenings/9.png" alt=""></div>
              <div class="text-content">
                <div class="text-title">
                  <h5>Contrary to popular belief, Lorem Ipsum is not simply random text. </h5>
                </div>
                <div class="text-detail">
                  <p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in</p>
                </div>
              </div>
            </div></a>-->
          </div>
      </div>
    </div>
    <?php $this->load->view('footer');?>
    
    <script src="<?php echo base_url();?>assets/script/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/script/main.js?v=2" type="text/javascript"></script>
  </body>
</html>