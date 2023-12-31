<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food Hunter</title>
  <!-- File Css Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css.map">
  <!-- Font AweSome -->
  <script src="https://kit.fontawesome.com/49f02d4a75.js" crossorigin="anonymous"></script>
  <!-- File Css Main -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- File Css Footer Dash -->
  <link rel="stylesheet" href="../../css/footerDash.css">
  <!-- File Css Partner -->
  <link rel="stylesheet" href="../../css/partner.css">

</head>

<body>
  <div class="partner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2 col-md-2 part-1 nonePadding bigScreen">
          <div class="dash ">
            <img src="../../images/food-hunter-low.png" class="ps-3 pt-3 pb-3 img-fluid" alt="">
            <ul>
              <li><a href="partner.html"><i class="fa-solid fa-tv"></i> Dashboard</a></li>
              <li><a href="Food.html"><i class="fa-solid fa-bowl-food"></i> Food</a></li>
              <li><a href="orders.html"><i class="fa-solid fa-truck-fast"></i> Orders</a></li>
              <li><a href="users.html"><i class="fa-solid fa-users"></i> Users</a></li>
              <li><a href="feedback.html"><i class="fa-solid fa-star"></i> Feedbacks</a></li>
              <li><a class="active" href="profilePartner.html"><i class="fa-solid fa-image-portrait"></i>
                  Show Profile</a>
              </li>
              <li><a href="settings.html"><i class="fa-solid fa-gears"></i> Settings</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-10 col-md-10 nonePadding d-flex justify-content-between flex-column">
          <div class="food">
            <nav class="navbar navbar-expand-lg ">
              <div class="container-fluid pt-2">
                <div class="navbar-brand" id="namePartner"></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse p-1" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <div class="dash smallScreen">
                      <ul>
                        <li><a href="partner.html"><i class="fa-solid fa-tv"></i> Dashboard</a>
                        </li>
                        <li><a href="Food.html"><i class="fa-solid fa-bowl-food"></i>
                            Food</a></li>
                        <li><a href="orders.html"><i class="fa-solid fa-truck-fast"></i>
                            Orders</a>
                        </li>
                        <li><a href="users.html"><i class="fa-solid fa-users"></i> Users</a>
                        </li>
                        <li><a href="feedback.html"><i class="fa-solid fa-star"></i>
                            Feedbacks</a>
                        </li>
                        <li><a class="active" href="profilePartner.html"><i class="fa-solid fa-image-portrait"></i>
                            Show Profile</a></li>
                        <li><a href="settings.html"><i class="fa-solid fa-gears"></i>
                            Settings</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
            <div class="profile p-lg-5 pt-3">
              <div class="container">
                <div class="image d-flex justify-content-center align-items-center ">
                  <div class="box text-center">
                    <img id="imgLogo" alt="">
                    <h1 id="nameRest"></h1>
                  </div>
                </div>
                <div class="row pt-3">
                  <div class="col-lg-4 col-md-6 col-sm-6 col-6 mt-3">
                    <div class="restData d-flex align-items-center">
                      <div class="icon">
                        <i class="fa-regular fa-clipboard"></i>
                      </div>
                      <div class="text ps-3">
                        <h6>Restaurant Status</h6>
                        <span id="status"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-6 mt-3">
                    <div class="restData d-flex align-items-center">
                      <div class="icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                      </div>
                      <div class="text ps-3">
                        <h6>Min. Order</h6>
                        <span id="minorder"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-6 mt-3">
                    <div class="restData d-flex align-items-center">
                      <div class="icon">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                      </div>
                      <div class="text ps-3">
                        <h6>Delivery Time</h6>
                        <span id="time"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-6 mt-3">
                    <div class="restData d-flex align-items-center">
                      <div class="icon">
                        <i class="fa-solid fa-money-bill-wave"></i>
                      </div>
                      <div class="text ps-3">
                        <h6>Delivery Fees</h6>
                        <span id="fees"> </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-6 mt-3">
                    <div class="restData d-flex align-items-center">
                      <div class="icon">
                        <i class="fa-regular fa-clock"></i>
                      </div>
                      <div class="text ps-3">
                        <h6>Open At</h6>
                        <span id="open"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-6 mt-3">
                    <div class="restData d-flex align-items-center">
                      <div class="icon">
                        <i class="fa-regular fa-clock"></i>
                      </div>
                      <div class="text ps-3">
                        <h6>Close At</h6>
                        <span id="close"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="description p-3 mt-5">
                  <h4><span id="name"></span>delivers to you</h4>
                  <p id="description"></p>
                </div>
                <div class="dishes pt-5 pb-5">
                  <h6>Best Seller Dishes</h6>
                  <div class="row" id="dishes">
                  </div>
                </div>
              </div>
            </div>
          </div>
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

  <script src="../../js/profileRestaurant.js"></script>
  <!-- File Js Sweet alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- File Js Bootstrap -->
  <script src="../css/bootstrap.bundle.min.js"></script>
  <script src="../css/bootstrap.bundle.min.js.map"></script>
</body>

</html>