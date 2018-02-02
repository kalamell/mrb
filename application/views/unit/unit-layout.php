<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Magnolias | Unit Layout</title>
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

    <div class="wrapper unit-layout top" id="unit-layout">
      <div class="container">
        <div class="unit-table">
          <table>
            <thead>
              <tr>
                <th>unit type</th>
                <th>area (sq.m.)</th>
                <th>area (sq.ft.)</th>
                <th>unit layout</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-label="UNIT TYPE">1 bedroom</td>
                <td data-label="AREA (SQ.M.)">48 - 58</td>
                <td data-label="AREA (SQ.FT.)">516 - 645</td>
                <td data-label="FLOOR PLAN"><a href="<?php echo site_url('unit/details/1bedroom');?>">View more</a></td>
              </tr>
              <tr>
                <td data-label="UNIT TYPE">2 bedroom</td>
                <td data-label="AREA (SQ.M.)">75 - 108</td>
                <td data-label="AREA (SQ.FT.)">807 - 1162</td>
                <td data-label="FLOOR PLAN"><a href="<?php echo site_url('unit/details/2bedroom');?>">View more</a></td>
              </tr>
              <tr>
                <td data-label="UNIT TYPE">penthouse</td>
                <td data-label="AREA (SQ.M.)">321 - 384</td>
                <td data-label="AREA (SQ.FT.)">3455 - 4133</td>
                <td data-label="FLOOR PLAN"><a href="<?php echo site_url('unit/details/penthouse');?>">View more</a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="unit-remark">
          <table>
            <tr>
              <td>** Sinking fund – paid in full on the date of sub-lease registration</td>
              <td>1,000  (Baht/sq.m.)</td>
            </tr>
            <tr>
              <td>** Maintenance fee- paid 12 month in advance</td>
              <td>90  (Baht/Sq.m./month)</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <?php $this->load->view('footer');?>
    <script src="<?php echo base_url();?>assets/script/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/script/main.js?v=2" type="text/javascript"></script>
  </body>
</html>