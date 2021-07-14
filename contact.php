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
            <img src="images/features/contactus.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    </section>

    <section id="about-one">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63373.94944939842!2d107.58702204333598!3d-6.90592517251794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e683787bb10d%3A0x38d622811ee2a02d!2sWijaya%20And%20Partners%20Law%20Firm!5e0!3m2!1sen!2sid!4v1625809784202!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </section>

    <div class="about mt-2">
      <div class="container">
        <div class="row">
          <div class="address col-sm-12">
            <p class="text-center">Alamat : JL. TERS. DR. IR. SUTAMI RAYA NO. 16 BANDUNG | Email : wnp@wijayaandpartners.com | Phone & Whatsapp : 0898-6000-822</p>
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