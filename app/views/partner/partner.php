<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $_SESSION['data']['name'] ?></title>
  <!-- File Css Bootstrap -->
  <link rel="stylesheet" href="<?php echo LINK; ?>bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo LINK; ?>bootstrap.min.css.map">
  <!-- Font AweSome -->
  <script src="https://kit.fontawesome.com/49f02d4a75.js" crossorigin="anonymous"></script>
  <!-- File Css Main -->
  <link rel="stylesheet" href="<?php echo LINK; ?>style.css">
  <!-- File Css Partner -->
  <link rel="stylesheet" href="<?php echo LINK; ?>partner.css">
  <!-- File Css Footer Dash -->
  <link rel="stylesheet" href="<?php echo LINK; ?>footerDash.css">
</head>

<div class="partner">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 col-md-2 part-1 nonePadding bigScreen">
        <div class="dash ">
          <img src="http://localhost/restaurant-mvc/app/views/images/food-hunter-low.png"
            class="ps-3 pt-3 pb-3 img-fluid" alt="">
          <ul>
            <li><a class="active" href="dachboard"><i class="fa-solid fa-tv"></i> Dashboard</a></li>
            <li><a href="food"><i class="fa-solid fa-bowl-food"></i> Food</a></li>
            <li><a href="profilePartner.html"><i class="fa-solid fa-image-portrait"></i> Show Profile</a>
            </li>
            <li><a href="settings.html"><i class="fa-solid fa-gears"></i> Settings</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-10 col-md-10 nonePadding  d-flex justify-content-between flex-column">
        <div class="food">
          <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid pt-2">
              <div class="navbar-brand" id="namePartner"><?= $_SESSION['data']['name'] ?></div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse p-1" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <div class="dash smallScreen">
                    <ul>
                      <li><a class="active" href="partner.html"><i class="fa-solid fa-tv"></i>
                          Dashboard</a>
                      </li>
                      <li><a href="Food.html"><i class="fa-solid fa-bowl-food"></i>
                          Food</a></li>
                      <li><a href="profilePartner.html"><i class="fa-solid fa-image-portrait"></i>
                          Show Profile</a></li>
                      <li><a href="settings.html"><i class="fa-solid fa-gears"></i> Settings</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
          <div class="dashBoard p-lg-5 height-100">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                  <div class="box d-flex justify-content-between align-items-center">
                    <div class="title">
                      <h5>TOTAL ORDERS</h5>
                      <p id="totalOrders">0</p>
                    </div>
                    <div class="icon">
                      <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                  <div class="box d-flex justify-content-between align-items-center">
                    <div class="title">
                      <h5>TOTAL USERS</h5>
                      <p id="totalUsers">0</p>
                    </div>
                    <div class="icon">
                      <i class="fa-solid fa-user"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                  <div class="box d-flex justify-content-between align-items-center">
                    <div class="title">
                      <h5>TOTAL SALES</h5>
                      <p id="totalSales">0</p>
                    </div>
                    <div class="icon">
                      <i class="fa-solid fa-sack-dollar"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                  <div class="box d-flex justify-content-between align-items-center">
                    <div class="title">
                      <h5>AVERAGE RATINGS/TOTAL RATINGS</h5>
                      <p id="averageRating">0/0</p>
                    </div>
                    <div class="icon">
                      <i class="fa-solid fa-star"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="img"></div>
        <footer class="pb-3 pt-3">
          <div class="container d-flex justify-content-between align-items-center">
            <div class="div">
              ©2023 - 24 <a href="../../index.html">Food Hunter</a>
            </div>
            <div class="div">
              <a href="../FQA.html" class="me-3">FAQ</a>
              <a href="../contact.html">Contact Us</a>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
</div>

<!-- File Js Bootstrap -->
<script src="<?php echo LINK; ?>bootstrap.bundle.min.js"></script>
<script src="<?php echo LINK; ?>bootstrap.bundle.min.js.map"></script>
</body>

</html>