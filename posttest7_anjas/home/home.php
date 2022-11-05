<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css">
    <title>Posstest 7 Pemrograman Web</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar">
      <div class="logo"><img src="gambar/logo.jpg" alt="" width="60px" /><p class="name">cake Anjas</p></div>
      <ul class="nav-links">
        <input type="checkbox" id="checkbox_toggle" />
        <label for="checkbox_toggle" class="hamburger">&#9776;</label>
        <div class="menu">
          <li class="anjas"><a href="#">HOME</a></li>
          <li class="anjas"><a href="#aboutme">ABOUT</a></li>
          <li class="anjas"><a href="phpcrud/index.php">DATA</a></li>
          <li class="anjas"><a href="#product">MENU</a></li>
          <li class="anjas"><a href=""><form action="logout.php" method="post" class="tbl"><button type="submit" name="logout"
                                class="lgt">logout</button>
                        </form></a></li>
          <li><a href="#"><i class="bi-brightness-high-fill" id="toggleDark" ></i></a></li>
        </div>
      </ul>
    </nav>

    <!-- main content -->
    <!-- iklan -->
    <div class="row">
      <div class="col-2">
        <img src="gambar/kue kering.jpg" alt="pict1" />
      </div>
      </div>
    </div>

    <!-- makanan -->
    <div id="product" class="container">
        <h2>MENU FAVORITE</h2>
          <div class="card">
            <img src="gambar/bolu1.jpg" class="content" />
            <div class="deskrip">
              <h4>Rp. 40.000</h5>
            </div>
            <p><i class="fa-solid fa-cart-arrow-down cart" onclick="a()"></i></p>
          </div>
          <div class="card">
            <img src="gambar/bolu2.jfif" class="content" />
            <div class="deskrip">
              <h4>Rp. 32.000</h5>
            </div>
            <p><i class="fa-solid fa-cart-arrow-down cart" onclick="a()"></i></p>
          </div>
          <div class="card">
            <img src="gambar/nastar fv.jfif" class="content" />
            <div class="deskrip">
              <h4>Rp. 55.000</h5>
            </div>
            <p><i class="fa-solid fa-cart-arrow-down cart" onclick="a()"></i></p>
          </div>
          <div class="card">
            <img src="gambar/coklat al.jfif" class="content" />
            <div class="deskrip">
              <h4>Rp. 12.000</h5>
            </div>
            <p><i class="fa-solid fa-cart-arrow-down cart" onclick="a()"></i></p>
          </div>
        </div>
      </div>

      <!-- About me -->
      <section id="aboutme">
  <div class = "image">
     <img src="gambar/anj.jpeg">
  </div>

  <div class = "content">
      <h2>tentang saya</h2>
      <span><!-- line here --></span>
      <p ><b> ANJASMARA<br>NIM 2109106138<br><b>PESAN!!<br> jangan lupa beli kue nya<br> </b></p>
      <ul class = "icons">
          <li><a href="https://www.instagram.com/anjasmaramahdjura/?hl=en">
          <i  class="fa-brands fa-instagram"></i>
          </li></a>
          <li><a href="https://github.com/Anjasmara02/anjas.github.io">
            <i class="fa-brands fa-github"></i>
          </li></a>
          <li><a href="https://www.facebook.com/marlboro.cess">
              <i class="fa-brands fa-facebook"></i>
          </li></a>
          <li><a href="https://wa.me/qr/NJOTX6SI5PJHM1">
              <i class="fa-brands fa-whatsapp"></i>
          </li></a>
      </ul>
  </div>
</section>

    <!-- footer -->
    <footer>
        <div class="bottom">
          <p>Copyright ©2022 by Anjasmara</p>
        </div>
      </footer>
      <script src="script.js"></script>
  </body>
</html>