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

    <section id="home">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <!-- <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
        </div> -->
        <div class="carousel-inner">
          <div class="carousel-item active"> 
            <img src="images/home/CAR-07.jpg" class="d-block w-100" alt="...">
          </div>
        </div>

        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
         -->
      </div>
    </section>

    <br>

    <figure>
      <blockquote class="blockquote">
        <p>" THE ESSENCEOF THE CLAIM TO PROFESSIONAL STATUS AND PROFESSIONAL PRIVILEGE IS THAT MEMBERS OF THE PROFESSION HOLD THEMSELVES TO HIGHER STANDARDS THAN OTHER PEOPLE...A LAWYER...IS SUPPOSED TO BE ETHICAL, EVEN WHEN HE (OR SHE) COULD MAKE MORE MONEY BY BEING UNETHICAL...WHAT MAKES THE LAWYER PROFESSIONAL IS HIS INSISTENCE THAT IN THE LEGAL REALM HE SETS THE PARAMETER OF WHAT HE WILL AND WILL NOT TO DO."</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        Sol Linowitz
      </figcaption>
    </figure>

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
    <script>
$.fn.slider.Constructor.prototype.disable = function () {
    this.picker.off();
}
$.fn.slider.Constructor.prototype.enable = function () {
    if (this.touchCapable) {
        // Touch: Bind touch events:
        this.picker.on({
            touchstart: $.proxy(this.mousedown, this)
        });
    } else {
        this.picker.on({
            mousedown: $.proxy(this.mousedown, this)
        });
    }
}
</script>
  </body>
</html>