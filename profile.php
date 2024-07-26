<?php
    session_start ();
    include ("database_connect.php");

    $username = $_SESSION['Username'];

    $sql = "SELECT * FROM `signup_page` WHERE `Username` = '$username'";
    $query = mysqli_query ($conn, $sql);
    while ($row = mysqli_fetch_array($query))
    {
        $Name = $row['First Name'] . " " . $row['Last Name'];
        $type = $row['User_type'];
        $email = $row['Email Address'];
        $Mobile = $row['Mobile'];
        $pfp = $row['pfp'];
    }

    $sql_e = "SELECT * FROM `products` WHERE `Host`='$username' ORDER BY `endDate`";
    $result_e = mysqli_query ($conn, $sql_e);
    $rows = array();
    while ($row = mysqli_fetch_array($result_e))
    {
        $rows[] = $row;
    }
    $num_e = mysqli_num_rows ($result_e);

    $sql_l = "SELECT * FROM `products_live` WHERE `Host`='$username' ORDER BY `Date`";
    $result_l = mysqli_query ($conn, $sql_l);
    $rows2 = array();
    while ($row = mysqli_fetch_array($result_l))
    {
        $rows2[] = $row;
    }
    $num_l = mysqli_num_rows ($result_l);



    $sql1 = "SELECT * FROM `products` WHERE `highestBidder`='$username' ORDER BY `endDate`";
    $result1 = mysqli_query ($conn, $sql1);
    $rows3 = array();
    while ($row = mysqli_fetch_array($result1))
    {
        $rows3[] = $row;
    } 
    $num1 = mysqli_num_rows ($result1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="tailwind.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="main.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php include("h.php") ?>

    <main>
        <section class="text-gray-600 body-font px-[5vw]">
            <div class="container px-5 py-24 mx-auto flex flex-wrap">
                <div class="p-4 lg:w-full md:w-full flex justify-center">
                    <div class="h-44 w-44 border-2 border-gray-300 absolute -mt-24 rounded-full">
                        <img class="rounded-full" src="<?php echo $pfp; ?>" alt="">
                    </div>
                    <div class="w-full border-2 rounded-lg border-gray-400 border-opacity-50 p-8 pt-20 flex flex-col justify-center items-center">
                        <div class="flex-grow">
                            <h2 class="text-gray-700 text-6xl title-font font-medium mb-3"> <?php echo $Name; ?> </h2>
                        </div>
                        <div class="flex items-center mb-4"> 
                            <div class="w-10 h-10 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full text-indigo-500 flex-shrink-0 mr-3">
                                <img src="images/india.png" alt="">
                            </div>
                            <div class="text-lg">Ahmedabad, India</div>
                        </div>
                        <div class="flex space-x-3">
                            <p class="leading-relaxed text-base">@<?php echo $username; ?></p>
                            <p class="text-base">~</p>
                            <p class="leading-relaxed text-base"><?php echo $type ?></p>
                        </div>
                        <div class="text-center">
                            <div class="leading-relaxed text-base flex space-x-2 items-center">
                                <img class="h-5 w-5" src="images/mail.png" alt="">
                                <p><?php echo $email ?></p>
                            </div>    
                            <div class="leading-relaxed text-base flex space-x-2 items-center justify-center">
                                <img class="h-4 w-4" src="images/telephone.png" alt="">
                                <p>+91 <?php echo $Mobile ?></p>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
            if ($type == "Seller")
            {
                echo "
                <section class='text-gray-600 body-font'>
                    <div class='text-center mb-6'>
                        <h1 class='sm:text-6xl text-6xl font-medium title-font text-gray-900 mb-4'>Extended Auctions products</h1>
                        <div class='flex mt-6 justify-center'>
                            <div class='w-32 h-1 rounded-full bg-indigo-500 inline-flex'></div>
                        </div>
                    </div>
                ";
            }
        ?>

            <?php
                $i = 0;
                while ($i < $num_e)
                {
                    echo "
                    <div class='mb-10 container mx-auto flex px-[5vw] md:flex-row flex-col items-center'>
                        <div class='lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center'>
                            <h1 class='title-font sm:text-3xl text-3xl mb-4 font-medium text-gray-900'>" . $rows[$i]['Name'] . "
                            </h1>
                            <p class='mb-8 leading-relaxed'>" . $rows[$i]['Description'] . "</p>
                            <div class='flex justify-center'>
                                <a href=" . $rows[$i]['src'] . " class='inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg'>Go to Auction</a>
                                <div class='ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg'>Status: " . $rows[$i]['status'] . "</div>
                            </div>
                        </div>
                        <div class='w-[20vw] h-[40vh] overflow-hidden'>
                            <img class='object-cover object-center rounded' alt='hero' src='" . $rows[$i]['imagemain'] . "'>
                        </div>
                    </div>";
                    $i++;
                }
                echo "</section>";
            ?>

        <?php
            if ($type == "Seller")
            {
                echo "
                <section class='text-gray-600 body-font'>
                    <div class='text-center mb-6'>
                        <h1 class='sm:text-6xl text-6xl font-medium title-font text-gray-900 mb-4'>Live Auctions products</h1>
                        <div class='flex mt-6 justify-center'>
                            <div class='w-32 h-1 rounded-full bg-indigo-500 inline-flex'></div>
                        </div>
                    </div>
                ";
            }
        ?>

            <?php
                $i = 0;
                while ($i < $num_l)
                {
                    echo "
                    <div class='mb-10 container mx-auto flex px-[5vw] md:flex-row flex-col items-center'>
                        <div class='lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center'>
                            <h1 class='title-font sm:text-3xl text-3xl mb-4 font-medium text-gray-900'>" . $rows2[$i]['Name'] . "
                            </h1>
                            <p class='mb-8 leading-relaxed'>" . $rows2[$i]['Description'] . "</p>
                            <div class='flex justify-center'>
                                <a href=" . $rows2[$i]['src'] . " class='inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg'>Go to Auction</a>
                                <div class='ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg'>Status: " . $rows2[$i]['status'] . " </div>
                            </div>
                        </div>
                        <div class='w-[20vw] h-[40vh] overflow-hidden'>
                            <img class='object-cover object-center rounded' alt='hero' src='" . $rows2[$i]['imagemain'] . "'>
                        </div>
                    </div>";
                    $i++;
                }
            echo "</section>";
            ?>

        <?php
            if ($type == "Visitor")
            {
                echo "
                <section class='text-gray-600 body-font'>
                    <div class='text-center mb-6'>
                        <h1 class='sm:text-6xl text-6xl font-medium title-font text-gray-900 mb-4'>Extended Auctions products</h1>
                        <div class='flex mt-6 justify-center'>
                            <div class='w-32 h-1 rounded-full bg-indigo-500 inline-flex'></div>
                        </div>
                    </div>
                ";
            }
        ?>    

            <?php
                $i = 0;
                while ($i < $num1)
                {
                    echo "
                    <div class='mb-10 container mx-auto flex px-[5vw] md:flex-row flex-col items-center'>
                        <div class='lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center'>
                            <h1 class='title-font sm:text-3xl text-3xl mb-4 font-medium text-gray-900'>" . $rows3[$i]['Name'] . "
                            </h1>
                            <p class='mb-8 leading-relaxed'>" . $rows3[$i]['Description'] . "</p>
                            <div class='flex justify-center'>
                                <a href=" . $rows3[$i]['src'] . " class='inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg'>Go to Auction</a>
                                <div class='ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg'>Your Bid: " . $rows3[$i]['currentBid'] . " </div>
                            </div>
                        </div>
                        <div class='w-[20vw] h-[40vh] overflow-hidden'>
                            <img class='object-cover object-center rounded' alt='hero' src='" . $rows3[$i]['imagemain'] . "'>
                        </div>
                    </div>";
                    $i++;
                }
            echo "</section>";
            ?>
    </main>

    <?php include ("f.php") ?>
</body>
</html>