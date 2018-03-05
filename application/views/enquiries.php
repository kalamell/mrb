<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Magnolias | Enquiries</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('meta');?>
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="magnolias">
    <meta name="description" content="Magnolias Condo">
    <link href="<?php echo base_url();?>assets/style/normalize.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,600" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/style/main.css?v=<?php echo time();?>" rel="stylesheet" type="text/css">
    <style type="text/css">
      label.error {
        color: red;
        padding: 5px 0px 0px 5px;
        display: block;
        font-size: 1.5em;
      }
      option { color: #000; }
    </style>
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
              <p>Phone 1265</p><br>
              <p>Email : sales@magnolias-ratchadamri.com </p></span>
            <div class="line">
              <ul>
                <li><img src="<?php echo base_url();?>assets/images/02-enquiries/line.png" alt=""></li>
                <li>Please add our official line account for more information and updates.</li>
              </ul><img src="<?php echo base_url();?>assets/images/02-enquiries/line-qr.png" alt="">
            </div>

            <div class="fb">
              <ul>
                <li><img src="../assets/images/02-enquiries/facebook.png" alt=""></li>
                <li><a href="https://www.facebook.com/MagnoliasRatchadamriBoulevard">Add the FB : Magnolias Ratchadamri Boulevard</a></li>
              </ul>
            </div>

            <div class="fb">
              <ul>
                <li><img src="../assets/images/02-enquiries/wechat.png?v=2" alt=""></li>
                
                <li>Wechat number: 0830955054, Wechat ID: Magnoliawechat</li>
              </ul>
            </div>
            
          </div>
        </div>
        <div class="right box">
          <div class="tabs">
            <div class="owner-nav"> 
              <ul>
                <!--<li><a href="">owner of the  residences</a></li>-->
                <li  class="active"><a href="">contact us</a></li>
              </ul>
              <div class="form">
                <!--<div class="owner tab active">
                  <?php echo form_open('enquiries/do_submit', array('id' => 'frm-owner'));?>
                    <input type="text" name="firstname" placeholder="* First name">
                    <input type="text" name="lastname" placeholder="* Last name">
                    <input type="text" name="email" placeholder="* Email">
                    <input type="text" name="mobile" minlength="10" maxlength="10" placeholder="* Phone number">
                    <input type="text" name="address" placeholder="* Address">
                    <input type="text" name="country" placeholder="* Country">
                    <input type="text" name="city" placeholder="* City/State">
                    <input type="text" name="residence_number" placeholder="* Your residences number">
                    <textarea name="message" rows="5" placeholder="* Message"></textarea>
                    <div class="captcha"></div>
                    <input type="submit" name="owner" value="SUBMIT">
                  <?php echo form_close();?>
                </div>-->
                <div class="become tab active">
                  <?php echo form_open('enquiries/do_submit', array('id' => 'frm-become'));?>
                    <div class="radio-wrap">
                      <div class="radio-wrap-item">
                        <input type="radio" name="residences" class="" checked="checked" id="owner" value="owner">
                        <label for="owner">residences</label>
                      </div>
                      <div class="radio-wrap-item">
                        <input type="radio" name="residences" id="become" value="become">
                        <label for="become">become an owner</label>
                      </div>
                    </div>
                    <input type="text" name="firstname" placeholder="* First name" required>
                    <input type="text" name="lastname" placeholder="* Last name" required>
                    <input type="text" name="email" placeholder="* Email" required>
                    <input type="text" name="mobile" minlength="10" maxlength="10" placeholder="* Phone number" required>
                    <input type="text" name="address" placeholder="* Address" required>
                    <input type="text" name="country" placeholder="* Country" required>
                    <input type="text" name="city" placeholder="* City/State" required>
                    <div class="select-wrap" style="display: none;">
                      <select name="where_hear" required>
                        <option value="">* Where did you hear about Magnolias?</option>
                        <option>Billboard</option>
                        <option>Newspaper </option>
                        <option>Magazine </option>
                        <option>Internet </option>
                        <option>SMS</option>
                        <option>Signage</option>
                        <option>direct mail</option>
                        <option>Events </option>
                        <option>Friends/Family</option>
                        <option>Property </option>
                        <option>Agency </option>
                        <option>Others</option>

                      </select>
                    </div>
                    <div class="select-wrap" style="display: none;">
                      <select name="which_type" required>
                        <option value="">* Which type of unit do you prefer?</option>
                        <option>1 Bedroom </option>
                        <option>2 Bedroom</option>
                        <option>Penthouse</option>

                      </select>
                    </div>
                    <textarea name="message" rows="5" placeholder="* Message" required></textarea>
                    <div class="captcha"></div>
                    <input type="submit" name="become" value="SUBMIT">
                  <?php echo form_close();?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('footer');?>
    <script src="<?php echo base_url();?>assets/script/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/script/main.js?v=2" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-zA-Zก-๙]+$/i.test(value);
      }, "Letters only please"); 

      jQuery.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^[a-zA-Zก-๙0-9]+$/.test(value);
      }, "Letters or number only please"); 


      jQuery.validator.addMethod("address", function(value, element) {
        return this.optional(element) || /^[a-zA-Zก-๙0-9., ]+$/i.test(value);
      }, "Letters only please"); 


      jQuery.validator.addMethod("message", function(value, element) {
        return this.optional(element) || /^[a-zA-Zก-๙0-9\n !@#\$%\^\&*\)\(+=._-]+$/i.test(value);
      }, "Letters only please"); 



      $("form#frm-owner").validate({
        rules: {
          firstname: {
            required: true,
            lettersonly: true
          },
          lastname: {
            required: true,
            lettersonly: true
          },
          email: {
            required: true,
            email: true
          },
          mobile: {
            required: true,
            minlength: 10,
            maxlength: 10,
            number: true
          },
          address: {
            required: true,
            address: true,
          },
          country: {
            required: true,
            lettersonly: true
          },
          city: {
            required: true,
            lettersonly: true
          },
          residence_number: {
            required: true,
            alphanumeric: true
          },
          message: {
            required: true,
            message: true
          },
        }
      });


      $("form#frm-become").validate({
        rules: {
          firstname: {
            required: true,
            lettersonly: true
          },
          lastname: {
            required: true,
            lettersonly: true
          },
          email: {
            required: true,
            email: true
          },
          mobile: {
            required: true,
            minlength: 10,
            maxlength: 10,
            number: true
          },
          address: {
            required: true,
            address: true,
          },
          country: {
            required: true,
            lettersonly: true
          },
          city: {
            required: true,
            lettersonly: true
          },
          residence_number: {
            required: true,
            alphanumeric: true
          },
          message: {
            required: true,
            message: true
          },
          where_hear: {
            required: {
              depends: function() {
                return $("input[name=residences]:checked").val() == 'become' ? true : false;
              }
            }
          },
          which_type: {
            required: {
              depends: function() {
                return $("input[name=residences]:checked").val() == 'become' ? true : false;
              }
            }
          }
          /*
          where_hear: {
            required: true
          },
          which_type: {
            required: true
          }*/


        }
      })


      $("input[name=residences]").on('click', function() {
        var val = $(this).val();
        console.log(val);
        if (val == 'owner') {
          $(".select-wrap").hide();
        } else {
          $(".select-wrap").show();
        }
      })
    </script>
  </body>
</html>