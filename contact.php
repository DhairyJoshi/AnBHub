<?php session_start (); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="tailwind.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <link href="main.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <link href="contact.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <title>Contact Us</title>
</head>

<body>
  <?php include ("h.php") ?>

  <main>
    <section class="text-gray-600 body-font relative">
      <div class="container px-5 py-6 mx-auto flex sm:flex-nowrap flex-wrap">
        <div class="lg:w-55per md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
            <div class="image absolute inset-0">
              <img class="absolute inset-0" src="./images/contact_us.jpg">
            </div>
            <div class="floating relative flex flex-wrap py-6 rounded shadow-md">
                <div class="lg:w-1/2 px-6">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                    <p class="mt-1">Government Polytechnic Ambavadi, Ahmedabad </p>
                </div>
                <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                    <a class="text-indigo-500 leading-relaxed">AnBHub.india@gmail.com</a>
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                    <p class="leading-relaxed">123-456-789</p>
                </div>
            </div>
        </div>
        <div class="lg:w-40per md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0 border-gray-300 border-2 rounded-lg px-16">
            <h2 class="text-gray-900 text-2xl mb-1 font-medium title-font">Contact Us</h2>
            <p class="leading-relaxed mb-5 text-gray-600">Contact Us by filling out the details below. Thank you !!!
            </p>
            <form action="#">
                <div class="mb-6 inputBox">
                    <input name="Name" type="text"
                        class="form-control w-full px-4 py-2 text-md font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                        id="Username" required/>
                    <span>Name</span>
                </div>
                <div class="mb-6 inputBox">
                    <input name="Email" type="email"
                        class="form-control w-full px-4 py-2 text-md font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                        id="Email" required/>
                    <span>Email Address</span>
                </div>
                <div class="mb-6 inputBox">
                    <input name="Mobile" type="tel"
                        class="form-control w-full px-4 py-2 text-md font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                        id="Mobile" required/>
                    <span>Mobile Number</span>
                </div>
                <div class="inputBox mb-6">
                    <textarea name="message"
                        class="form-control w-full h-32 px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none outline-none resize-none duration-200"
                        id="Username" required></textarea>
                    <span>Message</span>
                </div>
                <input type="submit"
                    class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" value="Submit"/>
            </form>
        </div>
      </div>
    </section>
  </main>

  <?php include ("f.php") ?>
</body>

</html>