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
            <img src="images/features/services.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    </section>

    <div class="services mt-2">
      <div class="container">
        <div class="services-breaks row">
        <?php 
                //Memanggil halaman home, profile, products, about, contact menggunakan kondisi IF ELSE IF ELSE.
                if (isset($_GET["teams"])) {//Cek Apakah URL Parameter Home ada.
                    //Jika ada, panggil function get_home.
                    get_Teams();
                } else if (isset($_GET["corporate"])) {//Jika bukan Home, Cek kembali apakah URL Parameter profile ada?
                    //Jika ada, panggil function get_profile.
                    get_servicesCorporate();
                } else if (isset($_GET["labor"])) {//Jika bukan Home, Cek kembali apakah URL Parameter profile ada?
                    //Jika ada, panggil function get_profile.
                    get_servicesLabor();
                } else if (isset($_GET["bankruptcy"])) {//Jika bukan profile, Cek kembali apakah URL Parameter products ada?
                    //Jika ada, panggil function get_products.
                    get_servicesBankruptcy();
                } else if (isset($_GET["consumer"])) {//Jika bukan products, Cek kembali apakah URL Parameter about ada?
                    //Jika ada, panggil function get_about.
                    get_servicesConsumer();
                } else if (isset($_GET["banking"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                   get_servicesBanking();
                } else if (isset($_GET["land"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                   get_servicesLand();
                } else if (isset($_GET["family"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                   get_servicesFamily();
                } else if (isset($_GET["sport"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                   get_servicesSport();
                }else if (isset($_GET["criminal"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                   get_servicesCriminal();
                }else if (isset($_GET["corruption"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                   get_servicesCorruption();
                }else if (isset($_GET["plantation"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                   get_servicesPlantation();
                }else if (isset($_GET["state"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                   get_servicesState();
                }else if (isset($_GET["tax"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                   get_servicesTax();
                }else if (isset($_GET["procurement"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                   get_servicesProcurement();
                }else if (isset($_GET["legal"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                   get_servicesLegal();
                }else if (isset($_GET["regulation"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                   get_servicesRegulation();
                }else if (isset($_GET["civil"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                   get_servicesCivil();
                }else if (isset($_GET["alternative"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                   get_servicesAlternative();
                }else if (isset($_GET["arbitrator"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                   get_servicesArbitrator();
                }else if (isset($_GET["taxlitigator"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                   get_servicesTaxLitigator();
                }else if (isset($_GET["legalauditor"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                   get_servicesLegalauditor();
                }else if (isset($_GET["procurementlaw"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                   get_servicesProcurementLaw();
                }else if (isset($_GET["businesscontract"])) {//Jika bukan about, Cek kembali apakah URL Parameter contact ada?
                    //Jika ada, panggil function get_contact.
                   get_servicesBusinessContract();
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