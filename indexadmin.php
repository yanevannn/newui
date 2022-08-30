<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bali Laundry</title>
    <link rel="stylesheet" href="assets/style/style.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" /> -->
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Bali Laundry</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li>
              <a class="btn btn-light me-3" href="indexadminorder.php"><img src="assets/img/cart.svg" alt="Order" /></a>
            </li>
            <li>
              <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">My Account</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="#">Log Out</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->
    <!-- Content -->
    <section id="Home">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col align-self-center">
            <h2>Bali Laundry</h2>
            <p>Bali Laundry merupakan jasa cuci yang berlokasi di Denpasar. Layanan yang kami berikan terdapat dalam berbagai service seperti <i>REGULAR, EXSPRESS dan SPECIAL.</i></p>
            <p><i> "Kepuasan pelanggan merupakan suatu kehormatan untuk kami."</i></p>
            <p>
              Find Us On
              <a href="www.instagram.com"><img src="assets/img/instagram_icon.png" width="30px" height="30px" class="ml-3" alt="" /></a>
              <a href="facebook.com"><img src="assets/img/facebook_icon.png" width="30px" height="30px" alt="" /></a>
              <a href="whatsapp.com"><img src="assets/img/whatsapp_icon.png" width="30px" height="30px" alt="" /></a>
            </p>
          </div>
          <div class="col text-center">
            <img src="assets/img/loginImg.jpg" alt="" width="480px" height="320px" />
          </div>
        </div>
      </div>
    </section>
    <!-- Content End-->
    <!-- Service -->
    <section id="Service">
      <div class="container">
        <div class="row text-center mb-5">
          <div class="col">
            <h2>Paket Services Laundry</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="text-center">REGULAR</h5>
                <p class="card-text">Deskripsi.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="img/1.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="text-center">EXSPRESS</h5>
                <p class="card-text">Deskripsi.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="img/1.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="text-center">SPECIAL</h5>
                <p class="card-text">Deskripsi.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Service End -->
    <!-- Contact Us -->
    <section id="ContactUS">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-5 text-center mb-3">
            <h3>Contact US</h3>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 mb-3">
            <div class="card">
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="text" class="form-control" name="email" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Message</label>
                  <textarea class="form-control" name="message" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">SEND</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact US End -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
