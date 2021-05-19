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
            <div class="choose-us col-sm-12">
              <h2 class="text-center">WHY CHOOSE US</h2>
              <P class="text-center">With the assist of it's team, WIJAYA & PARTNERS LAW FIRM is dedicate to provide quality legal service in an efficient and effective manner to achieve our clients objective that cover the following :</P>
              <ul id="choose-us-list" class="text-center g-3">
                <li><a href="#"><i class="fa fa-check"></i> Target Identification and Advisory Assistance.</a></li>
                <li><a href="#"><i class="fa fa-check"></i> Strategy Advisement and Creative Support.</a></li>
                <li><a href="#"><i class="fa fa-check"></i> Quick response around The Clock.</a></li>
                <li><a href="#"><i class="fa fa-check"></i> Active Assistance with Relevant Regulatory.</a></li>
                <!-- <li><a href="#"><i class="fa fa-check"></i> Nam liber tempor cum soluta.</a></li> -->
            </ul>
            </div>
          </div>
        </div>
      </div>

    <section id="about-one">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7922.196894515131!2d107.593335!3d-6.878808!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e68d94d5ddc3%3A0x722cd5545b3b27fb!2sJl.%20Prof.%20Dr.%20Sutami%20No.16%2C%20Gegerkalong%2C%20Kec.%20Sukasari%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040153!5e0!3m2!1sen!2sid!4v1620546078916!5m2!1sen!2sid" width="1597" height="323" style="border:0;" class="d-block w-100" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </section>

    <div class="about mt-2">
      <div class="container">
        <div class="row">
          <div class="address col-sm-12">
            <p class="text-center">Alamat : JL. TERS. DR. IR. SUTAMI RAYA NO. 16 BANDUNG | Email : wijayapartners16@gmail.com | Phone & Whatsapp : 0898-6000-822</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 mt-3">
        <h2 class="text-center">Contact US</h2>
        <!-- comments-form of the page -->
        <form action="#" class="comments-form add">
            <div class="form-row">
                <div class="form-group">
                    <label for="name1"><i class="fa fa-user"></i></label>
                    <input class="form-control" id="name1" name="name" placeholder="Name" type="text">
                </div>
                <div class="form-group">
                    <label for="emailaddress"><i class="fa fa-envelope"></i></label>
                    <input class="form-control" id="emailaddress" name="email" placeholder="Email" type="text">
                </div>
                <div class="form-group">
                    <label for="web"><i class="fa fa-dribbble"></i></label>
                    <input class="form-control" id="web" name="subject" placeholder="Subject" type="text">
                </div>
            </div>
            <div class="form-row textarea">
                <div class="form-group">
                    <label for="textarea"><i class="fa fa-paper-plane"></i></label>
                    <textarea class="form-control" cols="30" id="textarea" name="message" placeholder="Comment..." rows="10"></textarea>
                </div>
            </div>
            <br>
            <button type="button" class="btn btn-primary">Submit</button>
        </form>
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