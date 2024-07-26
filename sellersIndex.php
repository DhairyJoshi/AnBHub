<?php session_start (); ?>

<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell With Us</title>
    <link href="tailwind.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="sellersIndex.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php include ("h.php") ?>  
    <br>

    <main>
        <section class="text-gray-600 body-font mb-20">
            <div class="text-center mb-20">
                <div class="flex mt-6 mb-8 justify-center">
                    <div class="w-3/5 h-1 rounded-full bg-indigo-300 inline-flex"></div>
                </div>
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-indigo-500 mb-4">Steps to Sell With Us</h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-indigo-500">Follow the steps below to start Selling on AnB Hub</p>
                <div class="flex mt-6 justify-center">
                    <div class="w-3/5 h-1 rounded-full bg-indigo-300 inline-flex"></div>
                </div>
            </div>
            <div class="container px-5 py-6 mx-auto">
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-400 sm:flex-row flex-col">
                    <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 flex-shrink-0">
                        <img class="w-8/12" src="images/step1.png">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Sign Up As A Seller</h2>
                        <p class="leading-relaxed text-base">The first step is to register yourself as a Seller on AnB Hub</p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center" href="sellWithUs_signup.php">Sign Up
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                        </a>
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-400 sm:flex-row flex-col">
                    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Upload Product</h2>
                        <p class="leading-relaxed text-base">Upload your product and select your desired Auction</p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center" href="#idforSelling">Extended or Live Auction
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                        </a>
                    </div>
                    <div class="sm:w-32 sm:order-none order-first sm:h-32 h-20 w-20 sm:ml-10 inline-flex items-center justify-center rounded-full bg-indigo-100 flex-shrink-0">
                        <img class="w-8/12" src="images/step2.png">
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-400 sm:flex-row flex-col">
                    <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                        <img class="w-8/12" src="images/step3.png">
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Now Wait</h2>
                        <p class="leading-relaxed text-base">Wait until we have verified the authenticity of your product</p>
                    </div>
                </div>
                <div class="flex items-center lg:w-3/5 mx-auto sm:flex-row flex-col">
                    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Product Uploaded</h2>
                        <p class="leading-relaxed text-base">Your product will be visible on the Live or Extended Auction page</p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center" href="index.php">Go to Page
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                        </a>
                    </div>
                    <div class="sm:w-32 sm:order-none order-first sm:h-32 h-20 w-20 sm:ml-10 inline-flex items-center justify-center rounded-full bg-indigo-100  flex-shrink-0">
                        <img class="w-8/12" src="images/step4.png">
                    </div>
                </div>
            </div>
        </section>

        <a id="idforSelling"></a>
        <section class='text-gray-600 body-font pb-36'>
            <div class='container px-5vw py-24 mx-auto'>
            <div class='w-full mb-10 text-center'>
                <h1 class='sm:text-7xl text-7xl font-medium title-font mb-2 text-indigo-500 capitalize' style='font-variant: small-caps'>Sell With Us</h1>
            </div>
            <div class='flex flex-wrap -mx-4 -mb-10 text-center'>
                <div class='sm:w-1/2 mb-10 px-4'>
                <div class='rounded-lg h-64 overflow-hidden'>
                    <img alt='content' class='object-cover object-center h-full w-full' src='images/sell with us.png'>
                </div>
                <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>Extended Auction</h2>
                <p class='leading-relaxed text-base'>Click the button below to Sell with Extended Auction on AnB Hub</p>
                <a href='uploadProduct.php'>
                    <button
                    class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Extended Auction</button></a>
                </div>  
                <div class='sm:w-1/2 mb-10 px-4'>
                <div class='rounded-lg h-64 overflow-hidden'>
                    <img alt='content' class='object-cover object-center h-full w-full' src='images/buy with us.png'>
                </div>
                <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>Live Auction</h2>
                <p class='leading-relaxed text-base'>Click the button below to Sell With Live Auction on AnB Hub</p>
                <a href='uploadLiveAuction.php'><button
                    class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Live Auction</button></a>
                </div>
            </div>
            </div>
        </section>
    </main>

    <?php include ("f.php") ?>  
</body>
</html>