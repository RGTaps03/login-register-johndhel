<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREAT WALL ARTS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <?php require('links.php'); ?>
    <link rel="stylesheet" href="styl.css">
    
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
        <h2 style="color: #333300;">#KnowUs</h2>
        <p style="color:gray; font-size: 20px;">Who we are, and why we build this company</p>
    </section>

    <section id="about-head" class="section-p1">
        <img src="images/team.jpg" alt="">
        <div>
            <h2>Who We Are?</h2>
            <p style="color: #222; "> <strong>Great Wall Arts</strong>  was established in 2018 by born again Christian couple 
                to produce various Filipino made handcrafted products. 
                We also consider importing items by client's request. 
                GWA uses the latest engraving and printing technology in personalizing our 
                products to meet the high standards of our customers.

                <br>
                <br>

                <strong>Mission:</strong> To contribute to non-government foundations providing finacial,
                                emotional and spiritual support to the under privilege Filipinos.
                                We strongly believe that God uses this business to advance His kingdom.

                <br>
                <br>

                <strong>Vision:</strong> To be recognized as one of the best handicrafts provider and digital carving, 
                engraving and printing companies in the Philippines.
            
            
            </p>

              
              

                <br>

        </div>

    </section>



<!-- body -->

<!-- FOOTER -->


<?php require('footer.php'); ?>


<!-- FOOTER -->

</body>
</html>