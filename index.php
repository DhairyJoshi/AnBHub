<?php session_start (); ?>

<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="index.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <link href="tailwind.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <title>Home</title>
</head>

<body>
  <div class="lg:hidden w-[100vw] h-[100vh] bg-white flex flex-col items-center justify-center space-y-24 box-border">
    <div class="w-auto h-auto flex justify-center">
      <img class="h-24" src="logo/logo.png" alt="">
    </div>

    <div class="w-auto h-auto text-4xl text-indigo-500 text-center">
      Not available on mobile.<br>
      Please view on desktop
    </div>
  </div>

  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }

    function clicked1_next() {
      document.getElementById("slide1").style.display = 'none';
      document.getElementById("slide2").style.display = 'block';
    }

    function clicked2_prev() {
      document.getElementById("slide2").style.display = 'none';
      document.getElementById("slide1").style.display = 'block';
    }

    function disp_hide() 
    {
      document.querySelector(".hide").style.display = 'block';
    }
    function hide() 
    {
      document.querySelector(".hide").style.display = 'none';
    }

    function disp_hide2() 
    {
      document.querySelector(".hide2").style.display = 'block';
    }
    function hide2() 
    {
      document.querySelector(".hide2").style.display = 'none';
    }

    function disp_hide3() 
    {
      document.querySelector(".hide3").style.display = 'block';
    }
    function hide3() 
    {
      document.querySelector(".hide3").style.display = 'none';
    }

    function disp_hide4() 
    {
      document.querySelector(".hide4").style.display = 'block';
    }
    function hide4() 
    {
      document.querySelector(".hide4").style.display = 'none';
    }

    function disp_hide5() 
    {
      document.querySelector(".hide5").style.display = 'block';
    }
    function hide5() 
    {
      document.querySelector(".hide5").style.display = 'none';
    }

    function disp_hide6() 
    {
      document.querySelector(".hide6").style.display = 'block';
    }
    function hide6() 
    {
      document.querySelector(".hide6").style.display = 'none';
    }
  </script>

  <?php include ("h.php") ?>
  <br>

  <main class="hidden lg:block">
    <div class="myContainer -mt-4">
      <div class="slideshow-container">
        <div class="mySlides fade current">
          <img class="w-full" src="./Slider_images/welcome.png">
          <div class="description">
            <p style="font-size: 1.4rem;" class="text-gray-800">HIGHLIGHTS ON AnB HUB</p><br>
            Swipe to view the featured and upcoming auctions on AnB Hub.
          </div>
        </div>

        <div class="mySlides fade">
          <div class="price_tag">Bid $ 4,000,000</div>
          <img class="w-full" src="./Slider_images/McLaren mp4-8.jpg">
          <div class="description">
            <p style="font-size: 1.4rem;"><a class="text-gray-800" href="Products_files/product_Mclaren MP4-8.php">McLAREN MP4/8 |
                JUNE 2023</p></a> <br>
            The race wining F1 livery driven by Ayrtonn Senna in the 1993 European Grand Prix.
          </div>
        </div>

        <div class="mySlides fade">
          <div class="price_tag">Bid: $ 300,000</div>
          <img class="w-full" src="./Slider_images/air_Jordan.png">
          <div class="description">
            <p style="font-size: 1.4rem;"><a class="text-gray-800" href="Products_files/product_Nike Air Jordans 1.php">NIKE AIR JORDANS 1 | JUNE 2023</p></a> <br>
            The original Air Jordans released in 1985 by Peter Moore. Wore on court by Micheal Jordan
          </div>
        </div>

        <div class="mySlides fade">
          <div class="price_tag">Bid: $ 250,000,000</div>
          <img class="w-full" src="./Slider_images/impression-sunrise.jpg">
          <div class="description">
            <p style="font-size: 1.4rem;"><a class="text-gray-800" href="Products_files/product_Impression Sunrise.php">IMPRESSION, SUNRISE | JUNE 2023</p></a> <br>
            The famous painting Impression, Sunrise by Claude Monet made in 1874 set in the French port of Le Havre
          </div>
        </div>


        <div class="mySlides fade">
          <div class="price_tag">Bid: $ 1,000,000</div>
          <img class="w-full" src="./Slider_images/katar.png">
          <div class="description">
            <p style="font-size: 1.4rem;"><a class="text-gray-800" href="">KATAR | JUNE 2023</p></a> <br>
            Unique to South Asia, the katar is a dagger that is gripped at the crossbars in a clenched fist. 
          </div>
        </div>

        <div class="mySlides fade">
          <div class="price_tag">Bid: $ 130,000,000</div>
          <img class="w-full" src="./Slider_images/Mercedes 300 SLR.jpg">
          <div class="description">
            <p style="font-size: 1.4rem;"><a class="text-gray-800" href="">MERCEDES 300 SLR | JUNE 2023</p></a> <br>
            The 1955 Mercedes-Benz 300 SLR Uhlenhaut Coupé. Commuted from Stuttgart and Munich in a hour
          </div>
        </div>

        <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a> -->
        <a class="prev" onclick="plusSlides(-1)"><i class="arrow left"></i></a>
        <!-- <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
        <a class="next" onclick="plusSlides(1)"><i class="arrow right"></i></a>


        <div class="myDots" style="text-align:center">
          <span class="dot active" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
          <span class="dot" onclick="currentSlide(5)"></span>
          <span class="dot" onclick="currentSlide(6)"></span>
        </div>
      </div>
    </div>

    <a href="#section2" class="h-[8%] w-[4%] absolute bottom-8 right-[48%] animate-bounce">
      <img src="images/arrow.png" alt="">
    </a>

    <section id="section2" class="text-gray-600 body-font mt-6">
      <div class="container px-5vw pt-20 mx-auto relative">
        <div class="flex flex-wrap w-full mb-8">
          <div class="w-full mb-6 lg:mb-0 flex justify-between">
            <div>
              <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Extended Auctions
                on AnB Hub</h1>
              <div class="h-1 w-32 bg-indigo-500 rounded"></div>
            </div>
            <a class="A otherA text-indigo-500 inline-flex items-center text-2xl" href="ExtendedAuctionsPage.php">See All</a> 
          </div>
        </div>
      </div>

      <div class="ProductSlider">
        <div class="ProductContainer">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide px-5vw">
                <div class="container mx-auto relative">
                  <div class="flex flex-row">
                    <div class="flex flex-wrap -m-4">
                      <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="rounded-lg mb-5">
                          <div>
                            <img class="h-80 border-2 border-gray-300 rounded w-full object-cover object-center mb-6"
                              src="./images/Products/Encore 2XLP Vinyl Record/Encore 2XLP Vinyl Record_1.webp" alt="content">
                          </div>
                          <h3 class="tracking-widest text-indigo-500 text-2xl font-medium title-font">20 April</h3>
                          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Encore 2XLP Vinyl Record</h2>
                          <p class="leading-relaxed text-base">Music | Eminem | Records | Vinyl
                            Double LP | 2XLP </p>
                        </div>
                        <a class="text-indigo-500 inline-flex items-center" href="Products_files/product_Encore 2XLP Vinyl Record.php">Go to
                          Auction
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                        </a>
                      </div>

                      <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="rounded-lg mb-5">
                          <div>
                            <img class="h-80 border-2 border-gray-300 rounded w-full object-cover object-center mb-6"
                              src="images/Products/Louis Vuitton Hooded Down Jacket/Louis Vuitton Hooded Down Jacket_1.webp" alt="content">
                          </div>
                          <h3 class="tracking-widest text-indigo-500 text-2xl font-medium title-font">22 June</h3>
                          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Louis Vuitton Hooded Down Jacket
                          </h2>
                          <p class="leading-relaxed text-base">Louis Vuitton | Jacket | Hooded Down
                            | Over Size Fit | Black | Made In Italy </p>
                        </div>
                        <a class="text-indigo-500 inline-flex items-center" href="Products_files/product_Louis Vuitton Hooded Down Jacket.php">Go to
                          Auction
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                        </a>
                      </div>

                      <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="rounded-lg  mb-5">
                          <div>
                            <img class="h-80 border-2 border-gray-300 rounded w-full object-cover object-center mb-6"
                              src="./images/Products/Six-Shot PepperBox Gun/Six-Shot PepperBox Gun_1.jpg" alt="content">
                          </div>
                          <h3 class="tracking-widest text-indigo-500 text-2xl font-medium title-font">22 June</h3>
                          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Six-Shot PepperBox Gun
                          </h2>
                          <p class="leading-relaxed text-base">Vintage | Handgun | Six Barrell |
                            PepperBox Gun | 19th Century | Bronze Alloy</p>
                        </div>
                        <a class="text-indigo-500 inline-flex items-center" href="Products_files/product_Six-Shot PepperBox Gun.php">Go to Auction
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                        </a>
                      </div>

                      <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="rounded-lg mb-5">
                          <div>
                            <img class="h-80 border-2 border-gray-300 rounded w-full object-cover object-center mb-6"
                              src="./images/Products/Hermes Arceau LHeure de la Lune/Hermes Arceau LHeure de la Lune_1.webp" alt="content">
                          </div>
                          <h3 class="tracking-widest text-indigo-500 text-2xl font-medium title-font">23 June</h3>
                          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Hermès Arceau L'Heure de la Lune
                          </h2>
                          <p class="leading-relaxed text-base">Watch | Hermès | Arceau L'Heure de la Lune | White Gold |
                            Platinum </p>
                        </div>
                        <a class="text-indigo-500 inline-flex items-center" href="Products_files/product_Hermes Arceau LHeure de la Lune.php">Go to
                          Auction
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide px-5vw">
                <div class="container mx-auto relative">
                  <div class="flex flex-row">
                    <div class="flex flex-wrap -m-4">
                      <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="rounded-lg mb-5">
                          <div>
                            <img class="h-80 border-2 border-gray-300 rounded w-full object-cover object-center mb-6"
                              src="./images/Products/La Vie en Rose/La Vie en Rose_1.jpg" alt="content">
                          </div>
                          <h3 class="tracking-widest text-indigo-500 text-2xl font-medium title-font">23 June</h3>
                          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">La Vie En Rose</h2>
                          <p class="leading-relaxed text-base">Painting | Modern Art | Irish Art | La Vie En Rose | Jan
                            O'Sullivan </p>
                        </div>
                        <a class="text-indigo-500 inline-flex items-center" href="#">Go to Auction
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                        </a>
                      </div>

                      <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="rounded-lg mb-5">
                          <div>
                            <img class="h-80 border-2 border-gray-300 rounded w-full object-cover object-center mb-6"
                              src="images/Products/Buste Dhomme Barbu/Buste Dhomme Barbu_1.webp" alt="content">
                          </div>
                          <h3 class="tracking-widest text-indigo-500 text-2xl font-medium title-font">24 June</h3>
                          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Buste d'homme barbu
                          </h2>
                          <p class="leading-relaxed text-base">Painting | Modern Style | Pablo Picasso |
                            Buste d'homme barbu | Bust of a bearded man | Spanish</p>
                        </div>
                        <a class="text-indigo-500 inline-flex items-center" href="#">Go to Auction
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                        </a>
                      </div>

                      <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="rounded-lg  mb-5">
                          <div>
                            <img class="h-80 border-2 border-gray-300 rounded w-full object-cover object-center mb-6"
                              src="images/Products/Beethoven/Beethoven_1.webp" alt="content">
                          </div>
                          <h3 class="tracking-widest text-indigo-500 text-2xl font-medium title-font">24 June</h3>
                          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Beethoven By Edward Steichen
                          </h2>
                          <p class="leading-relaxed text-base">Painting | Oil Painting | Edward Steichen | Beethoven |
                            American</p>
                        </div>
                        <a class="text-indigo-500 inline-flex items-center" href="#">Go to Auction
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                        </a>
                      </div>

                      <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="rounded-lg mb-5">
                          <div>
                            <img class="h-80 border-2 border-gray-300 rounded w-full object-cover object-center mb-6"
                              src="images/Products/Louis Vuitton Bag/Louis Vuitton Bag_1.avif" alt="content">
                          </div>
                          <h3 class="tracking-widest text-indigo-500 text-2xl font-medium title-font">24 June</h3>
                          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Louis Vuitton Bag</h2>
                          <p class="leading-relaxed text-base">Louis Vuitton | Bag | LV x YK | Yayoi Kusama | NOIR
                            FUCHSIA | Medium-Sized (MM)</p>
                        </div>
                        <a class="text-indigo-500 inline-flex items-center" href="#">Go to Auction
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide px-5vw">
                <div class="container mx-auto relative">
                  <div class="flex flex-row">
                    <div class="flex flex-wrap -m-4">
                      <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="rounded-lg mb-5">
                          <div>
                            <img class="h-80 border-2 border-gray-300 rounded w-full object-cover object-center mb-6"
                              src="./images/Products/Antique Ring/Antique Ring_1.webp" alt="content">
                          </div>
                          <h3 class="tracking-widest text-indigo-500 text-2xl font-medium title-font">24 June</h3>
                          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Antique Ring</h2>
                          <p class="leading-relaxed text-base">Heritage | Bridal | Gold Shank | Engraved
                            Emerald | Engraved Rubies </p>
                        </div>
                        <a class="text-indigo-500 inline-flex items-center" href="#">Go to Auction
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                        </a>
                      </div>

                      <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="rounded-lg mb-5">
                          <div>
                            <img class="h-80 border-2 border-gray-300 rounded w-full object-cover object-center mb-6"
                              src="./images/Products/Dumbledores Wand/Dumbledores Wand_1.png" alt="content">
                          </div>
                          <h3 class="tracking-widest text-indigo-500 text-2xl font-medium title-font">30 June</h3>
                          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Dumbledore's wand
                          </h2>
                          <p class="leading-relaxed text-base">Fiction | Harry Potter | Theatrical
                            property | Micheal Gambon </p>
                        </div>
                        <a class="text-indigo-500 inline-flex items-center" href="#">Go to Auction
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                        </a>
                      </div>

                      <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="rounded-lg  mb-5">
                          <div>
                            <img class="h-80 border-2 border-gray-300 rounded w-full object-cover object-center mb-6"
                              src="./images/Products/Max Verstappen Helmet/Max Verstappen Helmet_1.png" alt="content">
                          </div>
                          <h3 class="tracking-widest text-indigo-500 text-2xl font-medium title-font">30 June</h3>
                          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Formula 1 Helmet
                          </h2>
                          <p class="leading-relaxed text-base">Formula 1 | Red Bull | Max Verstappen |
                            Austrian GP 2022</p>
                        </div>
                        <a class="text-indigo-500 inline-flex items-center" href="#">Go to Auction
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                        </a>
                      </div>

                      <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="rounded-lg mb-5">
                          <div>
                            <img class="h-80 border-2 border-gray-300 rounded w-full object-cover object-center mb-6"
                              src="./images/Products/Sculpted Head of Sita/Sculpted Head of Sita_1.webp" alt="content">
                          </div>
                          <h3 class="tracking-widest text-indigo-500 text-2xl font-medium title-font">30 June</h3>
                          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Sita's Sculpted
                            head</h2>
                          <p class="leading-relaxed text-base">Ethnic | Sculpture | Goddess Sita | Vagai
                            Wood | Hand painted</p>
                        </div>
                        <a class="text-indigo-500 inline-flex items-center" href="#">Go to Auction
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev" style="color: grey;"></div>
            <div class="swiper-button-next" style="color: grey;"></div>
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
      <script>
        const swiper = new Swiper('.swiper', {
          loop: true,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
      </script>
    </section>

    <section class="text-gray-600 body-font">
      <div class="container py-24 mx-auto flex flex-wrap">
        <div class="w-full mb-6 px-5vw flex justify-between">
          <div>
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Live Auctions
              on AnB Hub</h1>
            <div class="h-1 w-32 bg-indigo-500 rounded"></div>
          </div>
          <a class="A otherA text-indigo-500 inline-flex items-center text-2xl" href="LiveAuctionsPage.php">See All</a> 
        </div>
        <div class="swiper2">
          <div class="swiper-wrapper">
            <div class="swiper-slide px-5vw">
              <div class="flex flex-wrap w-full">
                <div class="flex flex-wrap w-1/2">
                  <div class="md:p-2 p-1 w-full">
                    <img alt="gallery" class="w-full object-cover object-center h-55vh" src="images/Products/McLaren mp4-8/1.jpg" onmouseenter="disp_hide()">
                    <div onmouseleave="hide()" class="hide scrollUp">
                      <p class="text-3xl">McLaren MP4/8</p> 
                      <p>
                        <a class="text-indigo-200 inline-flex items-center" href="Products_files/product_McLaren MP4-8.php">Go to Auction
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                        </a>
                      </p>  
                      <br>
                      <p class="text-sm text-indigo-200">Hover Right Side to see Description &rarr;</p>
                    </div>
                  </div>
                </div>
                <div class="flex flex-wrap w-1/2">
                  <div class="md:p-2 p-1 w-full">
                    <img alt="gallery" class="w-full object-cover object-center block h-55vh" src="images/Products/McLaren mp4-8/2.webp" onmouseenter="disp_hide2()">
                    <div onmouseleave="hide2()" class="hide2 scrollUp">
                      <p class="text-xl">The race wining F1 livery driven by Ayrtonn Senna in the 1993 European Grand Prix.</p>
                      <br>
                      <p class="text-sm text-indigo-200">&larr; Hover Left Side to see Name</p> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide px-5vw">
              <div class="flex flex-wrap w-full">
                <div class="flex flex-wrap w-1/2">
                  <div class="md:p-2 p-1 w-full">
                    <img alt="gallery" class="w-full object-cover object-center h-55vh" src="images/Products/Nike Air Jordans 1/Nike Air Jordans 1_1.jpg" onmouseenter="disp_hide3()">
                    <div onmouseleave="hide3()" class="hide3 scrollUp">
                      <p class="text-3xl">Nike Air Jordans 1</p> 
                      <p>
                        <a class="text-indigo-200 inline-flex items-center" href="Products_files/product_Nike Air Jordans 1.php">Go to Auction
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                        </a>
                      </p>  
                      <br>
                      <p class="text-sm text-indigo-200">Hover Right Side to see Description &rarr;</p>
                    </div>
                  </div>
                </div>
                <div class="flex flex-wrap w-1/2">
                  <div class="md:p-2 p-1 w-full">
                    <img alt="gallery" class="w-full object-cover object-center h-55vh" src="images/Products/Nike Air Jordans 1/Nike Air Jordans 1_2.jpg" onmouseenter="disp_hide4()">
                    <div onmouseleave="hide4()" class="hide4 scrollUp">
                      <p class="text-xl">The original Air Jordans released in 1985 by Peter Moore. Wore on court by Micheal Jordan</p> 
                      <br>
                      <p class="text-sm text-indigo-200">&larr; Hover Left Side to see Name</p> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide px-5vw">
              <div class="flex flex-wrap w-full">
                <div class="flex flex-wrap w-1/2">
                  <div class="md:p-2 p-1 w-full">
                    <img alt="gallery" class="w-full object-cover object-center h-55vh" src="images/Products/Impression Sunrise/Impression Sunrise_1.jpg" onmouseenter="disp_hide5()">
                    <div onmouseleave="hide5()" class="hide5 scrollUp">
                      <p class="text-3xl">Impression, Sunrise</p> 
                      <p>
                        <a class="text-indigo-200 inline-flex items-center" href="Products_files/product_Impression Sunrise.php">Go to Auction
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                        </a>
                      </p>  
                      <br>
                      <p class="text-sm text-indigo-200">Hover Right Side to see Description &rarr;</p>
                    </div>
                  </div>
                </div>
                <div class="flex flex-wrap w-1/2">
                  <div class="md:p-2 p-1 w-full">
                    <img alt="gallery" class="w-full object-cover object-center h-55vh" src="images/Products/Impression Sunrise/Impression Sunrise_2.jpg" onmouseenter="disp_hide6()">
                    <div onmouseleave="hide6()" class="hide6 scrollUp">
                      <p class="text-xl">The famous painting Impression, Sunrise by Claude Monet made in 1874 set in the French port of Le Havre</p> 
                      <br>
                      <p class="text-sm text-indigo-200">&larr; Hover Left Side to see Name</p> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>  

          <div class="swiper-button-prev2"></div>
          <div class="swiper-button-next2"></div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
      <script>
        const swiper2 = new Swiper('.swiper2', {
          loop: true,

          // If we need pagination
          pagination: {
            el: '.swiper-pagination',
          },

          // Navigation arrows
          navigation: {
            nextEl: '.swiper-button-next2',
            prevEl: '.swiper-button-prev2',
          },

          // And if we need scrollbar
          scrollbar: {
            el: '.swiper-scrollbar',
          },
      });
      </script>
    </section>

    <section class="text-gray-600 body-font px-5vw">
      <div class="container px-5 pt-20 pb-24 mx-auto">
        <div class="text-center mb-20">
          <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Extended Auction on AnB Hub</h1>
          <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Purchasing through Extended Auctions explained</p>
          <div class="flex mt-6 justify-center">
            <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
          </div>
        </div>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
          <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
            <div class="w-28 h-28 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
              <img src="images/1.png" alt="">
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Longer time period</h2>
              <p class="leading-relaxed text-base">Extended Auctions provide with a longer bidding window than live or the traditional methods of Auction</p>
            </div>
          </div>
          <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
            <div class="w-28 h-28 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
              <img src="images/2.png" alt="">
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Online Auction</h2>
              <p class="leading-relaxed text-base">Extended Auctions are Online Auctions. As a result, they can take place in the vicinity of your home or office. All you need is an Internet Access and you can bid on your desired product</p>
            </div>
          </div>
          <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
            <div class="w-28 h-28 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
              <img src="images/3.png" alt="">
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Pay after Purchase</h2>
              <p class="leading-relaxed text-base">You only need to pay after the period of your desired product has completed and you are the highest bidder.</p>
            </div>
          </div>
        </div>
        <a href="ExtendedAuctionsPage.php">
          <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Extended Auction</button>
        </a>
      </div>
    </section>

    <section class="text-gray-600 body-font px-5vw">
      <div class="container px-5 pb-16 mx-auto">
        <div class="text-center mb-20">
          <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Live Auction on AnB Hub</h1>
          <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Purchasing through Live Auctions explained</p>
          <div class="flex mt-6 justify-center">
            <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
          </div>
        </div>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
          <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
            <div class="w-28 h-28 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
              <img src="images/4.png" alt="">
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Traditional Auctions</h2>
              <p class="leading-relaxed text-base">Live Auctions are traditional auctions conducted on a Online medium and comprise of Auctioneers, 20 Bidders and 4 products</p>
            </div>
          </div>
          <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
            <div class="w-28 h-28 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
              <img src="images/5.png" alt="">
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Online Auction</h2>
              <p class="leading-relaxed text-base">Live Auctions are Online Auctions. As a result, they can take place in the vicinity of your home or office. All you need is an Internet Access and you can bid on your desired product</p>
            </div>
          </div>
          <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
            <div class="w-28 h-28 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
              <img src="images/6.png" alt="">
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Pay after Purchase</h2>
              <p class="leading-relaxed text-base">You only need to pay you are the highest bidder at the end of the Auction.</p>
            </div>
          </div>
        </div>
        <a href="LiveAuctionsPage.php">
          <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Live Auction</button>
        </a>
      </div>
    </section>

    <section class="text-gray-600 body-font px-5vw">
      <div class="container px-5 py-5 mx-auto flex flex-wrap">
        <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
          <div class="w-full sm:p-4 px-4 mb-6">
            <h1 class="title-font font-medium text-xl mb-2 text-gray-900">Statistics about AnB Hub
            </h1>
            <div class="leading-relaxed">The growth of AnB Hub since it was founded has been tried to be represented.
              AnB Hub has gained 2.7k users with a range of over 1.3K products</div>
          </div>
          <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
            <h2 class="title-font font-medium text-3xl text-gray-900">2.7K</h2>
            <p class="leading-relaxed">Users</p>
          </div>
          <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
            <h2 class="title-font font-medium text-3xl text-gray-900">1.3K</h2>
            <p class="leading-relaxed">Products</p>
          </div>
        </div>
        <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
          <img class="object-cover object-center w-full h-full" src="./images/statistics.jpg" alt="stats">
        </div>
      </div>
    </section>
  </main>

  <?php include ("f.php"); ?>
</body>

</html>