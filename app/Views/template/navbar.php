<style>
  @media (min-width: 320px) {
  .header .logo h1{
    font-size: 15px;
  }
}

@media only screen and (max-width: 480px) {
  .header .logo h1{
    font-size: 15px;
  }
}

@media (min-width: 992px) {
  .header .logo h1{
    font-size: 30px;
  }
}
@media (min-width: 1280px){
  .navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover>a{
    font-weight: bold;
  }
  .navbar a, .navbar a:focus{
    font-size: 20px;
  }
}

  </style>

<body> 
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?php echo base_url();?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?php echo base_url();?>/public/assets/img/gmg.png" style="padding-bottom:10px; max-height: 100px; background-color:aliceblue;border-bottom-left-radius: 50%;border-bottom-right-radius:50%;"alt="">
        <h1 style="color:#fff;">GMG Shipping And Logistics</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>          
        <li><a href="<?php echo base_url();?>"  class="<?php if($page == 'index') { echo 'active'; } ?>">Home</a></li>
          <li><a href="about" class="<?php if($page == 'about') { echo 'active'; } ?>">About</a></li>
          <li><a href="services" class="<?php if($page == 'services') { echo 'active'; } ?>">Services</a></li>
          <li><a href="contact" class="<?php if($page == 'contact') { echo 'active'; } ?>">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
  <!-- <script>
    
    </script> -->