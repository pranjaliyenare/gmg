<!-- ======= Footer ======= -->
<footer id="footer" class="footer" style="padding-bottom: 50px;">

<div class="container">
  <div class="row gy-4">
    <div class="col-lg-5 col-md-12 footer-info" style="margin-top: 0px;">
      <a href="<?php echo base_url();?>" class="logo d-flex align-items-center">
        <!-- <span>Logis</span> -->
        <img src="<?php echo base_url();?>/public/assets/img/gmg.png" style="padding-bottom: 10px;max-height: 100px; background-color:white;border-bottom-left-radius: 50%;border-bottom-right-radius:50%;"alt="">
      </a>
      <h3 style="color:#ab0000;">GMG Shipping And Logistics</h3><br><br>
      <b><p class="fst-italic">To gain confidence & trust of our valued clients by conducting <br> <br> business with complete honesty and integrity.</p></b>
    </div>

    <div class="col-lg-2 col-6 footer-links" style="padding: 50px 0;padding-left: 30px;">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="<?php echo base_url();?>">Home</a></li>
        <!-- <li><a href="<?php echo base_url("blog");?>">Blog</a></li> -->
        <li><a href="<?php echo base_url("about");?>">About</a></li>
        <li><a href="<?php echo base_url("services");?>">Services</a></li>
        <li><a href="<?php echo base_url("contact");?>">Contact</a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-6 footer-links" style="padding: 50px 0;">
      <h4>Our Services</h4>
      <ul>
        <li><a href="<?php echo base_url("services");?>/#SeaFreight">Sea Freight</a></li>
        <li><a href="<?php echo base_url("services");?>/#Logistics">Logistics</a></li>
        <li><a href="<?php echo base_url("services");?>/#CustomClearance">Custom Clearance</a></li>
        <li><a href="<?php echo base_url("services");?>/#Transportation">Transportation</a></li>
        <li><a href="<?php echo base_url("services");?>/#Storage">Storage</a></li>
        <li><a href="<?php echo base_url("services");?>/#Warehousing">Warehousing</a></li>
        <li><a href="<?php echo base_url("services");?>/#AirFreight">Air Freight</a></li>
        <li><a href="<?php echo base_url("services");?>/#DoorToDoor">Door To Door Delivery </a></li>
        <li><a href="<?php echo base_url("services");?>/#FCL_LCL_Services">FCL / LCL Services</a></li>
      </ul>
    </div>

    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start" style="padding: 50px 0;">
      <h4>Contact Us</h4>
      <p>
      4B/1, Bharat Society,<br>
      Subhash Nagar, J.M.M. Road,<br>
      Asalfa Village Ghatkopar (West), <br>
      Mumbai - 400084<br><br>
        <strong>Phone:</strong>+91 9503 223 610<br>
        <strong>Email:</strong> info@gmggroup.in<br>
        <strong>Time:</strong> 9.00 AM – 10.00 PM<br>
      </p>

    </div>

  </div>
</div>

<div class="container mt-4">
  <div class="copyright">
    &copy; Copyright <strong><span>GMG Shipping And Logistics</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    Designed by <a href="https://mytt.in/" target="_blank">MYTT</a>
  </div>
</div>

</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?php echo base_url();?>/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>/public/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?php echo base_url();?>/public/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url();?>/public/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url();?>/public/assets/vendor/aos/aos.js"></script>
<script src="<?php echo base_url();?>/public/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url();?>/public/assets/js/main.js"></script>

</body>

</html>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
   
     $('#SeaFreight').load("services.php");

   });
    </script> -->

    <script>
           $("#SeaFreight/#Logistics/#CustomClearance/#Transportation/#Storage/#Warehousing/#AirFreight/#DoorToDoor/#FCL_LCL_Services").click(function(){
           // any value you need
           $(document).scrollTop(600) 
           });
     </script>