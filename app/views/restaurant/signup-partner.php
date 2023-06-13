<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Food Hunter</title>
  <!-- File Css Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css.map">
  <!-- Font AweSome -->
  <script src="https://kit.fontawesome.com/49f02d4a75.js" crossorigin="anonymous"></script>
  <!-- File Css Main -->
  <link rel="stylesheet" href="../css/style.css" />
  <!-- File Css Sign up Partner -->
  <link rel="stylesheet" href="../css/signPartner.css" />
  <!-- File Css Footer -->
  <link rel="stylesheet" href="../css/footer.css">
</head>

<body>
  <!-- Start Sign up User -->
  <div class="signPartner overflow-hidden position-relative">
    <div class="video">
      <video loop autoplay muted id="video">
        <source src="../video/video-2.mp4" type="video/mp4" />
      </video>
    </div>
    <div class="box p-5">
      <form id="sub" enctype="multipart/form-data" method="post">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="form-floating">
              <input type="text" class="form-control" id="name" name="name" placeholder="Name..." required />
              <label for="name">Name</label>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="form-floating">
              <input type="email" class="form-control email" id="email" placeholder="Email Address..." name="email" required/>
              <label for="email">Email Address</label>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="form-floating">
              <input type="password" class="form-control password" id="password" placeholder="password..."
                name="password" required/>
              <label for="password">Password</label>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="form-floating">
              <input type="text" class="form-control phone" id="phone" placeholder="Phone" name="phone" required/>
              <label for="phone">Phone</label>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="form-floating">
              <input type="text" class="form-control location" id="location" placeholder="Location" name="location" required/>
              <label for="location">Location</label>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="description" class="form-label">Description (delivers to you)
              </label>
              <input type="text" class="form-control" placeholder="e.g Broast Meal is a restaurant located in Egypt..."
                id="description" name="description" required>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="mb-3">
              <label for="deliveryFees" class="form-label">Delivery Fees
              </label>
              <input type="number" min="1" class="form-control" placeholder="e.g 9.99" id="deliveryFees" name="fees" required>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="mb-3">
              <label for="deliveryTime" class="form-label">Delivery Time
              </label>
              <input type="number" min="1" class="form-control" placeholder="e.g 9.99" id="deliveryTime" name="deliveryTime" required>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="mb-3">
              <label for="minOrder" class="form-label">Min. Order
              </label>
              <input type="number" min="1" class="form-control" placeholder="e.g 9.99" id="minOrder" name="minOrder" required>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="mb-3">
              <label for="hourOpen" class="form-label">Open At (Hour)
              </label>
              <input type="number" min="0" max="23" class="form-control" placeholder="e.g 23" id="hourOpen" name="openAt" required>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="mb-3">
              <label for="hourClose" class="form-label">Close At (Hour)
              </label>
              <input type="number" min="0" max="23" class="form-control" placeholder="e.g 23" id="hourClose" name="cloaseAt" required>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="status" class="form-label">Restaurant Status</label>
              <select id="status" class="form-select" aria-label="Default select example" required>
                <option value="busy" name="status">Busy</option>
                <option value="close" name="status">Close</option>
                <option value="empty" name="status">Empty</option>
              </select>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="formFile" class="form-label">logo</label>
              <input class="form-control" type="file" id="formFile" name="logo">
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
          <div class="col-lg-4 col-md-12">
            <button class="mt-3" type="submit">Sign Up</button>
          </div>
      </form>
    </div>
  </div>
  <!-- End Sign up User  -->
  <!-- Start Footer -->
  <footer class="pt-5 pb-5">
    <div class="container">
      <div class="row part-1 pb-3">
        <div class="col-lg-3 col-md-3 col-sm-12 mb-2">
          <a href="termsAndconditions.html">Terms and Conditions</a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 mb-2">
          <a href="FQA.html">FAQ</a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 mb-2">
          <a href="privacyPolicy.html">Privacy Policy</a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 mb-2">
          <a href="contact.html">Contact Us</a>
        </div>
      </div>
      <div class="row part-2 pt-3 pb-3">
        <div class="col-lg-2 col-md-2 col-sm-12">
          <p>Restaurants</p>
          <ul>
            <li>Taboon</li>
            <li>Planet Africa</li>
            <li>Al Aseel El Demashky</li>
            <li>Lan Yuan - Maadi</li>
            <li>More Restaurants...</li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
          <p>Popular Cuisines</p>
          <ul>
            <li>Italian</li>
            <li>Mexican</li>
            <li>Sandwiches</li>
            <li>Japanese</li>
            <li>More Cuisines...</li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
          <p>Popular Areas</p>
          <ul>
            <li>Masaken El Rehab</li>
            <li>Mostashfa AlHommeyat</li>
            <li>Salah ElDin Street</li>
            <li>Salah Nessim Street</li>
            <li>More Areas...</li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
          <p>Cities</p>
          <ul>
            <li>6th of October</li>
            <li>Alexandria</li>
            <li>Assiut</li>
            <li>Banha</li>
            <li>More Cities...</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <p>Follow us on</p>
          <ul class="icons d-flex pb-3">
            <li><i class="fa-brands fa-facebook"></i></li>
            <li><i class="fa-brands fa-twitter"></i></li>
            <li><i class="fa-brands fa-instagram"></i></li>
            <li><i class="fa-brands fa-linkedin-in"></i></li>
          </ul>
        </div>
      </div>
      <div class="row part-3 pt-3">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p>For any support or help you can contact us via our Live Chat</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 text-end">
          <p>©2023 FoodHunter.com</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <!-- File Js Bootstrap -->
  <script src="../css/bootstrap.bundle.min.js"></script>
  <script src="../css/bootstrap.bundle.min.js.map"></script>
</body>

</html>