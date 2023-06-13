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
  <!-- File Css Partner -->
  <link rel="stylesheet" href="../../css/partner.css">
  <!-- File Css Footer Dash -->
  <link rel="stylesheet" href="../../css/footerDash.css">
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
              <li><a class="active" href="feedback.html"><i class="fa-solid fa-star"></i> Feedbacks</a>
              </li>
              <li><a href="profilePartner.html"><i class="fa-solid fa-image-portrait"></i> Show
                  Profile</a>
              </li>
              <li><a href="settings.html"><i class="fa-solid fa-gears"></i> Settings</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-10 col-md-10 nonePadding d-flex justify-content-between flex-column">
          <div class="feedback">
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
                        <li><a href="feedback.html" class="active"><i class="fa-solid fa-star"></i>
                            Feedbacks</a>
                        </li>
                        <li><a href="profilePartner.html"><i class="fa-solid fa-image-portrait"></i>
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
            <div class="feedback p-lg-5 overflow-hidden">
              <div class="container overflow-auto">
                <div class="title">
                  <h1>Feedbacks</h1>
                </div>
                <div class="showFeedbacks">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">OrderID</th>
                        <th scope="col">Review</th>
                        <th scope="col">Ratings</th>
                      </tr>
                    </thead>
                    <tbody id="bodyTable">
                    </tbody>
                  </table>
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


  <!-- File Js Bootstrap -->
  <script src="../css/bootstrap.bundle.min.js"></script>
  <script src="../css/bootstrap.bundle.min.js.map"></script>
</body>

</html>