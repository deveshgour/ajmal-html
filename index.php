<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>AJMAL || HOME</title>
    <?php include('include/head-link.php'); ?>
    <link rel="stylesheet" href="css/slick.css" type="text/css">
    <link rel="stylesheet" href="css/slick-theme.css" type="text/css">
</head>

<body>
    <?php include('include/header.php'); ?>
    <main class="mainContent homePage">
        <section class="bannerSection">
           
                <div class="bannerSlider">
                    <div class="bannerSlider_item bannerSlider_item--1">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-7 bannerSection_left">
                                    <h1>Ajmal <span>Perfumes</span> <br>
                                    Fragrances that  <span>Delight</span> </h1>
                                        
                                        <p>Nothing unlocks an old memory better than smell, be it the memory of lost <br>love or of a fond friend. At Ajmal we help towards recreating those memories <br> through our fragrances.</p>
                                        <a class="discoverAllBtn" href="#">Discover all</a>
                                </div>
                                <div class="col-md-5 bannerSection_right">
                                    <div class="bannerSection_productBox">
                                        <img src="images/amber-wood-noir.png" class="img-fluid mx-auto" alt=""/>
                                        <p>Eau de parfume / 75 ML / WOMEN</p>   
                                        <h2>Amber Wood Noir</h2>
                                        <div class="bannerSection_productBox_price">24 AED</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bannerSlider_item bannerSlider_item--2">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-7 bannerSection_left">
                                    <h1>Ajmal <span>Perfumes</span> <br>
                                    Fragrances that  <span>Delight</span> </h1>
                                        
                                        <p>Nothing unlocks an old memory better than smell, be it the memory of lost <br>love or of a fond friend. At Ajmal we help towards recreating those memories <br> through our fragrances.</p>
                                        <a class="discoverAllBtn" href="#">Discover all</a>
                                </div>
                                <div class="col-md-5 bannerSection_right">
                                    <div class="bannerSection_productBox">
                                        <img src="images/amber-wood-noir-2.png" class="img-fluid mx-auto" alt=""/>
                                        <p>Eau de parfume / 75 ML / WOMEN</p>   
                                        <h2>Amber Wood Noir</h2>
                                        <div class="bannerSection_productBox_price">24 AED</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bannerSlider_item bannerSlider_item--3">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-7 bannerSection_left">
                                    <h1>Ajmal <span>Perfumes</span> <br>
                                    Fragrances that  <span>Delight</span> </h1>
                                        
                                        <p>Nothing unlocks an old memory better than smell, be it the memory of lost <br>love or of a fond friend. At Ajmal we help towards recreating those memories <br> through our fragrances.</p>
                                        <a class="discoverAllBtn" href="#">Discover all</a>
                                </div>
                                <div class="col-md-5 bannerSection_right">
                                    <div class="bannerSection_productBox">
                                        <img src="images/amber-wood-noir.png" class="img-fluid mx-auto" alt=""/>
                                        <p>Eau de parfume / 75 ML / WOMEN</p>   
                                        <h2>Amber Wood Noir</h2>
                                        <div class="bannerSection_productBox_price">24 AED</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
          
        </section>

    </main>
    <?php include ('include/footer.php') ?>
    <?php include ('include/footer-scripts.php') ?>
    <script type="text/javascript" src="js/slick.min.js"></script>
   
    <script>
  
    
      $('.bannerSlider').slick({
            //centerMode: true,
            // centerPadding: '90px',
            slidesToShow: 1,
            arrows: true,
            dots:true,
            nextArrow:"<button type='button' class='slick-next pull-left'><img class='img-fluid' src='images/next-arrow-rounded.svg'></button>",

            responsive: [
                {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    // centerMode: true,
                        // centerPadding: '40px',
                        slidesToShow: 1
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        // centerMode: true,
                        // centerPadding: '40px',
                        slidesToShow: 1
                    }
                    }
                ]
                });

             
        
    </script>
</body>

</html>