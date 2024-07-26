<?php session_start(); ?>

<?php include ("database_connect.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extended Auctions</title>
    <link href="tailwind.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="main.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="ExtendedAuctionsPage.css"/>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <script>
        function show1()
        {
            document.getElementById("category1").style.display="block";
            document.getElementById("header1").style.backgroundColor="rgb(224, 231, 255)";
            document.getElementById("category2").style.display="none";  
            document.getElementById("header2").style.backgroundColor="white";
            document.getElementById("category3").style.display="none";
            document.getElementById("header3").style.backgroundColor="white";
            document.getElementById("category4").style.display="none";
            document.getElementById("header4").style.backgroundColor="white";
            document.getElementById("category5").style.display="none";
            document.getElementById("header5").style.backgroundColor="white";
            document.getElementById("category6").style.display="none";
            document.getElementById("header6").style.backgroundColor="white";
            document.getElementById("category7").style.display="none";
            document.getElementById("header7").style.backgroundColor="white";
            document.getElementById("category8").style.display="none";
            document.getElementById("header8").style.backgroundColor="white";
            document.getElementById("category9").style.display="none";
            document.getElementById("header9").style.backgroundColor="white";
            
        }
        function show2()
        {
            document.getElementById("category1").style.display="none";
            document.getElementById("header1").style.backgroundColor="white";
            document.getElementById("category2").style.display="block";
            document.getElementById("header2").style.backgroundColor="rgb(224, 231, 255)";
            document.getElementById("category3").style.display="none";
            document.getElementById("header3").style.backgroundColor="white";
            document.getElementById("category4").style.display="none";
            document.getElementById("header4").style.backgroundColor="white";
            document.getElementById("category5").style.display="none";
            document.getElementById("header5").style.backgroundColor="white";   
            document.getElementById("category6").style.display="none";
            document.getElementById("header6").style.backgroundColor="white";
            document.getElementById("category7").style.display="none";
            document.getElementById("header7").style.backgroundColor="white";
            document.getElementById("category8").style.display="none";
            document.getElementById("header8").style.backgroundColor="white";
            document.getElementById("category9").style.display="none";
            document.getElementById("header9").style.backgroundColor="white";
        }
        function show3()
        {
            document.getElementById("category1").style.display="none";
            document.getElementById("header1").style.backgroundColor="white";
            document.getElementById("category2").style.display="none";
            document.getElementById("header2").style.backgroundColor="white";
            document.getElementById("category3").style.display="block";
            document.getElementById("header3").style.backgroundColor="rgb(224, 231, 255)";
            document.getElementById("category4").style.display="none";
            document.getElementById("header4").style.backgroundColor="white";
            document.getElementById("category5").style.display="none";
            document.getElementById("header5").style.backgroundColor="white";
            document.getElementById("category6").style.display="none";
            document.getElementById("header6").style.backgroundColor="white";
            document.getElementById("category7").style.display="none";
            document.getElementById("header7").style.backgroundColor="white";
            document.getElementById("category8").style.display="none";
            document.getElementById("header8").style.backgroundColor="white";
            document.getElementById("category9").style.display="none";
            document.getElementById("header9").style.backgroundColor="white";
        }
        function show4()
        {
            document.getElementById("category1").style.display="none";
            document.getElementById("header1").style.backgroundColor="white";
            document.getElementById("category2").style.display="none";
            document.getElementById("header2").style.backgroundColor="white";
            document.getElementById("category3").style.display="none";
            document.getElementById("header3").style.backgroundColor="white";
            document.getElementById("category4").style.display="block";
            document.getElementById("header4").style.backgroundColor="rgb(224, 231, 255)";
            document.getElementById("category5").style.display="none";
            document.getElementById("header5").style.backgroundColor="white";
            document.getElementById("category6").style.display="none";
            document.getElementById("header6").style.backgroundColor="white";
            document.getElementById("category7").style.display="none";
            document.getElementById("header7").style.backgroundColor="white";
            document.getElementById("category8").style.display="none";
            document.getElementById("header8").style.backgroundColor="white";
            document.getElementById("category9").style.display="none";
            document.getElementById("header9").style.backgroundColor="white";
        }
        function show5()
        {
            document.getElementById("category1").style.display="none";
            document.getElementById("header1").style.backgroundColor="white";
            document.getElementById("category2").style.display="none";
            document.getElementById("header2").style.backgroundColor="white";
            document.getElementById("category3").style.display="none";
            document.getElementById("header3").style.backgroundColor="white";
            document.getElementById("category4").style.display="none";
            document.getElementById("header4").style.backgroundColor="white";
            document.getElementById("category5").style.display="block";
            document.getElementById("header5").style.backgroundColor="rgb(224, 231, 255)";
            document.getElementById("category6").style.display="none";
            document.getElementById("header6").style.backgroundColor="white";
            document.getElementById("category7").style.display="none";
            document.getElementById("header7").style.backgroundColor="white";
            document.getElementById("category8").style.display="none";
            document.getElementById("header8").style.backgroundColor="white";
            document.getElementById("category9").style.display="none";
            document.getElementById("header9").style.backgroundColor="white";
        }
        function show6()
        {
            document.getElementById("category1").style.display="none";
            document.getElementById("header1").style.backgroundColor="white";
            document.getElementById("category2").style.display="none";
            document.getElementById("header2").style.backgroundColor="white";
            document.getElementById("category3").style.display="none";
            document.getElementById("header3").style.backgroundColor="white";
            document.getElementById("category4").style.display="none";
            document.getElementById("header4").style.backgroundColor="white";
            document.getElementById("category5").style.display="none";
            document.getElementById("header5").style.backgroundColor="white";
            document.getElementById("category6").style.display="block";
            document.getElementById("header6").style.backgroundColor="rgb(224, 231, 255)";
            document.getElementById("category7").style.display="none";
            document.getElementById("header7").style.backgroundColor="white";
            document.getElementById("category8").style.display="none";
            document.getElementById("header8").style.backgroundColor="white";
            document.getElementById("category9").style.display="none";
            document.getElementById("header9").style.backgroundColor="white";
        }
        function show7()
        {
            document.getElementById("category1").style.display="none";
            document.getElementById("header1").style.backgroundColor="white";
            document.getElementById("category2").style.display="none";
            document.getElementById("header2").style.backgroundColor="white";
            document.getElementById("category3").style.display="none";
            document.getElementById("header3").style.backgroundColor="white";
            document.getElementById("category4").style.display="none";
            document.getElementById("header4").style.backgroundColor="white";
            document.getElementById("category5").style.display="none";
            document.getElementById("header5").style.backgroundColor="white";
            document.getElementById("category6").style.display="none";
            document.getElementById("header6").style.backgroundColor="white";
            document.getElementById("category7").style.display="block";
            document.getElementById("header7").style.backgroundColor="rgb(224, 231, 255)";
            document.getElementById("category8").style.display="none";
            document.getElementById("header8").style.backgroundColor="white";
            document.getElementById("category9").style.display="none";
            document.getElementById("header9").style.backgroundColor="white";
        }
        function show8()
        {
            document.getElementById("category1").style.display="none";
            document.getElementById("header1").style.backgroundColor="white";
            document.getElementById("category2").style.display="none";
            document.getElementById("header2").style.backgroundColor="white";
            document.getElementById("category3").style.display="none";
            document.getElementById("header3").style.backgroundColor="white";
            document.getElementById("category4").style.display="none";
            document.getElementById("header4").style.backgroundColor="white";
            document.getElementById("category5").style.display="none";
            document.getElementById("header5").style.backgroundColor="white";
            document.getElementById("category6").style.display="none";
            document.getElementById("header6").style.backgroundColor="white";
            document.getElementById("category7").style.display="none";
            document.getElementById("header7").style.backgroundColor="white";
            document.getElementById("category8").style.display="block";
            document.getElementById("header8").style.backgroundColor="rgb(224, 231, 255)";
            document.getElementById("category9").style.display="none";
            document.getElementById("header9").style.backgroundColor="white";
        }
        function show9()
        {
            document.getElementById("category1").style.display="none";
            document.getElementById("header1").style.backgroundColor="white";
            document.getElementById("category2").style.display="none";
            document.getElementById("header2").style.backgroundColor="white";
            document.getElementById("category3").style.display="none";
            document.getElementById("header3").style.backgroundColor="white";
            document.getElementById("category4").style.display="none";
            document.getElementById("header4").style.backgroundColor="white";
            document.getElementById("category5").style.display="none";
            document.getElementById("header5").style.backgroundColor="white";
            document.getElementById("category6").style.display="none";
            document.getElementById("header6").style.backgroundColor="white";
            document.getElementById("category7").style.display="none";
            document.getElementById("header7").style.backgroundColor="white";
            document.getElementById("category8").style.display="none";
            document.getElementById("header8").style.backgroundColor="white";
            document.getElementById("category9").style.display="block";
            document.getElementById("header9").style.backgroundColor="rgb(224, 231, 255)";
        }
    </script>

    <?php include ("h.php") ?>  

    <main>
        <section class="text-gray-600 body-font">
            <div class="container pb-20 pt-10 mx-auto px-32">
                <div class="flex flex-col text-center w-full mb-10">
                    <h2 class="text-5xl text-indigo-500 tracking-widest font-medium title-font mb-1">EXTENDED AUCTIONS</h2>
                    <h1 class="sm:text-2xl text-2xl font-medium title-font text-gray-900">Upcoming Auctions on AnB Hub</h1>
                </div>
                <br>
                
                <div class="flex text-center pb-4">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <button onclick="show1()">
                                    <span id="header1" class="inline-block py-2 px-2 rounded text-indigo-500 bg-indigo-100 text-xl font-medium tracking-widest mb-6 mr-6">MUSIC RECORDS</span>
                                </button>
                                <button onclick="show2()">
                                    <span id="header2" class="inline-block py-2 px-2 rounded text-indigo-500 text-xl font-medium tracking-widest mb-6 mr-6">JACKETS</span>
                                </button>
                                <button onclick="show3()">
                                    <span id="header3" class="inline-block py-2 px-2 rounded text-indigo-500 text-xl font-medium tracking-widest mb-6 mr-6">GUNS</span>
                                </button>
                                <button onclick="show4()">
                                    <span id="header4" class="inline-block py-2 px-2 rounded text-indigo-500 text-xl font-medium tracking-widest mb-6 mr-6">WATCHES</span>
                                </button>
                                <button onclick="show5()">
                                    <span id="header5" class="inline-block py-2 px-2 rounded text-indigo-500 text-xl font-medium tracking-widest mb-6 mr-6">PAINTINGS</span>
                                </button>
                                <button onclick="show6()">
                                    <span id="header6" class="inline-block py-2 px-2 rounded text-indigo-500 text-xl font-medium tracking-widest mb-6 mr-6">BAGS</span>
                                </button>
                                <button onclick="show7()">
                                    <span id="header7" class="inline-block py-2 px-2 rounded text-indigo-500 text-xl font-medium tracking-widest mb-6 mr-6">ANTIQUES</span>
                                </button>
                                <button onclick="show8()">
                                    <span id="header8" class="inline-block py-2 px-2 rounded text-indigo-500 text-xl font-medium tracking-widest mb-6 mr-6">FORMULA 1</span>
                                </button>
                            </div>

                            <div class="swiper-slide">
                                <button onclick="show9()">
                                    <span id="header9" class="inline-block py-2 px-2 rounded text-indigo-500 text-xl font-medium tracking-widest mb-6 mr-6">THEATRICAL PROPERTIES</span>
                                </button>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="swiper-scrollbar inline-block"></div>
                        </div>    
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
                    <script>
                        const swiper = new Swiper('.swiper', {
                            loop: true,

                            // If we need pagination
                            pagination: {
                                el: '.swiper-pagination',
                            },

                            // Navigation arrows
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            },
                            scrollbar: {
                                el: '.swiper-scrollbar',
                            },
                        });
                    </script>
                </div>  

                <div id="category1">
                    <?php
                        $sql1 = "SELECT * FROM products WHERE Category='Music Records'";
                        $query1 = mysqli_query($conn, $sql1);
                    
                        $num1 = mysqli_num_rows ($query1);
                        $cols = $num1 % 3;
                        $rows1 = $num1 / 3;
                        // $rows = 1.333
                        $i = 0;
                        $rows1 = $num1 / 3;
                        if ($rows1 < 1)
                        {
                            $rows1 = 1;   
                        }
                        // $rows = 1.333
                        $i = 0;
                        while ($i < $rows1)
                        {
                            $sql1 = "SELECT * FROM products WHERE Category='Music Records' ORDER BY endDate ASC";
                            $query1 = mysqli_query($conn, $sql1);
                        
                            $num1 = mysqli_num_rows ($query1);
                            $rows = array ();
                        
                            while ($row = mysqli_fetch_array($query1))
                            {
                                $product1 = $row['Name'];
                                $desc = $row ['Description'];
                                $src = $row['src'];
                                $rows[] = $row;
                            }
                            // print_r ($rows); 
                            $key = ($i * 3) + 0;
                            echo "
                                <div class='flex flex-wrap -mx-4 mb-6 text-center'>
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] ."</p>
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                ";
                            if (($i == (ceil($rows1) - 1)) && ($cols == 1))
                            {
                                echo "</div>";
                                break;
                            }
                            $key = ($i * 3) + 1;
                            echo "
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] . "</p>
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                ";
                            if (($i == (ceil($rows1) - 1)) && ($cols == 2))
                            {
                                echo "</div>";
                                break;
                            }
                            $key = ($i * 3) + 2;
                            echo "
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] . "</p>    
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                </div>
                            ";
                            $i = $i + 1;
                        }
                    ?>
                </div>

                <div id="category2" class="hidden">
                    <?php
                        $sql1 = "SELECT * FROM products WHERE Category='Jackets'";
                        $query1 = mysqli_query($conn, $sql1);
                    
                        $num1 = mysqli_num_rows ($query1);
                        $cols = $num1 % 3;
                        $rows1 = $num1 / 3;
                        // $rows = 1.333
                        $i = 0;
                        $rows1 = $num1 / 3;
                        if ($rows1 < 1)
                        {
                            $rows1 = 1;   
                        }
                        // $rows = 1.333
                        $i = 0;
                        while ($i < $rows1)
                        {
                            $sql1 = "SELECT * FROM products WHERE Category='Jackets' ORDER BY endDate ASC";
                            $query1 = mysqli_query($conn, $sql1);
                        
                            $num1 = mysqli_num_rows ($query1);
                            $rows = array ();
                        
                            while ($row = mysqli_fetch_array($query1))
                            {
                                $product1 = $row['Name'];
                                $desc = $row ['Description'];
                                $src = $row['src'];
                                $rows[] = $row;
                            }
                            // print_r ($rows);
                            $key = ($i * 3) + 0;
                            echo "
                                <div class='flex flex-wrap -mx-4 mb-6 text-center'>
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] ."</p>
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                ";
                            if (($i == (ceil($rows1) - 1)) && ($cols == 1))
                            {
                                echo "</div>";
                                break;
                            }
                            $key = ($i * 3) + 1;
                            echo "
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] . "</p>
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                ";
                            if (($i == (ceil($rows1) - 1)) && ($cols == 2))
                            {
                                echo "</div>";
                                break;
                            }
                            $key = ($i * 3) + 2;
                            echo "
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] . "</p>    
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                </div>
                            ";
                            $i = $i + 1;
                        }
                    ?>
                </div>

                <div id="category3" class="hidden">
                    <?php
                        $sql1 = "SELECT * FROM products WHERE Category='Guns'";
                        $query1 = mysqli_query($conn, $sql1);
                    
                        $num1 = mysqli_num_rows ($query1);  
                        $cols = $num1 % 3;
                        $rows1 = $num1 / 3;
                        // $rows = 1.333
                        $i = 0;
                        $rows1 = $num1 / 3;
                        if ($rows1 < 1)
                        {
                            $rows1 = 1;   
                        }
                        // $rows = 1.333
                        $i = 0;
                        while ($i < $rows1)
                        {
                            $sql1 = "SELECT * FROM products WHERE Category='Guns' ORDER BY endDate ASC";
                            $query1 = mysqli_query($conn, $sql1);
                        
                            $num1 = mysqli_num_rows ($query1);
                            $rows = array ();
                        
                            while ($row = mysqli_fetch_array($query1))
                            {
                                $rows[] = $row;
                            }
                            // print_r ($rows);
                            $key = ($i * 3) + 0;
                            echo "
                                <div class='flex flex-wrap -mx-4 mb-6 text-center'>
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] ."</p>
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                ";
                            if (($i == (ceil($rows1) - 1)) && ($cols == 1))
                            {
                                echo "</div>";
                                break;
                            }
                            $key = ($i * 3) + 1;
                            echo "
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] . "</p>
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                ";
                            if (($i == (ceil($rows1) - 1)) && ($cols == 2))
                            {
                                echo "</div>";
                                break;
                            }
                            $key = ($i * 3) + 2;
                            echo "
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] . "</p>    
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                </div>
                            ";
                            $i = $i + 1;
                        }
                    ?>
                </div>

                <div id="category4" class="hidden">
                    <?php
                        $sql1 = "SELECT * FROM products WHERE Category='Watches'";
                        $query1 = mysqli_query($conn, $sql1);
                    
                        $num1 = mysqli_num_rows ($query1);
                        $cols = $num1 % 3;
                        $rows1 = $num1 / 3;
                        // $rows = 1.333
                        $i = 0;
                        $rows1 = $num1 / 3;
                        if ($rows1 < 1)
                        {
                            $rows1 = 1;   
                        }
                        // $rows = 1.333
                        $i = 0;
                        while ($i < $rows1)
                        {
                            $sql1 = "SELECT * FROM products WHERE Category='Watches' ORDER BY endDate ASC";
                            $query1 = mysqli_query($conn, $sql1);
                        
                            $num1 = mysqli_num_rows ($query1);
                            $rows = array ();
                        
                            while ($row = mysqli_fetch_array($query1))
                            {
                                $rows[] = $row;
                            }
                            // print_r ($rows);
                            $key = ($i * 3) + 0;
                            echo "
                                <div class='flex flex-wrap -mx-4 mb-6 text-center'>
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] ."</p>
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                ";
                            if (($i == (ceil($rows1) - 1)) && ($cols == 1))
                            {
                                echo "</div>";
                                break;
                            }
                            $key = ($i * 3) + 1;
                            echo "
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] . "</p>
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                ";
                            if (($i == (ceil($rows1) - 1)) && ($cols == 2))
                            {
                                echo "</div>";
                                break;
                            }
                            $key = ($i * 3) + 2;
                            echo "
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] . "</p>    
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                </div>
                            ";
                            $i = $i + 1;
                        }
                    ?>
                </div>

                <div id="category5" class="hidden">
                    <?php
                        $sql1 = "SELECT * FROM products WHERE Category='Paintings'";
                        $query1 = mysqli_query($conn, $sql1);
                    
                        $num1 = mysqli_num_rows ($query1);
                        $cols = $num1 % 3;
                        $rows1 = $num1 / 3;
                        // $rows = 1.333
                        $i = 0;
                        $rows1 = $num1 / 3;
                        if ($rows1 < 1)
                        {
                            $rows1 = 1;   
                        }
                        // $rows = 1.333
                        $i = 0;
                        while ($i < $rows1)
                        {
                            $sql1 = "SELECT * FROM products WHERE Category='Paintings' ORDER BY endDate ASC";
                            $query1 = mysqli_query($conn, $sql1);
                        
                            $num1 = mysqli_num_rows ($query1);
                            $rows = array ();
                        
                            while ($row = mysqli_fetch_array($query1))
                            {
                                $rows[] = $row;
                            }
                            // print_r ($rows);
                            $key = ($i * 3) + 0;
                            echo "
                                <div class='flex flex-wrap -mx-4 mb-6 text-center'>
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] ."</p>
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                ";
                            if (($i == (ceil($rows1) - 1)) && ($cols == 1))
                            {
                                echo "</div>";
                                break;
                            }
                            $key = ($i * 3) + 1;
                            echo "
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] . "</p>
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                ";
                            if (($i == (ceil($rows1) - 1)) && ($cols == 2))
                            {
                                echo "</div>";
                                break;
                            }
                            $key = ($i * 3) + 2;
                            echo "
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] . "</p>    
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                </div>
                            ";
                            $i = $i + 1;
                        }
                    ?>
                </div>

                <div id="category6" class="hidden">
                    <?php
                        $sql1 = "SELECT * FROM products WHERE Category='Bags'";
                        $query1 = mysqli_query($conn, $sql1);
                    
                        $num1 = mysqli_num_rows ($query1);
                        $cols = $num1 % 3;
                        $rows1 = $num1 / 3;
                        // $rows = 1.333
                        $i = 0;
                        $rows1 = $num1 / 3;
                        if ($rows1 < 1)
                        {
                            $rows1 = 1;   
                        }
                        // $rows = 1.333
                        $i = 0;
                        while ($i < $rows1)
                        {
                            $sql1 = "SELECT * FROM products WHERE Category='Bags' ORDER BY endDate ASC";
                            $query1 = mysqli_query($conn, $sql1);
                        
                            $num1 = mysqli_num_rows ($query1);
                            $rows = array ();
                        
                            while ($row = mysqli_fetch_array($query1))
                            {
                                $rows[] = $row;
                            }
                            // print_r ($rows);
                            $key = ($i * 3) + 0;
                            echo "
                                <div class='flex flex-wrap -mx-4 mb-6 text-center'>
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] ."</p>
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                ";
                            if (($i == (ceil($rows1) - 1)) && ($cols == 1))
                            {
                                echo "</div>";
                                break;
                            }
                            $key = ($i * 3) + 1;
                            echo "
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] . "</p>
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                ";
                            if (($i == (ceil($rows1) - 1)) && ($cols == 2))
                            {
                                echo "</div>";
                                break;
                            }
                            $key = ($i * 3) + 2;
                            echo "
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] . "</p>    
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                </div>
                            ";
                            $i = $i + 1;
                        }
                    ?>
                </div>

                <div id="category7" class="hidden">
                    <?php
                        $sql1 = "SELECT * FROM products WHERE Category='Antiques'";
                        $query1 = mysqli_query($conn, $sql1);
                    
                        $num1 = mysqli_num_rows ($query1);
                        $cols = $num1 % 3;
                        $rows1 = $num1 / 3;
                        // $rows = 1.333
                        $i = 0;
                        $rows1 = $num1 / 3;
                        if ($rows1 < 1)
                        {
                            $rows1 = 1;   
                        }
                        // $rows = 1.333
                        $i = 0;
                        while ($i < $rows1)
                        {
                            $sql1 = "SELECT * FROM products WHERE Category='Antiques' ORDER BY endDate ASC";
                            $query1 = mysqli_query($conn, $sql1);
                        
                            $num1 = mysqli_num_rows ($query1);
                            $rows = array ();
                        
                            while ($row = mysqli_fetch_array($query1))
                            {
                                $rows[] = $row;
                            }
                            // print_r ($rows);
                            $key = ($i * 3) + 0;
                            echo "
                                <div class='flex flex-wrap -mx-4 mb-6 text-center'>
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] ."</p>
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                ";
                            if (($i == (ceil($rows1) - 1)) && ($cols == 1))
                            {
                                echo "</div>";
                                break;
                            }
                            $key = ($i * 3) + 1;
                            echo "
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] . "</p>
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                ";
                            if (($i == (ceil($rows1) - 1)) && ($cols == 2))
                            {
                                echo "</div>";
                                break;
                            }
                            $key = ($i * 3) + 2;
                            echo "
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] . "</p>    
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                </div>
                            ";
                            $i = $i + 1;
                        }
                    ?>
                </div>

                <div id="category8" class="hidden">
                    <?php
                        $sql1 = "SELECT * FROM products WHERE Category='Formula 1'";
                        $query1 = mysqli_query($conn, $sql1);
                    
                        $num1 = mysqli_num_rows ($query1);
                        $cols = $num1 % 3;
                        $rows1 = $num1 / 3;
                        // $rows = 1.333
                        $i = 0;
                        $rows1 = $num1 / 3;
                        if ($rows1 < 1)
                        {
                            $rows1 = 1;   
                        }
                        // $rows = 1.333
                        $i = 0;
                        while ($i < $rows1)
                        {
                            $sql1 = "SELECT * FROM products WHERE Category='Formula 1' ORDER BY endDate ASC";
                            $query1 = mysqli_query($conn, $sql1);
                        
                            $num1 = mysqli_num_rows ($query1);
                            $rows = array ();
                        
                            while ($row = mysqli_fetch_array($query1))
                            {
                                $rows[] = $row;
                            }
                            // print_r ($rows);
                            $key = ($i * 3) + 0;
                            echo "
                                <div class='flex flex-wrap -mx-4 mb-6 text-center'>
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] ."</p>
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                ";
                            if (($i == (ceil($rows1) - 1)) && ($cols == 1))
                            {
                                echo "</div>";
                                break;
                            }
                            $key = ($i * 3) + 1;
                            echo "
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] . "</p>
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                ";
                            if (($i == (ceil($rows1) - 1)) && ($cols == 2))
                            {
                                echo "</div>";
                                break;
                            }
                            $key = ($i * 3) + 2;
                            echo "
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] . "</p>    
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                </div>
                            ";
                            $i = $i + 1;
                        }
                    ?>
                </div>

                <div id="category9" class="hidden">
                    <?php
                        $sql1 = "SELECT * FROM products WHERE Category='Theatrical Properties'";
                        $query1 = mysqli_query($conn, $sql1);
                    
                        $num1 = mysqli_num_rows ($query1);
                        $cols = $num1 % 3;
                        $rows1 = $num1 / 3;
                        // $rows = 1.333
                        $i = 0;
                        $rows1 = $num1 / 3;
                        if ($rows1 < 1)
                        {
                            $rows1 = 1;   
                        }
                        // $rows = 1.333
                        $i = 0;
                        while ($i < $rows1)
                        {
                            $sql1 = "SELECT * FROM products WHERE Category='Theatrical Properties' ORDER BY endDate ASC";
                            $query1 = mysqli_query($conn, $sql1);
                        
                            $num1 = mysqli_num_rows ($query1);
                            $rows = array ();
                        
                            while ($row = mysqli_fetch_array($query1))
                            {
                                $rows[] = $row;
                            }
                            // print_r ($rows);
                            $key = ($i * 3) + 0;
                            echo "
                                <div class='flex flex-wrap -mx-4 mb-6 text-center'>
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] ."</p>
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                ";
                            if (($i == (ceil($rows1) - 1)) && ($cols == 1))
                            {
                                echo "</div>";
                                break;
                            }
                            $key = ($i * 3) + 1;
                            echo "
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] . "</p>
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                ";
                            if (($i == (ceil($rows1) - 1)) && ($cols == 2))
                            {
                                echo "</div>";
                                break;
                            }
                            $key = ($i * 3) + 2;
                            echo "
                                    <div class='sm:w-1/3 w-1/3 h-1/2 mb-10 px-4'>
                                        <div class='rounded-lg h-4/5 overflow-hidden border-2 border-gray-300'>
                                            <div class='w-12 flex-shrink-0 flex flex-col text-center leading-none absolute ml-3 py-3 px-2 bg-indigo-100'>
                                                <span class='text-indigo-500 pb-2 mb-2 border-b-2 border-indigo-200'>" . date ('M', strtotime ($rows[$key]['endDate'])) . "</span>
                                                <span class='font-medium text-lg text-indigo-800 title-font leading-none'>" . date ('j', strtotime ($rows[$key]['endDate'])) . "</span>
                                            </div>
                                            <div class='overflow-hidden h-50vh'>
                                                <img alt='content' class='object-cover object-center h-full w-full' src='" . $rows[$key]['imagemain'] . "'>
                                            </div>
                                        </div>
                                        <h2 class='title-font text-2xl font-medium text-gray-900 mt-6 mb-3'>" . $rows[$key]['Name'] . "</h2>
                                        <p class='h-20 overflow-hidden leading-relaxed text-base'>" . $rows[$key]['Description'] . "</p>    
                                        <a href='" . $rows[$key]['src'] . "'><button class='flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded'>Go To Auction</button></a>
                                    </div>
                                </div>
                            ";
                            $i = $i + 1;
                        }
                    ?>
                </div>
            </div>
        </section>
    </main>

    <?php include ("f.php") ?>
</body>
</html>