    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQFQBXF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

     <header id="header">
      <div class="container"><a class="logo" href="<?php echo site_url();?>"><img src="<?php echo base_url();?>assets/images/00-share/logo.png" alt=""></a>
        <div class="nav-mobile">
          <div class="hamberger"><span class="left"></span><span class="right"></span></div>
        </div>
        <div class="header">
          <ul class="nav">
            <li><a class="<?php echo $this->uri->segment(1)=='project'?'active':'';?>" href="<?php echo site_url('project/concept');?>">project concept</a></li>
            <li><a class="<?php echo $this->uri->segment(1)=='unit'?'active':'';?>" href="<?php echo site_url('unit/layout');?>">unit layout</a></li>
            <li><a class="<?php echo $this->uri->segment(1)=='lifestyle'?'active':'';?>" href="<?php echo site_url('lifestyle');?>">lifestyle</a></li>
            <li><a class="<?php echo $this->uri->segment(1)=='amenities'?'active':'';?>" href="<?php echo site_url('amenities');?>">amenities</a></li>
            <li><a class="<?php echo $this->uri->segment(1)=='gallery'?'active':'';?>" href="<?php echo site_url('gallery');?>">gallery</a></li>
            <li><a class="<?php echo $this->uri->segment(1)=='enquiries'?'active':'';?>" href="<?php echo site_url('enquiries');?>">contact us</a></li>
          </ul>
        </div>
      </div>
    </header>