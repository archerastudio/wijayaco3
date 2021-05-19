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

    <div class="services mt-2">
      <div class="container">
        <div class="services-breaks row">
           <p>Wijaya Partners principal areas of practice include :</p>
            <div class="services-breaks-list col">
                <ul>
                    <li><a href="">CORPORATE AND COMMERCIAL</a></li>
                    <li><a href="">BANKING & FINANCE</a></li>
                    <li><a href="">INESTMENT LAW</a></li>
                    <li><a href="">INFORMATION TECHNOLOGY, E-COMMERCE,</a></li>
                    <li><a href="">MEDIA AND TELECOMMUNICATION</a></li>
                    <li><a href="">OIL & GAS</a></li>
                    <li><a href="">AVIATION</a></li>
                </ul>
            </div>
            <div class="services-breaks-list col">
                <ul>
                    <li><a href="">INTELLECTUAL PROPERTY</a></li>
                    <li><a href="">ENVIRONMENT</a></li>
                    <li><a href="">INESTMENT LAW</a></li>
                    <li><a href="">FORESTRY AND PLANTATION</a></li>
                    <li><a href="">ANTITRUST & INTERNATIONAL TRADE</a></li>
                    <li><a href="">HEALTHCARE</a></li>
                    <li><a href="">CAPITAL MARKETS</a></li>
                </ul>
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
  </body>
</html>