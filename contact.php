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
        <h2 style="color:#333300;">#let's_talk</h2>
        <p style="color:gray; font-size: 20px;">LEAVE A MESSAGE, We love to hear from you!</p>
    </section>

<div class="container">
    <div class="row mt-4">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
           <div class="bg-white rounded shadow p-4">
                <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.690370390059!2d121.08091356862819!3d14.576299946551895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c7e733d0dd8f%3A0x484e41941f8f66dc!2sSolen%20Building!5e1!3m2!1sfil!2sph!4v1726670394140!5m2!1sfil!2sph"   loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
                <h5>Address</h5>
                <a href="https://maps.app.goo.gl/ja6CajQPf6QsRSvN9" target="_blank" class="d-inline-block text-decoration-none text-dark">
                <i class="bi bi-geo-alt"></i>Solen Building C. Raymundo F corner F. Legaspi, Maybunga Pasig.
                </a>

                <h5 class="mt-4">Call us</h5>
                  <a href="tel: +631234567981" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +639876543221
                </a>
                <br>
                  <a href="tel: +631234567981" class="d-inline-block text-decoration-none text-dark">
                   <i class="bi bi-telephone-fill"></i> +637654323488
                 </a>
                 <h5 class="mt-4"> Email </h5>
                 <a href="mailto: argietaps22@gmail.com" class="d-inline-block text-decoration-none text-dark">
                 <i class="bi bi-envelope-at-fill"></i> GWAexample@gmail.com
                </a>

                <h5 class="mt-4">Follow us</h5>
                  <a href="#" class="d-inline-block text-dark fs-5 me-2">
                       <i class="bi bi-facebook me-1"></i>
                </a> 

                 <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-instagram me-1"></i> 
                </a>   

                <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-threads me-1"></i> 
                </a>            
     
               <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-tiktok me-1"></i> 
               </a>            

           </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 ">
                <form>
                    <h5>Send a message</h5>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Name</label>
                          <input type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Email</label>
                          <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Subject</label>
                          <input type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Message</label>
                          <textarea class="form-control shadow-none" rows="5" style="resize:none;"></textarea>
                          <button type="submit" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none mt-3 ">SEND</button>


                    </div>
                </form>
            </div>
            
        </div>
     
        </div>
    </div>
</div>


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