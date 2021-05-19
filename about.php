<?php 
include("function.php");
?>

<!doctype html>
<html lang="en">
  <head>
  <?php
    get_head();//Memanggil halaman head yang ada didalam file function.php
  ?>
  </head>
  <body>

  <div class="container">
    
    <?php 
      get_Navbar();
    ?>

    <section id="about-one">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/features/belt.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    </section>

    <div class="about mt-2">
      <div class="container">
        <div class="row">
          <div class="about-title col-sm-3">
            <p class="text-start">WIJAYA PARTNERS</p>
          </div>
          <div class="col-sm-8">
            <p>
              The Firm was founded in 1988 by HERMAN WIJAYA who has graduated  form Parahyangan Catholic University with excellent degree.
            </p>
            <p>
              In the mean time, he also involved in commercial practice for more than 20 years as an executive of various national leading corporation and has given him a deep understanding and skill of corporate and commercial practice. Today, he also act as Director of Human Resources at one of the largest Textile Industry in Indonesia.
            </p>
            <p>
              We believe that professional attitude which is based on Morality, Loyality, adn Intergruty will always be our number one priority to fulfill our client's maximum satisfication.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="footer text-end">
          <hr class="solid">
            <p>@Wijaya Partners</p>
        </div>
      </div>
    </div>

  </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
  </body>
</html>