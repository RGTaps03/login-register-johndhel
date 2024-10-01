<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREAT WALL ARTS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <?php require('links.php'); ?>
    <link rel="stylesheet" href="newstyle.css">
    
    <style>
       .search-container {
            position: relative;
            width: 300px;
        }
        .search-input {
            width: 100%;
            padding: 10px 40px 10px 40px; /* Adjust padding to make space for the icon */
            border: 1px solid #ccc;
            border-radius: 20px;
            box-sizing: border-box; /* Ensures padding is included in width */
        }
        .search-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
        }
        .pop:hover{
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transform: all 0.3s;
        } 


    </style>

    
</head>
<body style="background-color: #e6ffcc;">
<!-- header -->

<?php require('header.php'); ?>



<!-- header -->

<!-- FOR BUY NOW -->
<!-- <div class="modal fade" id="buyNow" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form >
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center">
        <i class="bi bi-bag-fill fs-3 me-2"></i> Buy Now 
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
      
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control shadow-none" required>
            </div>
            <div class="col-md-6 p-0 mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control shadow-none" required>
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Phone</label>
              <input type="number" class="form-control shadow-none" required>
            </div>
            <div class="col-md-12 p-0 mb-3">
              <label class="form-label">Address</label>
              <textarea class="form-control shadow-none" rows="1" required></textarea>
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">City code</label>
              <input type="number" class="form-control shadow-none" required>
            </div>
            <div class="col-md-6 p-0 mb-3">
              <label class="form-label">Date of Birth</label>
              <input type="date" class="form-control shadow-none" required>
            </div>
            <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
                 <label class="form-check-label" for="inlineRadio1">Gcash</label>
            </div>
            <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
                <label class="form-check-label" for="inlineRadio2">Paymaya</label>
               </div>
               <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option3" required>
                <label class="form-check-label" for="inlineRadio3">Cash on delivery</label>
               </div>
          </div>
        </div>

        <div class="text-center my-1">
        
        <a href="tracking.php" class="btn btn-dark shadow-none"  style="margin-top:5px;">Check Out</a>

        </div>
      </div> 
      </form>
      </div> 
      </form>
    </div>
  </div>
</div> -->
<!-- FOR BUY NOW -->

<!-- body -->
<!-- <div class="my-5 px-4">
   <h2 class="fw-bold h-font text-center text-white" >PRODUCTS</h2>
   <div class="h-line bg-white"></div>
   <p class="text-center mt-3 text-white letter">These products are all authentic and from a legitimate seller</p>

</div> -->

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="images/1st.png" width="100%" id="MainImg" alt="">
            
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/1st.png" width="100%" class="small-img" id="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/2nd.png" width="100%" class="small-img" id="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/new3.png" width="100%" class="small-img" id="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/new4.png" width="100%" class="small-img" id="small-img" alt="">
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h6>Home / TUMBLER</h6>
            <h4>Vacuum Tumbler</h4>
            <h2>₱ 899.00</h2>
            <select name="" id="">
                <option value="">Select Color</option>
                <option value="Red">Red</option>
                <option value="White">White</option>
                <option value="Black">Black</option>
                <option value="Green">Green</option>
            </select>
            <input type="number" value="1" name="" id="">
            <button class="normal1">Add to Cart</button>
            <h4>Product Details</h4>
            <span>GREAT WALL ARTS PH / AAMBER 5 (VACUUM INSULATED BOTTLE/MUG)</span>

        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Wooden Crafts Products</p>
        <div class="pro-container">
            <div class="pro">
                <img src="images/new1.png" alt="">
                <div class="des">
                    <span>Tumbler</span>
                    <h5>GREAT WALL ARTS PH / AAMBER 5 (VACUUM INSULATED BOTTLE/MUG)</h5>
                    <div class="star">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <h4>₱ 899.00</h4>
                </div>
                <a href="#"><i class="bi bi-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="images/2nd.png" alt="">
                <div class="des">
                    <span>Tumbler</span>
                    <h5>GREAT WALL ARTS PH / AAMBER 5 (VACUUM INSULATED BOTTLE/MUG)</h5>
                    <div class="star">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <h4>₱ 899.00</h4>
                </div>
                <a href="#"><i class="bi bi-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="images/new3.png" alt="">
                <div class="des">
                    <span>Tumbler</span>
                    <h5>GREAT WALL ARTS PH / AAMBER 5 (VACUUM INSULATED BOTTLE/MUG)</h5>
                    <div class="star">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <h4>₱ 899.00</h4>
                </div>
                <a href="#"><i class="bi bi-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="images/new4.png" alt="">
                <div class="des">
                    <span>Tumbler</span>
                    <h5>GREAT WALL ARTS PH / AAMBER 5 (VACUUM INSULATED BOTTLE/MUG)</h5>
                    <div class="star">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <h4>₱ 899.00</h4>
                </div>
                <a href="#"><i class="bi bi-cart cart"></i></a>
            </div>
       
        </div>

    </section>
    
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up for Newsletter</h4>
            <p>Get E-Mail updates about our latest shop and <span>special offers</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address" id="">
            <button class="normal1">Sign Up</button>

        </div>

    </section>

<!-- body -->

<!-- FOOTER -->

<?php require('footer.php'); ?>

<!-- FOOTER -->

<script>
  
  var MainImg = document.getElementById("MainImg");
    var smallImgs = document.querySelectorAll(".small-img");

    smallImgs.forEach(function(smallImg) {
        smallImg.onclick = function() {
            MainImg.src = smallImg.src;
        };
    });  
</script>

</body>
</html>