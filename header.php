
<?php
ob_start();
session_start();

if (isset($_SESSION["authenticated"]))
{
    if ($_SESSION["authenticated"] == "1")
    {
        header("Location: main.php");
    }
};


?>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top" >
  <div class="container-fluid">
  <img src="images/wgalogo.png" alt="" style="height: 70px; width:100px; ">
    <a class="navbar-brand me-5 fw-bold fs-5 glow h-font" href="myshop.php" style="margin-left: 1%;
    text-shadow: 1px 2px #ffff99;">GREAT WALL ARTS</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul  class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link  me-2 fs-5" aria-current="page" href="main.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2 fs-5" href="shop.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2 fs-5" href="contact.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2 fs-5" href="about.php">About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link me-2 fs-5" href="cart.php"><i class="bi bi-bag-check"></i></a>
        </li>
        <div class="search-container">
        <input type="search" class="search-input" placeholder="Search...">
        <i class="fas fa-search search-icon"></i>
    </div>
      </ul>
      <div class="d-flex">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
        Login
        </button>
        <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
        Register
        </button>
      </div>
    </div>
  </div>
</nav>

<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center">
        <i class="bi bi-person-circle fs-3 me-2"></i> User Login 
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
         <label class="form-label">User Name</label>
         <input type="text" name="name" class="form-control shadow-none" oninput="this.value = this.value.replace(/\s/g, '')">
      </div>
      <div class="mb-4">
         <label class="form-label">Password</label>
         <input type="password" name="pass" class="form-control shadow-none" oninput="this.value = this.value.replace(/\s/g, '')">
      </div>
      <div class="d-flex align-items-center justify-content-between mb-2">
         <button type="submit" class="btn btn-dark shadow-none" value="login now" name="submit">LOGIN</button>
         <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
      </div>
      </div> 
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form class="form" role="form" autocomplete="off" id="registration-form" method="post">
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center">
        <i class="bi bi-person-lines-fill fs-3 me-2"></i>
          User Registration 
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Note: Your details must match with your ID (National ID, Passport, Driving License, etc.) That will be required during Check-in
      </span>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 ps-0 mb-3">
              <label for="registrationFullName" class="form-label">Name</label>
              <input type="text" class="form-control shadow-none"
              id="registrationFullName"
              name="registrationFullName"
              placeholder="Full name">
            </div>

            <div class="col-md-6 p-0 mb-3">
              <label for="registrationEmail" class="form-label">Email</label>
              <input type="email" class="form-control shadow-none"
              id="registrationEmail"
              name="registrationEmail"
              placeholder="email@domain.com" required="">
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label for="registrationPhoneNumber" class="form-label">Phone</label>
              <input type="number" class="form-control shadow-none"
              id="registrationPhoneNumber"
              name="registrationPhoneNumber"
              placeholder="(+63)9456-723890">
            </div>
           
            <div class="col-md-12 p-0 mb-3">
              <label for="registrationAddress" class="form-label">Address</label>
              <textarea class="form-control shadow-none" rows="1" 
              id="registrationAddress"
              name="registrationAddress"
              placeholder="Address">
            </textarea>
            </div>

            <div class="col-md-6 ps-0 mb-3">
              <label for="registrationCityCode" class="form-label">City code</label>
              <input type="number" class="form-control shadow-none" 
              id="registrationCityCode"
              name="registrationCityCode"
              placeholder="Citycode">
            </div>

            <div class="col-md-6 p-0 mb-3">
              <label for="registrationBday" class="form-label">Date of Birth</label>
              <input type="date" class="form-control shadow-none" 
              id="registrationBday"
              name="registrationBday"
              placeholder="Date of Birth">
            </div>

            <div class="col-md-6 ps-0 mb-3">
              <label for="registrationPassword" class="form-label">Password</label>
              <input type="password" class="form-control shadow-none" 
              id="registrationPassword"
              name="registrationPassword"
              placeholder="password"
              title="At least 4 characters with letters and numbers"
              required="">
            </div>

            <div class="col-md-6 p-0 mb-3">
              <label for="registrationPassword2" class="form-label">Confirm Password</label>
              <input type="password" class="form-control shadow-none" 
              id="registrationPassword2"
              name="registrationPassword2"
              placeholder="Retype Password" 
              required="">
            </div>

          </div>
        </div>


        <div class="text-center my-1">
        <button type="submit" class="btn btn-dark shadow-none" name="registerSubmitBtn" value="Submit">>REGISTER</button>

        </div>
      </div> 
      </form>
    </div>
  </div>
</div>

<script src="utilityFunctions.js"></script>

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<script src="form-submission.js"></script>
</body>