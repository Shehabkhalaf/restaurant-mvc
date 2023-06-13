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
              <li><a class="active" href="Food.html"><i class="fa-solid fa-bowl-food"></i> Food</a></li>
              <li><a href="orders.html"><i class="fa-solid fa-truck-fast"></i> Orders</a></li>
              <li><a href="users.html"><i class="fa-solid fa-users"></i> Users</a></li>
              <li><a href="feedback.html"><i class="fa-solid fa-star"></i> Feedbacks</a></li>
              <li><a href="profilePartner.html"><i class="fa-solid fa-image-portrait"></i> Show
                  Profile</a>
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
                        <li><a href="Food.html" class="active"><i class="fa-solid fa-bowl-food"></i>
                            Food</a></li>
                        <li><a href="orders.html"><i class="fa-solid fa-truck-fast"></i>
                            Orders</a>
                        </li>
                        <li><a href="users.html"><i class="fa-solid fa-users"></i> Users</a>
                        </li>
                        <li><a href="feedback.html"><i class="fa-solid fa-star"></i>
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
            <div class="addFood p-lg-5">
              <div class="container overflow-hidden">
                <div class="title">
                  <h1>Add Food</h1>
                </div>
                <form id="submit">
                  <div class="row">
                    <div class="col-lg-5">
                      <div class="mb-3">
                        <label for="foodname" class="form-label">Title
                        </label>
                        <input type="text" class="form-control" placeholder="e.g Arabian Shawarma" id="foodname"
                          required>
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <div class="mb-3">
                        <label for="description" class="form-label">Description
                        </label>
                        <input type="text" class="form-control"
                          placeholder="e.g A creamy combination of cheese mayo base..." id="description" required>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="mb-3">
                        <label for="price" class="form-label">Price
                        </label>
                        <input type="number" class="form-control" min="0" placeholder="e.g 9.99" id="price" required>
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Food Image</label>
                        <input class="form-control" type="file" id="formFile" name="image" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <button type="submit" class="buttonAddFood">Add Food</button>
                    </div>
                  </div>
                </form>
                <div class="showData overflow-auto">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
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


  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="container">
        <form id="submitUpdateData">
          <div class="row">
            <div class="col-lg-5">
              <div class="mb-3">
                <label for="foodnameUpdateData" class="form-label">Title
                </label>
                <input type="text" class="form-control" placeholder="e.g Arabian Shawarma" id="foodnameUpdateData"
                  required>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="mb-3">
                <label for="descriptionUpdateData" class="form-label">Description
                </label>
                <input type="text" class="form-control" placeholder="e.g A creamy combination of cheese mayo base..."
                  id="descriptionUpdateData" required>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="mb-3">
                <label for="priceUpdateData" class="form-label">Price
                </label>
                <input type="number" class="form-control" min="0" placeholder="e.g 9.99" id="priceUpdateData" required>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="mb-3">
                <label for="formFileUpdateData" class="form-label">Food Image</label>
                <input class="form-control" type="file" id="formFileUpdateData" name="image" required>
              </div>
            </div>
            <div class="col-lg-4">
              <button type="submit" class="buttonAddFood">Update Food</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- File Js Sweet alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- File Js Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css.map">

</body>

</html>