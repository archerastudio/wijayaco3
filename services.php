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
           <p style="text-transform:uppercase;
                     font-weight:bold;">Bidang layanan hukum Wijaya & Partners meliputi :</p>
            <div class="services-breaks-list col" style="text-transform:uppercase;
                     font-weight:bold;">
                <ul>
                    <li><a href="ourservices.php?corporate">HUKUM PERUSAHAAN DAN BISNIS</a></li>
                    <li><a href="ourservices.php?labor">HUKUM KETENAGAKERJAAN</a></li>
                    <li><a href="ourservices.php?bankruptcy">HUKUM KEPAILITAN</a></li>
                    <li><a href="ourservices.php?consumer">PERLINDUNGAN KONSUMEN</a></li>
                    <li><a href="ourservices.php?banking">HUKUM PERBANKAN DAN PEMBIAYAAN</a></li>
                    <li><a href="ourservices.php?land">HUKUM AGRARIA</a></li>
                    <li><a href="ourservices.php?family">HUKUM KELUARGA</a></li>
                </ul>
            </div>
            <div class="services-breaks-list col" style="text-transform:uppercase;
                     font-weight:bold;">
                <ul>
                    <li><a href="ourservices.php?sport">SPORT AND ENTERTAINMENT LAW</a></li>
                    <li><a href="ourservices.php?criminal">HUKUM PIDANA</a></li>
                    <li><a href="ourservices.php?corruption">HUKUM TINDAK PIDANA KORUPSI</a></li>
                    <li><a href="ourservices.php?plantation">HUKUM PERKEBUNAN</a></li>
                    <li><a href="ourservices.php?state">BADAN USAHA MILIK NEGARA</a></li>
                    <li><a href="ourservices.php?tax">TAX LAW</a></li>
                    <li><a href="ourservices.php?procurement">HUKUM PENGADAAN</a></li>
                </ul>
            </div>
        </div>
      </div>
    </div>

    <div class="services mt-2">
      <div class="container">
        <div class="services-breaks row">
           <p style="text-transform:uppercase;
                     font-weight:bold;">Bentuk layanan hukum yang di berikan meliputi :</p>
            <div class="services-breaks-list col" style="text-transform:uppercase;
                     font-weight:bold;">
                <ul>
                    <li><a href="ourservices.php?legal">KONSULTASI HUKUM</a></li>
                    <li><a href="ourservices.php?businesscontract">PEMBUATAN KONTRAK BISNIS</a></li>
                    <li><a href="ourservices.php?corporate">PEMBUATAN PERATURAN PERUSAHAAN</a></li>
                    <li><a href="ourservices.php?civil">LITIGASI DALAM PERKARA PERDATA DAN PIDANA</a></li>
                    <li><a href="ourservices.php?alternative">ALTERNATIVE DISPUTE RESOLUTIONS (ADR)</a></li>
                    <li><a href="ourservices.php?arbitrator">ARBITRATOR</a></li>
                    <li><a href="ourservices.php?taxlitigator">TAX LITIGATOR</a></li>
                </ul>
            </div>
            <div class="services-breaks-list col" style="text-transform:uppercase;
                     font-weight:bold;">
                <ul>
                    <li><a href="ourservices.php?legalauditor">LEGAL AUDITOR</a></li>
                    <li><a href="ourservices.php?procurementlaw">PENGACARA PENGADAAN</a></li>
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