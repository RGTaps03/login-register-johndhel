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
<body style="background-color: #ffffb3;">

<!-- header -->

<?php require('header.php'); ?>


<!-- header -->

<!-- body -->

    <section id="page-header" class="about-header" style="background-image: url(images/ybg.png);">
        <h2 style="color:  #333300;">#your_cart</h2>
        <p style="color:gray; font-size: 20px;">Thank you for supporting us, and choosing our products</p>
    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i class="bi bi-x-square"></i></a></td>
                    <td><img src="images/new1.png" alt="" width="70px"></a></td>
                    <td>GREAT WALL ARTS PH / AAMBER 5 <br> (VACUUM INSULATED BOTTLE/MUG)</td>
                    <td>₱ 899.00</td>
                    <td><input type="number" value="1"></td>
                    <td>₱ 899.00</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="bi bi-x-square"></i></a></td>
                    <td><img src="images/new6.png" alt="" width="70px"></a></td>
                    <td>GREAT WALL ARTS PH / AAMBER 5 <br> (VACUUM INSULATED BOTTLE/MUG)</td>
                    <td>₱ 899.00</td>
                    <td><input type="number" value="1"></td>
                    <td>₱ 899.00</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="bi bi-x-square"></i></a></td>
                    <td><img src="images/new4.png" alt="" width="70px"></a></td>
                    <td>GREAT WALL ARTS PH / AAMBER 5 <br> (VACUUM INSULATED BOTTLE/MUG)</td>
                    <td>₱ 899.00</td>
                    <td><input type="number" value="1"></td>
                    <td>₱ 899.00</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="bi bi-x-square"></i></a></td>
                    <td><img src="images/new2.png" alt="" width="70px"></a></td>
                    <td>GREAT WALL ARTS PH / AAMBER 5 <br> (VACUUM INSULATED BOTTLE/MUG)</td>
                    <td>₱ 899.00</td>
                    <td><input type="number" value="1"></td>
                    <td>₱ 899.00</td>
                </tr>
            </tbody>
        </table>

    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
       
        <div>
            <input type="text" placeholder="Enter Your Coupon">
            <button class="normal1">Apply</button>
        </div>
        </div>

        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>₱ 3,569</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <td><strong>Total</strong></td>
                <td><strong>₱ 3,569</strong></td>
            </table>
            <button class="normal1">Proceed to checkout</button>

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

</body>
</html>