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
            <li><a href="profilePartner.html"><i class="fa-solid fa-image-portrait"></i> Show Profile</a>
            </li>
            <li><a class="active" href="settings.html"><i class="fa-solid fa-gears"></i> Settings</a></li>
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
                      <li><a href="orders.html"><i class="fa-solid fa-truck-fast"></i> Orders</a>
                      </li>
                      <li><a href="users.html"><i class="fa-solid fa-users"></i> Users</a></li>
                      <li><a href="feedback.html"><i class="fa-solid fa-star"></i> Feedbacks</a>
                      </li>
                      <li><a href="profilePartner.html"><i class="fa-solid fa-image-portrait"></i>
                          Show Profile</a></li>
                      <li><a class="active" href="settings.html"><i class="fa-solid fa-gears"></i>
                          Settings</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
          <div class="setting p-lg-5 pt-3">
            <div class="container">
              <div class="editProfile">
                <h3 class="mb-3">Edit Data</h3>
                <form id="submit">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label for="foodname" class="form-label">Name Restaurant
                        </label>
                        <input type="text" class="form-control" placeholder="e.g Albayt Alkhalijiu" id="name" required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label for="description" class="form-label">Description (delivers to
                          you)
                        </label>
                        <input type="text" class="form-control"
                          placeholder="e.g Broast Meal is a restaurant located in Egypt..." id="description" required>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="mb-3">
                        <label for="deliveryFees" class="form-label">Delivery Fees
                        </label>
                        <input type="number" min="1" class="form-control" placeholder="e.g 9.99" id="deliveryFees"
                          required>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="mb-3">
                        <label for="deliveryTime" class="form-label">Delivery Time
                        </label>
                        <input type="number" min="1" class="form-control" placeholder="e.g 9.99" id="deliveryTime"
                          required>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="mb-3">
                        <label for="minOrder" class="form-label">Min. Order
                        </label>
                        <input type="number" min="1" class="form-control" placeholder="e.g 9.99" id="minOrder" required>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="mb-3">
                        <label for="hourOpen" class="form-label">Open At (Hour)
                        </label>
                        <input type="number" min="0" max="23" class="form-control" placeholder="e.g 23" id="hourOpen"
                          required>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="mb-3">
                        <label for="minuteOpen" class="form-label">Open At (Minute)
                        </label>
                        <input type="number" min="0" max="59" class="form-control" placeholder="e.g 59" id="minuteOpen"
                          required>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="mb-3">
                        <label for="secondsOpen" class="form-label">Open At (Seconds)
                        </label>
                        <input type="number" min="0" max="59" class="form-control" placeholder="e.g 59" id="secondsOpen"
                          required>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="mb-3">
                        <label for="hourClose" class="form-label">Close At (Hour)
                        </label>
                        <input type="number" min="0" max="23" class="form-control" placeholder="e.g 23" id="hourClose"
                          required>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="mb-3">
                        <label for="minuteClose" class="form-label">Close At (Minute)
                        </label>
                        <input type="number" min="0" max="59" class="form-control" placeholder="e.g 59" id="minuteClose"
                          required>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="mb-3">
                        <label for="secondsClose" class="form-label">Close At (Seconds)
                        </label>
                        <input type="number" min="0" max="59" class="form-control" placeholder="e.g 59"
                          id="secondsClose" required>
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="mb-3">
                        <label for="status" class="form-label">Restaurant Status</label>
                        <select id="status" class="form-select" aria-label="Default select example" required>
                          <option value="busy">Busy</option>
                          <option value="close">Close</option>
                          <option value="empty">Empty</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Restaurant Logo </label>
                        <input class="form-control" type="file" id="formFile" name="image" required>
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <div class="mb-3">
                        <label for="email" class="form-label">Email
                        </label>
                        <input type="email" class="form-control" placeholder="e.g restaurant@restaurant.com" id="email"
                          required>
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <div class="mb-3">
                        <label for="location" class="form-label">Location
                        </label>
                        <input type="text" class="form-control" placeholder="e.g Ain Shams..." id="location" required>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="mb-3">
                        <label for="phone" class="form-label">Phone
                        </label>
                        <input type="text" class="form-control" placeholder="e.g 01148....." id="phone" required>
                      </div>
                    </div>
                    <div class="check">
                      <h4>Food</h4>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pizza" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Pizza
                            </label>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="SandWiches" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                              SandWiches
                            </label>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Cold" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Cold
                            </label>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Sushi" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                              Sushi
                            </label>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Cold" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Cold
                            </label>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Burgers" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                              Burgers
                            </label>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Chinese" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                              Chinese
                            </label>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Shawarma" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                              Shawarma
                            </label>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Food fast" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                              Food fast
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <button type="submit" class="buttonAddFood">Update Data</button>
                    </div>
                  </div>
                </form>
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

  <!-- File Js Sweet alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- File Js Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css.map">

  </body>

</html>