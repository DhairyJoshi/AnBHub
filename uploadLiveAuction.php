<?php
    ini_set('session.cache_limiter','public');
    session_cache_limiter(false);

    session_start ();
    include ('database_connect.php');

    $sql = "SELECT * FROM products_live";
    $query = mysqli_query ($conn, $sql);
    $rows = mysqli_num_rows ($query);
    $a = ceil ($rows / 4);
    $meetingID = "00" . $a;
    $productNo = $rows % 4;
    if ($productNo == 0)
    {
        $a = $a + 1;
        $meetingID = "00" . $a;
    }

    if (!(isset($_SESSION['LoggedIn']) && $_SESSION['Usertype'] == "Seller"))
    {
        if (!(isset ($_SESSION['LoggedIn'])))
        {
            // echo "<script>alert ('You need to log in order to upload product')</script>";
            $_SESSION ['alert'] = "Upload Unsuccessful";
            $_SESSION ['error'] = "You need to log in order to upload product";
            header ("location: login.php");
        }
        else
        {
            if (!($_SESSION['Usertype'] == "Seller"))
            {
                // echo "<script>alert ('You need to be Seller in order to upload product')</script>";
                $_SESSION ['alert'] = "Upload Unsuccessful";
                $_SESSION ['error'] = "You need to be Seller in order to upload product";
                header ("location: sellWithUs_signup.php");
            }
        }
    }
    $showMessage = "";
    $showAlert = "";
    $showError = "";
    $myfile = null;
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $Name = $_POST["ProductName"];
        $HostName = $_POST ["HostName"];
        $Date = $_POST ["date"];
        $Bid = (int) $_POST["Bid"];
        $category = $_POST["Category"];
        $Description = $_POST["Description"];
        $R1C1 = $_POST["RoneCone"];
        $R1C2 = $_POST["RoneCtwo"];
        $R2C1 = $_POST["RtwoCone"];
        $R2C2 = $_POST["RtwoCtwo"];
        $R3C1 = $_POST["RthreeCone"];
        $R3C2 = $_POST["RthreeCtwo"];
        $R4C1 = $_POST["RfourCone"];
        $R4C2 = $_POST["RfourCtwo"];

        $Image1_name = $_FILES["Image1"]["name"];
        $Image2_name = $_FILES["Image2"]["name"];
        $Image3_name = $_FILES["Image3"]["name"];
        $Image4_name = $_FILES["Image4"]["name"];
        $Image1_tmp = $_FILES["Image1"]["tmp_name"];
        $Image2_tmp = $_FILES["Image2"]["tmp_name"];
        $Image3_tmp = $_FILES["Image3"]["tmp_name"];
        $Image4_tmp = $_FILES["Image4"]["tmp_name"];

        $folderName = $Name;
        function makeDir($path)
        {
            return is_dir($path) || mkdir($path);
        }
        makeDir ("images/Products/" . $folderName);

        $Image1_extension = strtolower(pathinfo ($Image1_name, PATHINFO_EXTENSION));
        move_uploaded_file ($Image1_tmp, "images/Products/" . $folderName . "/" . $Name . "_" . $Image1_name);
        $Image1_path = "../images/Products/" . $folderName . "/" . $Name . "_" . $Image1_name;

        $Image2_extension = strtolower(pathinfo ($Image2_name, PATHINFO_EXTENSION));
        move_uploaded_file ($Image2_tmp, "images/Products/" . $folderName . "/" . $Name . "_" . $Image2_name);
        $Image2_path = "../images/Products/" . $folderName . "/" . $Name . "_" . $Image2_name;

        $Image3_extension = strtolower(pathinfo ($Image3_name, PATHINFO_EXTENSION));
        move_uploaded_file ($Image3_tmp, "images/Products/" . $folderName . "/" . $Name . "_" . $Image3_name);
        $Image3_path = "../images/Products/" . $folderName . "/" . $Name . "_" . $Image3_name;

        $Image4_extension = strtolower(pathinfo ($Image4_name, PATHINFO_EXTENSION));
        move_uploaded_file ($Image4_tmp, "images/Products/" . $folderName . "/" . $Name . "_" . $Image4_name);
        $Image4_path = "../images/Products/" . $folderName . "/" . $Name . "_" . $Image4_name;

        $imagemain = "images/Products/" . $folderName . "/" . $Name . "_" . $Image1_name;;
        $src = "Products_files/product_" . $Name . ".php";

        $sql = "SELECT ID FROM products_live WHERE Name = '$Name'";
        $query = mysqli_query($conn, $sql);

        if (mysqli_num_rows($query) != 0)
        {
            $showAlert = "Upload unsuccessful";
            $showError = "Product Already exists";
            $exists = true;
        }
        else
        {
            $exists = false;
        }

        if ($exists == false)
        {
            $sql = "INSERT INTO `products_live`(`ID`, `Name`, `Description`, `bid`, `highestBid`, `highestBidder`, `Category`, `R1C1`, `R1C2`, `R2C1`, `R2C2`, `R3C1`, `R3C2`, `R4C1`, `R4C2`, `Host`, `Date`, `imagemain`, `src`, `Image1`, `Image2`, `Image3`, `Image4`, `auctionID`,`status`) VALUES (\"\",\"$Name\",\"$Description\",\"$Bid\",NULL,NULL,\"$category\",\"$R1C1\",\"$R1C2\",\"$R2C1\",\"$R2C2\",\"$R3C1\",\"$R3C2\",\"$R4C1\",\"$R4C2\",\"$HostName\",\"$Date\",\"$imagemain\",\"$src\",\"$Image1_path\",\"$Image2_path\",\"$Image3_path\",\"$Image4_path\",\"$meetingID\",\"\")";

            $result = mysqli_query($conn, $sql);
            if ($result)
            {
                $myfile = fopen("C:\\xampp\\htdocs\\AnBHub\\Products_files\\product_" . $Name . ".php", "w") or die("Unable to open file!");
                copy ("liveProductdemo.php", "C:\\xampp\\htdocs\\AnBHub\\Products_files\\product_" . $Name . ".php");
                
                $sql1 = "UPDATE `meetings` SET `product" . $productNo ."` = '$Name' WHERE `AuctionID` = '$meetingID'";
                $result1 = mysqli_query ($conn, $sql1);
                if (!$result1)
                {
                    $showAlert = "Upload unsuccessful";
                    $showError = "Unknown Error";
                }

                $showAlert = "Upload Successful";
                $showMessage = "Thank you for using our website";
            }
            else
            {
                $showAlert = "Upload unsuccessful";
                $showError = "Unknown Error";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Live Auction</title>
    <link href="Products_files/_main_products.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="tailwind.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="uploadLiveAuction.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php include ("h.php") ?>  

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
                                <button class='button-green' role='button'><a href='" . "Products_files/product_" . $Name . ".php'>Next</a></button>
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
                <form class="lg:w-full mx-auto flex flex-wrap" enctype="multipart/form-data" action="" method="POST">
                    <div class="lg:w-full w-full px-5 lg:py-6 mb-6 lg:mb-0">
                        <div class="lg:h-auto h-64 px-24 mb-6 object-cover object-center rounded">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="h-80vh flex flex-col justify-center items-center ">
                                            <input type="file" name="Image1" class="text-white bg-indigo-500 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded required">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-80vh flex flex-col justify-center items-center ">
                                            <input type="file" name="Image2" class="text-white bg-indigo-500 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded required">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-80vh flex flex-col justify-center items-center ">
                                            <input type="file" name="Image3" class="text-white bg-indigo-500 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded required">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-80vh flex flex-col justify-center items-center ">
                                            <input type="file" name="Image4" class="text-white bg-indigo-500 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded required">
                                        </div>
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

                        <div class="px-96">
                            <div class="flex mb-4">
                                <a
                                    class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1">Product Details</a>
                            </div>

                            <div class="mb-6 inputBox">
                                <input name="ProductName" type="text"
                                    class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="product_name" required/>
                                <span>Product Name</span>
                            </div>

                            <div class="mb-6 inputBox">
                                <input name="HostName" type="text"
                                    class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="product_name" required/>
                                <span>Host Name</span>
                            </div>

                            <div class="mb-6 inputBox" >
                                <input type="text" onfocus="(this.type='date')" onblur="if  (!this.value) this.type='text'" name="date" id="date-input" 
                                    class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"  required/>
                                <span>Auction Date</span>
                            </div>

                            <script>
                                const picker = document.getElementById('date-input');
                                    picker.addEventListener('input', function(e){
                                    var day = new Date(this.value).getUTCDay();
                                    if([1,2,4,5,0].includes(day)){
                                        e.preventDefault();
                                        this.value = '';
                                        alert('Live Auctions are only available on Wednesday and Saturday');
                                    }
                                });
                            </script>

                            <div class="mb-6 inputBox">
                                <input name="Bid" type="number"
                                    class="form-control w-95per px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="EmailAddress" required />
                                <span>Bid</span>
                            </div>

                            <div class="mb-6 inputBox">
                                <select name="Category"
                                    class="form-control w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="Category" required>
                                    <option value=" " selected>--Select Category--</option>
                                    <option value="Antiques">Antiques</option>
                                    <option value="Bags">Bags</option>
                                    <option value="Cameras">Cameras</option>
                                    <option value="Cars">Cars</option>
                                    <option value="Guns">Guns</option>
                                    <option value="Helmets">Helmets</option>
                                    <option value="Helmets">Housing Property</option>
                                    <option value="Jackets">Jackets</option>
                                    <option value="Music Records">Music Records</option>
                                    <option value="Paintings">Paintings</option>
                                    <option value="Sculptures">Sculptures</option>
                                    <option value="Shoes">Shoes</option>
                                    <option value="Swords">Swords</option>
                                    <option value="Theatrical Properties">Theatrical Properties</option>
                                    <option value="Watches">Watches</option>
                                </select>
                                <span>Category</span>
                            </div>

                            <div class="flex mb-4">
                                <a
                                    class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1">Description</a>
                            </div>

                            <div class="mb-6 inputBox">
                                <textarea name="Description"
                                    class="form-control h-28 px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="Description" required ></textarea>
                                <span>Description</span>
                            </div>

                            <div class="flex mb-4">
                                <a
                                    class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1">Product Genres</a>
                            </div>

                            <div class="mb-6 inputBox flex flex-row space-x-5">
                                <div class="inputBoxSmall">
                                    <input name="RoneCone" type="text"
                                        class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                        id="RoneCone" required />
                                    <span>Product Title-1</span>
                                </div>
                                
                                <div class="inputBoxSmall">
                                    <input name="RoneCtwo" type="text"
                                        class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                        id="RoneCtwo" required />
                                    <span>Product Description-1</span>
                                </div>
                            </div>

                            <div class="mb-6 inputBox flex flex-row space-x-5">
                                <div class="inputBoxSmall">
                                    <input name="RtwoCone" type="text"
                                        class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                        id="RtwoCone" required />
                                    <span>Product Title-2</span>
                                </div>
                                
                                <div class="inputBoxSmall">
                                    <input name="RtwoCtwo" type="text"
                                        class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                        id="RtwoCtwo" required />
                                    <span>Product Description-2</span>
                                </div>
                            </div>
                            
                            <div class="mb-6 inputBox flex flex-row space-x-5">
                                <div class="inputBoxSmall">
                                    <input name="RthreeCone" type="text"
                                        class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                        id="RthreeCone" required />
                                    <span>Product Title-3</span>
                                </div>
                                
                                <div class="inputBoxSmall">
                                    <input name="RthreeCtwo" type="text"
                                        class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                        id="RthreeCtwo" required />
                                    <span>Product Description-3</span>
                                </div>
                            </div>

                            <div class="mb-6 inputBox flex flex-row space-x-5">
                                <div class="inputBoxSmall">
                                    <input name="RfourCone" type="text"
                                        class="form-control w-95per px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                        id="RfourCone" required />
                                    <span>Product Title-4</span>
                                </div>
                                
                                <div class="inputBoxSmall">
                                    <input name="RfourCtwo" type="text"
                                        class="form-control w-95per px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                        id="RfourCtwo" required />
                                    <span>Product Description-4</span>
                                </div>
                            </div>

                            <input type="submit" id="Upload" name="Upload"
                                class="flex  text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"
                                value="Upload" />
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <?php include ("f.php") ?>  
</body>

</html>