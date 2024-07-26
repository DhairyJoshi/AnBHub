<?php
    ini_set('session.cache_limiter','public');
    session_cache_limiter(false);
    
    session_start ();
    $showAlert = "";
    $showError = "";
    $showMessage = "";

    $fileName= $_SERVER['SCRIPT_NAME'];
    $fileName = substr($fileName, 31, -4);

    include ('../database_connect.php');

    $sql = "SELECT * FROM products WHERE NAME = '$fileName'";
    $query = mysqli_query($conn, $sql);

    if(! $query ) 
    {
        die('Could not get data: ' . mysqli_error());
    }

    while ($row = mysqli_fetch_array($query))
    {
        $Name = $row ['Name'];
        $Description = $row ['Description'];
        $currentBid = $row ['currentBid'];
        $highestBidder = $row ['highestBidder'];
        $RoneCone = $row ['RoneCone'];
        $RoneCtwo = $row ['RoneCtwo'];
        $RtwoCone = $row ['RtwoCone'];
        $RtwoCtwo = $row ['RtwoCtwo'];
        $RthreeCone = $row ['RthreeCone'];
        $RthreeCtwo = $row ['RthreeCtwo'];
        $RfourCone = $row ['RfourCone'];
        $RfourCtwo = $row ['RfourCtwo'];

        $sDate = $row ['startDate'];
        $eDate = $row ['endDate'];
        $endMonth = date ('F', strtotime($eDate));
        $endDay = date ('jS', strtotime ($eDate));
        $endTime = date ('h:i A', strtotime ($eDate));

        $Image1 = $row ['Image1'];
        $Image2 = $row ['Image2'];
        $Image3 = $row ['Image3'];
        $Image4 = $row ['Image4'];
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (isset ($_SESSION ['LoggedIn']))
        {
            $newBid = $_POST["newBid"];
            $newBidder = $_SESSION["Username"];
            if ($newBid > $currentBid)
            {
                $sql = "UPDATE products SET currentBid='$newBid', highestBidder='$newBidder' WHERE Name='$fileName'";  
                $query = mysqli_query($conn, $sql);
                $showAlert = "Bid placed";
                $showMessage = $newBidder . " placed bid of $" . $newBid;
            }
        }
        else
        {
            $showAlert = "Cannot place bid";
            $showError = "You need to login in order to place bid";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $Name; ?></title>
    <link href="_main_products.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>

<body>
    <?php include("header.php"); ?>

    <main>
        <?php
            if ($showAlert != "" && $showMessage != "")
            {
                echo "
                    <div class='notification'>
                        <div class='content flex justify-between bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3'>
                            <div class='flex'>
                                <div class='py-1'><svg class='fill-current h-6 w-6 text-teal-500 mr-4' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'><path d='M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z'/>
                                    </svg>
                                </div>
                                <div>
                                    <p class='font-bold'>" . $showAlert . "</p>
                                    <p class='text-sm'>" . $showMessage . "</p>
                                </div>
                            </div>
                            <div class='button'>
                                <button class='button-green' role='button'><a href=''>Next</a></button>
                            </div>
                    </div>
                </div>";
            }
            if ($showAlert != "" && $showError != "")
            {
                echo "
                <div class='notification'>
                    <div class='content flex justify-between bg-red-300 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md'>
                        <div class='flex'>
                            <div class='py-1'><svg class='fill-current h-6 w-6 text-red-500 mr-4' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'><path d='M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z'/></svg></div>
                            <div>
                            <p class='font-bold'>" . $showAlert . "</p>
                            <p class='text-sm'>" . $showError . "</p>
                            </div>
                        </div>
                        <div class='button'>
                            <button class='button-red' role='button'><a href=''>Next</a></button>
                        </div>
                    </div>
                </div>";
            }
        ?>
        <section class="text-gray-600 body-font overflow-hidden">
            <div class="container px-5 py-12 mx-auto">
                <div class="lg:w-4/5 mx-auto flex flex-wrap">
                    <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                        <h1 class="text-gray-900 text-3xl title-font font-medium mb-2"><?php echo $Name; ?>
                        <h2 class="text-base title-font text-gray-500 ">Ends On: 
                            <?php echo $endMonth . " " . $endDay . " " . $endTime; ?>
                        </h2>  
                    </h1>
                        <div class="flex mb-4">
                            <a
                                class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1">Description</a>
                            <!-- <a class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1">Reviews</a>
                            <a class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1">Details</a> -->
                        </div>
                        <p class="leading-relaxed mb-4"><?php echo $Description; ?></p>
                        <div class="flex border-t border-gray-200 py-2">
                            <span class="text-gray-500"><?php echo $RoneCone; ?></span>
                            <span class="ml-auto text-gray-900"><?php echo $RoneCtwo; ?></span>
                        </div>
                        <div class="flex border-t border-gray-200 py-2">
                            <span class="text-gray-500"><?php echo $RtwoCone; ?></span>
                            <span class="ml-auto text-gray-900"><?php echo $RtwoCtwo; ?></span>
                        </div>
                        <div class="flex border-t border-gray-200 py-2">
                            <span class="text-gray-500"><?php echo $RthreeCone; ?></span>
                            <span class="ml-auto text-gray-900"><?php echo $RthreeCtwo; ?></span>
                        </div>
                        <div class="flex border-t border-gray-200 py-2">
                            <span class="text-gray-500"><?php echo $RfourCone; ?></span>
                            <span class="ml-auto text-gray-900"><?php echo $RfourCtwo; ?></span>
                        </div>
                        <div class="flex border-t border-gray-200 py-2">
                            <span class="text-gray-500">Highest Bidder</span>
                            <span class="ml-auto text-gray-900"><?php echo $highestBidder; ?></span>
                        </div>
                        <div class="flex border-t border-b mb-6 border-gray-200 py-2">
                            <span class="text-gray-500">Current Bid</span>
                            <span class="ml-auto text-gray-900">$ <?php echo $currentBid; ?>.00</span>
                        </div>
                        <form action="#" method="POST" class="flex">
                            <div class="inputBox">
                                <input name="newBid" type="number" min="<?php echo $currentBid; ?>"
                                    class="form-control w-1/2 pr-4 pl-8 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="Email" value="<?php echo $currentBid; ?>" required/>
                                <span>$</span>
                            </div>
                            <input type="submit" id="PlaceBid" name="PlaceBid"
                                class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"
                                value="Place Bid" />
                        </form>
                    </div>
                    <div class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?php echo $Image1 ?>" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo $Image2 ?>" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo $Image3 ?>" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo $Image4 ?>" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>

                            <div class="swiper-button-prev" style="color: gray;"></div>
                            <div class="swiper-button-next" style="color: gray;"></div>
                        </div>

                        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
                        <script>
                            const swiper = new Swiper('.swiper', {
                                loop: true,

                                pagination: {
                                    el: '.swiper-pagination',
                                },

                                navigation: {
                                    nextEl: '.swiper-button-next',
                                    prevEl: '.swiper-button-prev',
                                },
                            });
                        </script>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("footer.php"); ?>
</body>

</html>