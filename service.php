<!DOCTYPE html>
<html>

<?php 
require './head.php'
?> 
<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <?php 
   require './header.php'
   ?> 
    <!-- end header section -->
  </div>


  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container">
          <h2>Services</h2>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="box ">
              <div class="">
                <img src="images/s1.png" alt="" height="100px">
              </div>
              <div class="detail-box">
                <h5>Leadership Development</h5>
                <p>Enhance your leadership skills with iBizz Coaching's comprehensive program. Learn effective communication, strategic thinking, and team management, empowering you to lead with confidence and impact.</p>
                <a href="./service.php">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="box ">
              <div class="">
                <img src="images/s2.png" alt="" height="100px">
              </div>
              <div class="detail-box">
                <h5>Strategic Planning</h5>
                <p>Gain insights into crafting successful business strategies. iBizz Coaching helps you develop and implement strategic plans tailored to your industry, enabling you to make informed decisions and achieve long-term goals.</p>
                <a href="./service.php">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="box ">
              <div class="">
                <img src="images/s3.png" alt="" height="100px">
              </div>
              <div class="detail-box">
                <h5>Innovation Workshops</h5>
                <p>Embrace innovation as a driving force for success. Participate in interactive workshops that stimulate creativity, foster a culture of innovation, and equip you with the tools to adapt to changing market dynamics.</p>
                <a href="./service.php">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="box ">
              <div class="">
                <img src="images/s4.png" alt="" height="100px">
              </div>
              <div class="detail-box">
                <h5>Problem-Solving Bootcamp</h5>
                <p>Develop your problem-solving skills through immersive training. iBizz Coaching's bootcamp equips you with structured approaches to tackle complex challenges, honing your ability to analyze, strategize, and execute effective solutions.</p>
                <a href="./service.php">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end service section -->


  <!-- info section -->
  <?php 
require './footer.php'
?> 
  <!-- end info_section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!--  OwlCarousel 2 - Filter -->
  <script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>