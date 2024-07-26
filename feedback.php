<?php session_start (); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Feedback</title>
    <link href="main.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="tailwind.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="feedback.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
    <script language="JavaScript">
        const ratings = document.querySelectorAll(".rating");
        const ratingsContainer = document.querySelector(".ratings-container");
        const panel = document.getElementById("panel");
        let selectedRating = "Satisfied";

        const removeActive = () => {
            for (let i = 0; i < ratings.length; i++) {
                ratings[i].classList.remove("active");
            }
        };

        ratingsContainer.addEventListener("click", (e) => {
            if (e.target.parentNode.classList.contains("rating")) {
                removeActive();
                e.target.parentNode.classList.add("active");
                selectedRating = e.target.nextElementSibling.innerHTML;
            }
        });

    </script>

    <?php include ("h.php") ?>  

    <main>
        <section class="text-gray-600 body-font relative">
            <div class="container px-5 py-6 mx-auto flex sm:flex-nowrap flex-wrap">
                <div class="lg:w-2/3 lg:h-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 relative"
                    style="background-color: white;">
                    <img src="./images/feedback_image.jpg">
                </div>

                <div class="w-45per md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0 border-gray-300 border-2 rounded-lg">
                    <div class="px-16">
                        <h2 class="text-gray-900 text-2xl mb-1 font-medium title-font">Feedback</h2>
                        <p class="leading-relaxed mb-5 text-gray-600">Provide Feedback for AnB Hub below</p>
                        <form action="#">
                            <div class="mb-4 inputBox">
                                <input name="Name" type="text"
                                    class="form-control w-full px-4 py-2 text-md font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="Username" required/>
                                <span>Name</span>
                            </div>
                            <div class="mb-4 inputBox">
                                <input name="Email" type="text"
                                    class="form-control w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="Email" required/>
                                <span>Email</span>
                            </div>
                            <div class="inputBox">
                                <textarea name="message"
                                    class="form-control w-full h-32 px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none outline-none resize-none duration-200"
                                    id="Message" required></textarea>
                                <span>Message</span>
                            </div>
                            <!-- <div id="body" class="relative mb-4">
                                <div id="panel" class="panel-container">
                                    <strong>How satisfied are you with our <br />
                                        customer support performance?</strong>
                                    <div class="ratings-container">
                                        <div class="rating">
                                            <img src="https://i.ibb.co/fYN2rVn/no.png" alt="">
                                            <small>Unhappy</small>
                                        </div>
        
                                        <div class="rating">
                                            <img src="https://i.ibb.co/3M8Ddsf/neutral.png" alt="" />
                                            <small>Neutral</small>
                                        </div>
        
                                        <div class="rating active">
                                            <img src="https://i.ibb.co/VVDYGLZ/yes.png" alt="" />
                                            <small>Satisfied</small>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="relative">
                                <div id="body">
                                    <div id="smileys">
                                        <div class="text">Your thoughts about our website</div>
                                        <input type="radio" name="smiley" value="sad" class="sad">
                                        <input type="radio" name="smiley" value="neutral" class="neutral">
                                        <input type="radio" name="smiley" value="happy" class="happy" checked="checked">
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <input type="submit"
                                    class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg w-95per" value="Submit"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php include ("f.php") ?>  
</body>

</html>