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
          <div class="row">
              <div class="about-title col-sm-4">
                <p class="text-end">PARTNERS</p>
                <div class="text-end services-breaks-list col">
                    <ul>
                        <li class="mb-1"><a href="teams.php?hermanwijaya">Mr. HERMAN WIJAYA</a></li>
                        <li class="mb-1"><a href="teams.php?ebbyabraham">Mr. F. EBBY ABRAHAM</a></li>
                        <li class="mb-1"><a href="teams.php?hotmabhaskara">Mr. HOTMA BHASKARA E. NAINGGOLAN</a></li>
                        <li class="mb-1"><a href="teams.php?reviputu">Mr. REVI PUTU SUKANDA</a></li>
                        <li class="mb-1"><a href="teams.php?erickstevan">Mr. ERICK STEVAN MANIK</a></li>
                    </ul>
                </div>
              </div>
              <?php 
                //Memanggil halaman home, profile, products, about, contact menggunakan kondisi IF ELSE IF ELSE.
                if (isset($_GET["teams"])) {//Cek Apakah URL Parameter Home ada.
                    //Jika ada, panggil function get_home.
                    get_Teams();
                } else if (isset($_GET["hermanwijaya"])) {//Jika bukan Home, Cek kembali apakah URL Parameter profile ada?
                    //Jika ada, panggil function get_profile.
                    get_profileHerman();
                } else if (isset($_GET["ebbyabraham"])) {//Jika bukan Home, Cek kembali apakah URL Parameter profile ada?
                    //Jika ada, panggil function get_profile.
                    get_profileEbby();
                } else if (isset($_GET["hotmabhaskara"])) {//Jika bukan profile, Cek kembali apakah URL Parameter products ada?
                    //Jika ada, panggil function get_products.
                    get_profileHotma();
                } else if (isset($_GET["reviputu"])) {//Jika bukan products, Cek kembali apakah URL Parameter about ada?
                    //Jika ada, panggil function get_about.
                    get_profileRevi();
                } else if (isset($_GET["erickstevan"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                    get_profileErick();
                }
            ?>
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