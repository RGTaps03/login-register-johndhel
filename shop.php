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
<body style="background-color:#ffffb3;">
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
<section id="page-header">
        <h2 style="color: #333300;">#SuperDeals</h2>
  
        <p style="color:gray; font-size: 20px;">Save more with coupons & up to 70% off!</p>
    </section>

  <div class="my-5 px-4">
   <h2 class="fw-bold h-font text-center text-dark" style=" text-shadow: 2px 3px #bf8040; font-size: 50px; margin-top:5%;">PRODUCTS</h2>
   <div class="h-lines bg-dark" style="
    width: 310px;
    margin: 0 auto;
    height: 2.0px;
    color: black;
    text-shadow: 2px 3px white;"></div>
</div>

    <section id="product1" class="section-p1">
        <div class="pro-container" style="margin-top: -3%;">
            <div class="pro" onclick="window.location.href='sproducts.php';">
              <img src="images/1st.png" alt="">
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
                <img src="images/4th.png" alt="">
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
                <img src="images/3rd.png" alt="">
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
                <img src="images/5th.png" alt="">
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
                <img src="images/5th.png" alt="">
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
                <img src="images/5th.png" alt="">
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
                <img src="images/5th.png" alt="">
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
                <img src="images/new2.png" alt="">
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
            <div class="pro">
                <img src="images/new5.png" alt="">
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
                <img src="images/new6.png" alt="">
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
                <img src="images/new2.png" alt="">
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

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="bi bi-arrow-right"></i></a>
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

</body>
</html>