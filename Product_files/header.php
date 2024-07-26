<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="../index.php" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
                viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">AnB Hub</span> -->
            <img class="h-16" src="../logo/logo.png" alt="">
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a class="A mr-10"
                href="../index.php">Home
            </a>
            <a class="A mr-10"
                href="../about.php">About
                Us
            </a>
            <a class="A mr-10"
                href="../feedback.php">Feedback
            </a>
            <a class="A mr-10"
                href="../contact.php">Contact
                Us
            </a>
            <?php 
                if (isset ($_SESSION ['LoggedIn'])) 
                {
                    if ($_SESSION ['LoggedIn'] == true)
                    {
                        echo "<a href='../profile.php' class='A mr-10' href=''>Profile</a>";
                    }
                }
            ?>
            <a class="mr-10 Asell" href="../sellersIndex.php">Sell With Us</a>
        </nav>

        <?php 
            if (isset ($_SESSION ['LoggedIn']))
            {
                if ($_SESSION ['LoggedIn'] == true)
                {
                echo "<a href='../logout.php'
                    class='A otherA mr-10 text-indigo-400'>Logout</a>";
                }
            }
            else
            {
                echo "
                <a href='../login.php'
                    class='A otherA mr-5 text-indigo-400'>Login</a>
                <div class='line'></div>
                <a href='../signup.php'
                    class='A otherA ml-5 text-indigo-400'>Sign Up
                </a>";
            }
        ?>
    </div>
</header>