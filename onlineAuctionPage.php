<?php
    session_start();
    date_default_timezone_set('Asia/Kolkata');

    include ('database_connect.php');

    $usertype = "";
    if (isset ($_SESSION['LoggedIn']))
    {
        $usertype = $_SESSION['Usertype'];
    }

    $meeting_ID = $_SESSION["meeting"];
    
    $sql = "SELECT * FROM meetings WHERE AuctionID='$meeting_ID'";
    $query = mysqli_query($conn, $sql);

    if(! $query ) 
    {
        die('Could not get data: ' . mysqli_error());
    }

    while ($row = mysqli_fetch_array($query))
    {
        $current_product = $row['currentproduct'];
        $current_bid = $row['currentbid'];
        $product1_name = $row['product1'];
        $product2_name = $row['product2'];
        $product3_name = $row['product3'];
        $product4_name = $row['product4'];
    }

    $sql = "SELECT * FROM products_live WHERE Name='$current_product'";
    $query = mysqli_query($conn, $sql);
    if(! $query ) 
    {
        die('Could not get data: ' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($query))
    {
        // $current_bid = $row['bid'];
        $start_bid = $row['bid'];
        $product_description = $row ['Description'];
        $product_image = $row ['imagemain'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Auction Page</title>
    <link href="tailwind.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="main.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="onlineAuctionPage.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if ($usertype != "Auctioneer" && isset ($_POST["BID"]))
            {
                date_default_timezone_set('Asia/Kolkata');
                $col = 'Username';
                $bid = $_POST["BID"];
                $uname = $_SESSION ['user'];
                $chat = "" . $uname . " placed bid of ";
                $time = date ('y-m-d H:i:s');
        
                $sql1 = "SELECT `pfp` FROM `signup_page` WHERE `$col` = '$uname'";
                $result1 = mysqli_query($conn, $sql1);
                while ($row = mysqli_fetch_array($result1))
                {
                    $img_path = $row['pfp'];
                }
                
                // if ($current_bid != $bid)
                // {
                    $sql2 = "INSERT INTO `live_chat`(`product`, `chat`, `bid`, `username`, `image`, `time`) VALUES ('$current_product', '$chat','$bid','$uname','$img_path','$time')";
                    $result2 = mysqli_query($conn, $sql2);
                // }

                $sql3 = "UPDATE `meetings` SET `currentbid`='$bid' WHERE AuctionID='$meeting_ID'";
                $result3 = mysqli_query($conn,$sql3);
                header ("location: onlineAuctionPage.php");
            }
            else
            {
                if (isset ($_POST["current_product"]))
                {    
                    $p = $_POST['current_product'];
                    $sql = "SELECT * FROM products_live WHERE Name='$p'";
                    $query = mysqli_query($conn, $sql);
                    if(! $query ) 
                    {
                        die('Could not get data: ' . mysqli_error());
                    }
                    while ($row = mysqli_fetch_array($query))
                    {
                        $start_bid = $row['bid'];
                    }

                    $sql = "UPDATE `meetings` SET `currentproduct`='$p',`currentbid`='$start_bid' WHERE AuctionID='$meeting_ID'";
                    $result = mysqli_query($conn, $sql);

                    $chat = "Auctioneer started auction of " . $p . ", starting bid of ";
                    $uname = "Auctioneer";
                    $img_path = "images/auctioneer1.jpg";
                    $time = date ('y-m-d H:i:s');

                    $sql2 = "INSERT INTO `live_chat`(`product`, `chat`, `bid`, `username`, `image`, `time`) VALUES ('$p', '$chat','$start_bid','$uname','$img_path','$time')";
                    $result2 = mysqli_query($conn, $sql2);
                    header ("location: onlineAuctionPage.php");
                }
            }
        }
    ?>
    <script>
        function showChatBox()
        {   
            document.getElementById("chatBox").style.display='block';
            document.getElementById("meetingBox").style.width='65vw';
        }

        function hideChatBox()
        {
            document.getElementById("chatBox").style.display='none';
            document.getElementById("meetingBox").style.width='90vw';
        }

        function plus1000()
        {
            let value = parseInt(document.getElementById("BID").value) + 1000;
            document.getElementById("BID").value = value; 
            document.getElementById("BID").min = value; 
        }
        function plus5000()
        {
            let value = parseInt(document.getElementById("BID").value) + 5000;
            document.getElementById("BID").value = value; 
            document.getElementById("BID").min = value; 
        }
        function plus10000()
        {
            let value = parseInt(document.getElementById("BID").value) + 10000; 
            document.getElementById("BID").value = value; 
            document.getElementById("BID").min = value; 
        }
    </script>

    <?php include ("h.php") ?>  

    <main>
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 items-center justify-center flex-row space-x-6">
                <div id="meetingBox" class="border-gray-300 border-2 rounded-lg h-[75vh] w-[65vw] flex"> 
                    <div class="w-full h-full">
                        <div class="h-full w-full">
                            <div class="swiper-slide">
                                <div id="image1" class="flex justify-center">
                                    <img class="h-[75vh] w-auto" src="<?php echo $product_image;?>" alt="">
                                </div>
                                <div class="info absolute bottom-4 right-8 h-8 w-8 z-10">
                                    <img  src="images/info_icon.png" alt="">
                                </div>
                                <div class="description hidden absolute bottom-20 right-4 bg-[rgb(0,0,0,0.4)] text-white w-1/3 p-4 rounded">
                                    <?php echo $product_description ?>
                                </div>
                                <div class="desc_arrow hidden absolute bottom-10 right-8 border-l-transparent border-l-[20px] border-r-transparent border-r-[20px] border-t-[rgb(0,0,0,0.4)] border-t-[20px] h-10 w-10">
                                </div>

                                <div class="absolute h-[5vh] w-[5vw] top-1 left-6
                                z-10">
                                    <img class="animate-pulse" src="images/live.png" alt="">
                                </div>

                                <?php 
                                    if ($usertype == "Auctioneer")
                                    {
                                        echo 
                                        "<form action='' method='POST' class='absolute h-auto w-auto bottom-3 left-3 flex flex-row space-x-4'>
                                            <div class='text-indigo-500'>
                                                <select name='current_product'
                                                    class='text-indigo-500 form-control w-full px-4 py-2 text-xl font-normal bg-white bg-clip-padding border border-solid border-indigo-300 rounded transition ease-in-out m-0 focus:text-indigo-700 focus:bg-white focus:border-indigo-600 focus:outline-none'
                                                    id='current_product' required>
                                                    <option value=' ' selected>--Select Current Product--</option>
                                                    <option value='" . $product1_name . "'>" . $product1_name . "</option>
                                                    <option value='" . $product2_name . "'>" . $product2_name . "</option>
                                                    <option value='" . $product3_name . "'>" . $product3_name . "</option>
                                                    <option value='" . $product4_name . "'>" . $product4_name . "</option>
                                                </select>
                                            </div>

                                            <input type='submit' id='change' name='change'
                                                class='flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded'
                                                value='Change Product'/>
                                    </form>";
                                    }
                                ?> 
                            </div>
                        </div>
                    </div>
                </div>
                <div id="chatBox" class="border-2 border-gray-300 rounded-lg w-[25vw] h-[75vh]">
                    <div class="h-10 w-full flex justify-end items-center">
                        <button class="w-[5%] h-[80%] mr-3" onclick="hideChatBox();">
                            <img  src="images/close.png" alt="">
                        </button>
                    </div>
                    <div class=" h-[92%] w-full px-[1vw] pb-[2vh] overflow-y-scroll">
                        <?php
                            $sql = "SELECT * FROM live_chat";
                            $query = mysqli_query($conn, $sql);
                            $rows = array ();
                            $num = mysqli_num_rows ($query);
                            while ($row = mysqli_fetch_array($query))
                            {
                                $msg = $row['chat'] . " $" . $row['bid'] . ".00";
                                $username = $row['username'];
                                $time = date ('h:i a', strtotime($row['time']));
                                $rows[] = $row;
                            }
                            $i = 0;
                            while ($i < $num)
                            {
                                // echo $i;
                                if ($rows[$i]['username'] != "Auctioneer")
                                {
                                    echo 
                                        "<div class='flex flex-row mt-4'>
                                            <div class='pfp h-[45px] w-[45px] bg-blue-900 rounded-full border-2 border-gray-300'>
                                                <img class='rounded-full' src='" . $rows[$i]['image'] . "'>
                                            </div>
                                            <div class='h-auto w-[85%] ml-[0.5vw] flex flex-col items-end'>
                                                <div class='msg w-full h-auto rounded-xl border-2 border-gray-300 p-2 text-lg'>
                                                    <div class='text-sm text-indigo-500'>
                                                        " .  $rows[$i]['username'] . "
                                                    </div>
                                                    " . $rows[$i]['chat'] . " $" . $rows[$i]['bid'] . ".00" . "
                                                </div>
                                                <div class='time w-auto h-[20px] text-sm'>" .  date ('h:i a', strtotime($rows[$i]['time'])) . "</div>
                                            </div>
                                        </div>";
                                }
                                else
                                {
                                    echo
                                    "<div class='flex flex-row mt-4'>
                                        <div class='h-auto w-[85%] mr-[0.5vw] flex flex-col items-start'>
                                            <div class='msg w-full min-h-[100px] h-auto rounded-xl border-2 border-gray-300 p-2 text-lg'>
                                                <div class='text-sm text-indigo-500'>
                                                " .  $rows[$i]['username'] . "
                                                </div>
                                                " . $rows[$i]['chat'] . " $" . $rows[$i]['bid'] . ".00" . "
                                            </div>
                                            <div class='time w-auto h-[20px] text-sm'>" .  date ('h:i a', strtotime($rows[$i]['time'])) . "</div>
                                        </div>
                                        <div class='pfp h-[45px] w-[45px] rounded-full border-2 border-gray-300'>
                                            <img class='rounded-full' src='" . $rows[$i]['image'] . "'>
                                        </div>
                                    </div>";
                                }
                                $i++;
                            }  
                        ?>
                    </div> 
                </div>
            </div>
            <?php
                if ($usertype != "Auctioneer")
                {
                    echo "
                    <div class='w-[90vw] h-[8vh] mx-auto mt-4 flex flex-row justify-between'>
                        <form action='' method='POST' class='w-[70%] flex flex-row justify-start items-center space-x-6'>
                            <div class='inputBox'>
                                <input id='BID' name='BID' type='number' step='1000' min='" . $current_bid . "'
                                    class='form-control w-1/2 pr-4 pl-8 py-2 text-xl text-indigo-500 font-normal bg-white bg-clip-padding border border-solid border-gray-600 rounded transition ease-in-out m-0 focus:text-indigo-500 focus:bg-white focus:border-indigo-600 focus:outline-none'
                                    value='" . $current_bid . "' required/>
                                <span class='text-indigo-500'>$</span>
                            </div>
                            <input type='submit' id='PlaceBid' name='PlaceBid'
                                class='flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded'
                                value='Place Bid' />
                            <div class='flex ml-auto text-indigo-600 bg-indigo-100 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-200 rounded cursor-pointer' onclick='plus1000();'>
                                +$1000
                            </div>
                            <div class='flex ml-auto text-indigo-600 bg-indigo-100 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-200 rounded cursor-pointer' onclick='plus5000();'>
                                +$5000
                            </div>
                            <div class='flex ml-auto text-indigo-600 bg-indigo-100 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-200 rounded cursor-pointer' onclick='plus10000();'>
                                +$10000
                            </div>
                        </form>
                        <button class='w-[7%] h-[100%] flex justify-end items-center' onclick='showChatBox();'>
                            <img class='w-[50%] h-[80%]' src='images/message.png' alt=''>
                        </button>
                    </div>";
                }
                else
                {
                    echo "
                    <div class='w-[90vw] h-[8vh] mx-auto mt-4 flex flex-row justify-between'>
                        <form method='GET' action='endmeeting.php' class='w-[70%] flex flex-row justify-start items-center space-x-6'>
                            <input type='submit' class='text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded'
                               value='End current product' />

                            <input type='submit' class='text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded'
                                value='End meeting' />
                        </form>
                        <button class='w-[7%] h-[100%] flex justify-end items-center' onclick='showChatBox();'>
                            <img class='w-[50%] h-[80%]' src='images/message.png' alt=''>
                        </button>
                    </div>";
                }
            ?>
            <div class="container mx-auto flex px-5 pt-6 items-center justify-center flex-col">
                <div class="rounded-lg h-[20vh] w-[90vw] flex">
                    <div class=" w-1/5 border-gray-800 border-2 rounded-lg h-full px-5 flex justify-center items-end">
                        <img src="images/auctioneer1.jpg" class="h-[88%]" alt="">
                    </div>
                    <div class="swiper2 w-4/5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class=" w-full h-full ml-5 flex space-x-5">
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full flex justify-center items-end">
                                         <img src="images/m1.png" class="h-[80%]" alt="">
                                    </div>
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full flex justify-center items-end">
                                         <img src="images/m2.png" class="h-[80%]" alt="">
                                    </div>
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full flex justify-center items-end">
                                         <img src="images/m3.png" class="h-[80%]" alt="">
                                    </div>
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full flex justify-center items-end">
                                         <img src="images/m4.png" class="h-[80%]" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class=" w-full h-full ml-5 flex space-x-5">
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full">
                                    </div>
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full">
                                    </div>
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full">
                                    </div>
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class=" w-full h-full ml-5 flex space-x-5">
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full">
                                    </div>
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full">
                                    </div>
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full">
                                    </div>
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class=" w-full h-full ml-5 flex space-x-5">
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full">
                                    </div>
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full">
                                    </div>
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full">
                                    </div>
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class=" w-full h-full ml-5 flex space-x-5">
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full">
                                    </div>
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full">
                                    </div>
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full">
                                    </div>
                                    <div class=" w-[23.2%] border-gray-300 border-2 rounded-lg h-full">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
            <script>
                const swiper = new Swiper('.swiper', {
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                }); 

                swiper.on('slideChange', function () {
                // Get the new active slide index
                var activeSlideIndex = swiper.realIndex;

                console.log("New active slide index is: " + activeSlideIndex);
                if (activeSlideIndex == 0)
                {
                    document.getElementById("BID").value = "<?php echo $product1_bid ?>"; 
                    document.getElementById("BID").min = "<?php echo $product1_bid ?>"; 
                    <?php $current_product = $product1_name; ?>
                }
                if (activeSlideIndex == 1)
                {
                    document.getElementById("BID").value = "<?php echo $product2_bid ?>"; 
                    document.getElementById("BID").min = "<?php echo $product2_bid ?>"; 
                    <?php $current_product = $product2_name; ?>
                }
                if (activeSlideIndex == 2)
                {
                    document.getElementById("BID").value = "<?php echo $product3_bid ?>"; 
                    document.getElementById("BID").min = "<?php echo $product3_bid ?>"; 
                    <?php $current_product = $product3_name; ?>

                }
                if (activeSlideIndex == 3)
                {
                    document.getElementById("BID").value = "<?php echo $product4_bid ?>"; 
                    document.getElementById("BID").min = "<?php echo $product4_bid ?>"; 
                    <?php $current_product = $product4_name; ?>
                }
                });
            </script>

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
    </main>

    <?php include ("f.php") ?>  
</body>
</html>