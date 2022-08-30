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
        <a class="navbar-brand" href="">Bali Laundry Order</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active me-2" aria-current="page" href="indexuser.php">HOME</a>
            </li>
            <li>
              <a class="btn btn-light me-3 mb-2" href=""><img src="assets/img/cart.svg" alt="Order" /></a>
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
    <section id="order">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-5 text-center mb-3">
            <h3>Masukkan Pesanan</h3>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 mb-3">
            <div class="card">
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="text" class="form-control" name="phone" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Alamat</label>
                  <input class="form-control" name="address"></input>
                </div>
                <div class="mb-3">
                  <label class="form-label">Paket</label>
                  <input class="form-control" name="paket"></input>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Order</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content End -->

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
