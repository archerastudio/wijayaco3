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
            <img src="images/features/aboutus.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    </section>

    <div class="about mt-2">
      <div class="container">
        <div class="row">
          <div class="about-title col-sm-3">
            <p class="text-start">WIJAYA & PARTNERS</p>
          </div>
          <div class="col-sm-8">
            <p>
            Firma ini didirikan pada tahun 1988 oleh Herman Wijaya, dengan latar belakang pendidikan sarjana hukum yang telah lulus dengan predikat memuaskan dari Universitas Katolik Parahyangan.
            </p>
            <p>
            Sebelumnya mendirikan firma ini, Herman Wijaya telah berkecimpung dalam dunia praktek bisnis selama lebih dari 20 tahun dan berpengalaman menjabat sebagai eksekutif pada berbagai perusahaan nasional terkemuka. Seluruh pengalaman ini telah memberikan pemahaman yang mendalam dan keahlian dalam dunia praktek korporasi dan bisnis.
            </p>
            <p>
            Kami percaya bahwa sikap profesional yang berlandaskan moralitas, loyalitas dan integritas akan selalu menjadi prioritas utama kami guna memenuhi kepuasan maksimal seluruh klien kami.
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