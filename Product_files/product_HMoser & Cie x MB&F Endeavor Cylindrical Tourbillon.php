<?php
    ini_set('session.cache_limiter','public');
    session_cache_limiter(false);
    
    session_start ();
    $showAlert = "";
    $showError = "";
    $showMessage = "";
    $i = 1;

    $fileName= $_SERVER['SCRIPT_NAME'];
    $fileName = substr($fileName, 31, -4);

    include ('../database_connect.php');

    $sql = "SELECT * FROM products_live WHERE NAME = '$fileName '";
    $query = mysqli_query($conn, $sql);

    if(! $query ) 
    {
        die('Could not get data: ' . mysqli_error());
    }

    while ($row = mysqli_fetch_array($query))
    {
        $Name = $row ['Name'];
        $Description = $row ['Description'];
        $Bid = $row ['bid'];
        $R1C1 = $row ['R1C1'];
        $R1C2 = $row ['R1C2'];
        $R2C1 = $row ['R2C1'];
        $R2C2 = $row ['R2C2'];
        $R3C1 = $row ['R3C1'];
        $R3C2 = $row ['R3C2'];
        $R4C1 = $row ['R4C1'];
        $R4C2 = $row ['R4C2'];

        $Date = $row ['Date'];
        $Month = date ('F', strtotime($Date));
        $Day = date ('jS', strtotime ($Date));
        $Time = date ('h:i A', strtotime ($Date));

        $Host = $row ['Host'];
        $Image1 = $row ['Image1'];
        $Image2 = $row ['Image2'];
        $Image3 = $row ['Image3'];
        $Image4 = $row ['Image4'];
        $auctionId = $row ['auctionID'];
    }

    $sql = "SELECT * FROM meetings WHERE AuctionID = '$auctionId'";
    $query = mysqli_query($conn, $sql);

    if(! $query ) 
    {
        die('Could not get data: ' . mysqli_error());
    }

    while ($row = mysqli_fetch_array($query))
    {
        $P[1] = $row ['P1'];
        $P[2] = $row ['P2'];
        $P[3] = $row ['P3'];
        $P[4] = $row ['P4'];
        $P[5] = $row ['P5'];
        $P[6] = $row ['P6'];
        $P[7]= $row ['P7'];
        $P[8]= $row ['P8'];
        $P[9]= $row ['P9'];
        $P[10] = $row ['P10'];
        $P[11]= $row ['P11'];
        $P[12] = $row ['P12'];
        $P[13] = $row ['P13'];
        $P[14] = $row ['P14'];
        $P[15] = $row ['P15'];
        $P[16] = $row ['P16'];
        $P[17] = $row ['P17'];
        $P[18] = $row ['P18'];
        $P[19] = $row ['P19'];
        $P[20] = $row ['P20'];
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (isset ($_SESSION ['LoggedIn']))
        {
            $newParticipant = $_SESSION ["Username"];
            while ($i <= 20)
            {
                if ($P[$i] == $newParticipant)
                {
                    $showAlert = "Error!";
                    $showError = "You already sent participation request";
                    break;
                }
                if (is_null ($P[$i]))
                {
                    $column = "P" . $i;
                    $sql = "UPDATE meetings SET $column='$newParticipant' WHERE AuctionID='$auctionId'";
                    $query = mysqli_query($conn, $sql);
                    $showAlert = "Participation";
                    $showMessage = $newParticipant . " will get meeting link on assigned date";
                    break;
                }
                $i++;
            }
        }
        else
        {
            $showAlert = "Cannot participate";
            $showError = "You need to login in order to participate";
        }
    }
    $_SESSION["meeting"] = $auctionId;
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
            <div class="container px-5 mx-auto">
                <div class="lg:w-full mx-auto flex flex-wrap">
                    <div class="lg:w-full w-full px-5 lg:py-6 mb-6 lg:mb-0">
                        <div class="lg:h-auto h-64 px-24 mb-6 object-cover object-center rounded">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="object-cover h-80vh w-full" src="<?php echo $Image1 ?>" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="object-cover h-80vh w-full" src="<?php echo $Image2 ?>" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="object-cover h-80vh w-full" src="<?php echo $Image3 ?>" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="object-cover h-80vh w-full" src="<?php echo $Image4 ?>" alt="">
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
                        <h1 class="text-gray-900 text-3xl title-font font-medium mb-2"><?php echo $Name; ?>
                        <h2 class="text-base title-font text-gray-500 mb-6">Auction On: 
                            <?php echo $Month . " " . $Day . " " . $Time; ?>
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
                            <span class="text-gray-500"><?php echo $R1C1; ?></span>
                            <span class="ml-auto text-gray-900"><?php echo $R1C2; ?></span>
                        </div>
                        <div class="flex border-t border-gray-200 py-2">
                            <span class="text-gray-500"><?php echo $R2C1; ?></span>
                            <span class="ml-auto text-gray-900"><?php echo $R2C2; ?></span>
                        </div>
                        <div class="flex border-t border-gray-200 py-2">
                            <span class="text-gray-500"><?php echo $R3C1; ?></span>
                            <span class="ml-auto text-gray-900"><?php echo $R3C2; ?></span>
                        </div>
                        <div class="flex border-t border-gray-200 py-2">
                            <span class="text-gray-500"><?php echo $R4C1; ?></span>
                            <span class="ml-auto text-gray-900"><?php echo $R4C2; ?></span>
                        </div>
                        <!-- <div class="flex border-t border-gray-200 py-2">
                            <span class="text-gray-500">Highest Bidder</span>
                            <span class="ml-auto text-gray-900"><
                            ?php echo $highestBidder; ?> 
                        </span>
                        </div> -->
                        <div class="flex border-t border-gray-200 py-2">
                            <span class="text-gray-500">Host</span>
                            <span class="ml-auto text-gray-900"><?php echo $Host; ?></span>
                        </div>
                        <div class="flex border-t border-b mb-6 border-gray-200 py-2">
                            <span class="text-gray-500">Starting Bid</span>
                            <span class="ml-auto text-gray-900">$ <?php echo $Bid; ?>.00</span>
                        </div>
                        <form action="#" method="POST" class="flex">
                            <!-- <div class="inputBox">
                                <input name="newBid" type="number" min="<?php echo $currentBid; ?>"
                                    class="form-control w-1/2 pr-4 pl-8 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="Email" value="<
                                    ?php echo $currentBid; ?>" required/>
                                <span>$</span>
                            </div> -->
                            <?php
                                $found = NULL; 
                                if (isset($_SESSION['LoggedIn']))
                                {
                                    $username = $_SESSION['Username'];
                                    while ($i <= 20)
                                    {
                                        if ($P[$i] == $username)
                                        {
                                            $found = "true";
                                        }
                                        $i++;
                                    }
                                    if ($found == "true")
                                    {
                                        echo "<a href='../onlineAuctionPage.php' class='flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</a>";
                                    }
                                    else
                                    {
                                        echo "<input type='submit' id='participate' name='participate'
                                            class='flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded'
                                            value='Request Auction Entry' />";
                                    }
                                }
                                else
                                {
                                    echo "<input type='submit' id='participate' name='participate'
                                    class='flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded'
                                    value='Request Auction Entry' />";
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("footer.php"); ?>
</body>

</html>