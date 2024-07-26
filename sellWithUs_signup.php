<?php
    if (!(isset ($_SESSION ['LoggedIn'])))
    {
      session_start ();
      if (isset ($_SESSION['alert']) && isset($_SESSION['error']))
      {
        $sessAlert = $_SESSION ['alert'];
        $sessError = $_SESSION ['error'];
      }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell With Us</title>
    <link href="main.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="tailwind.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="sellWithUs_signup.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
    <script> 
        var checkPasswords = function () 
        {
            if (document.getElementById('Password').value != "" && document.getElementById('Confirm_Password').value != "")
            {
                if (document.getElementById('Password').value == document.getElementById('Confirm_Password').value) 
                {
                    document.getElementById('message').style.color = '';
                    document.getElementById('Confirm_Password_text').style.color = '';
                    document.getElementById('Password_text').style.color = '';
                    document.getElementById('message').innerHTML = '';
                    document.getElementById('Password').style.borderColor = '';    
                    document.getElementById('Confirm_Password').style.borderColor = '';
                    document.getElementById('Password').style.color = '';
                    document.getElementById('Confirm_Password').style.color = '';
                } 
                else 
                {
                    document.getElementById('message').style.color = 'red';
                    document.getElementById('Confirm_Password_text').style.color = 'red';
                    document.getElementById('Password_text').style.color = 'red';
                    document.getElementById('message').innerHTML = 'Passwords don\'t match';
                    document.getElementById('Password').style.borderColor = 'red';
                    document.getElementById('Confirm_Password').style.borderColor = 'red';
                    document.getElementById('Password').style.color = 'red';
                    document.getElementById('Confirm_Password').style.color = 'red';
                }
                // alert("Passwords don't match");
            }
            else
            {
                    document.getElementById('message').style.color = '';
                    document.getElementById('message').innerHTML = '';
                    document.getElementById('Confirm_Password_text').style.color = '';
                    document.getElementById('Password').style.borderColor = '';
                    document.getElementById('Confirm_Password').style.borderColor = '';
            }
        }


        var validatePassword = function () 
            {
                var p = document.getElementById('Password').value,
                    errors = [];
                
                if (!(p.length < 8 && p.search(/[a-z]/i) < 0 && p.search(/[0-9]/) < 0))
                {
                    if (p.length < 8) 
                    {
                        document.getElementById('Password_text').style.color = 'red';
                        document.getElementById('P_message').style.color = 'red';
                        document.getElementById('P_message').innerHTML = 'Your password must contain atleast 8 characters';
                        document.getElementById('Password').style.borderColor = 'red';
                        document.getElementById('Password').style.color = 'red';
                    }
                    else if (p.search(/[a-z]/i) < 0) 
                    {
                        document.getElementById('Password_text').style.color = 'red';
                        document.getElementById('P_message').style.color = 'red';
                        document.getElementById('P_message').innerHTML = 'Your password must contain at least one alphabetic character.';
                        document.getElementById('Password').style.borderColor = 'red';
                        document.getElementById('Password').style.color = 'red';
                    }
                    else if (p.search(/[0-9]/) < 0) 
                    {
                        document.getElementById('Password_text').style.color = 'red';
                        document.getElementById('P_message').style.color = 'red';
                        document.getElementById('P_message').innerHTML = 'Your password must contain at least one numeric character.';
                        document.getElementById('Password').style.borderColor = 'red';
                        document.getElementById('Password').style.color = 'red';
                    }
                    else if (errors.length > 0)
                    {
                        alert(errors.join("\n"));
                    }
                    else    
                    {
                        document.getElementById('Password_text').style.color = '';
                        document.getElementById('P_message').style.color = '';
                        document.getElementById('P_message').innerHTML = '';
                        document.getElementById('Password').style.borderColor = '';
                        document.getElementById('Password').style.color = '';
                    }
                }
                else
                {
                    document.getElementById('Password_text').style.color = '';
                    document.getElementById('P_message').style.color = '';
                    document.getElementById('P_message').innerHTML = '';
                    document.getElementById('Password').style.borderColor = '';
                    document.getElementById('Password').style.color = '';
                }
            }
    </script>

    <?php
        if (isset($sessAlert) && isset($sessError))
        {
            if ($sessAlert != "" && $sessError != "")
            {
              echo "
              <div class='notification'>
                  <div class='content flex justify-between bg-red-300 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md' role='alert'>
                      <div class='flex'>
                          <div class='py-1'><svg class='fill-current h-6 w-6 text-red-500 mr-4' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'><path d='M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z'/></svg></div>
                          <div>
                          <p class='font-bold'>" . $sessAlert . "</p>
                          <p class='text-sm'>" . $sessError . "</p>
                          </div>
                      </div>
                      <div class='button'>
                          <button class='button-red' role='button'><a href='sellWithUs_signup.php'>Next</a></button>
                      </div>
                  </div>
              </div>";
            }
        }
    ?>
    <section class="imageCovered h-screen">
        <div class="px-6 h-full text-gray-800">
            <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
                <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12r mb-12 md:mb-0 rounded-lg py-16">
                    <form action="" method="POST" class="px-16 py-6 bg-white border-gray-300 border-2 rounded-lg">
                        <div class="flex flex-row items-center justify-center lg:justify-start">
                            <p class="text-2xl mb-0 mr-4 text-indigo-500">Sign Up with</p>
                            <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                class="inline-block p-3 bg-indigo-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out mx-1">
                                <!-- Facebook -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-4 h-4">
                                    <path fill="currentColor"
                                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                                </svg>
                            </button>

                            <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                class="inline-block p-3 bg-indigo-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out mx-1">
                                <!-- Twitter -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">

                                    <path fill="currentColor"
                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                                </svg>
                            </button>

                            <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                class="inline-block p-3 bg-indigo-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out mx-1">
                                <!-- Linkedin -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4">
                                    <path fill="currentColor"
                                        d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                                </svg>
                            </button>
                        </div>

                        <div
                            class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5">
                            <p class="text-center font-semibold mx-4 mb-0">Or</p>
                        </div>

                        <div class="form elements">
                            <div class="mb-2 text-lg heading">Personal Details</div>
                            <div class="mb-6 inputBox flex flex-row space-x-5">
                                <div class="inputBoxSmall">
                                    <input name="FirstName" type="text"
                                        class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none inputSmall"
                                        id="First Name" required/>
                                    <span>First Name</span>
                                </div>
                                <div class="inputBoxSmall">
                                    <input name="LastName" type="text"
                                        class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none inputSmall"
                                        id="Last Name" required>
                                    <span>Last Name</span>
                                </div>
                            </div>
                            <div class="mb-6 inputBox">
                                <input name="Username" type="text"
                                    class="form-control w-95per px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="Username" required/>
                                <span>Username</span>
                            </div>
                            <!-- Email input -->
                            <div class="mb-6 inputBox">
                                <input name="EmailAddress" type="mail"
                                    class="form-control w-95per px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="EmailAddress" required />
                                <span>Email Address</span>
                            </div>
    
                            <!-- Password input -->
                            <div class="inputBox flex flex-row space-x-5">
                                <div class="inputBoxSmall">
                                    <input name="Password" type="password"
                                    class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none inputSmall"
                                    id="Password" onfocusout="checkPasswords(); validatePassword()" required/>
                                    <span id="Password_text">Create Password</span>
                                </div>
                                
                                <div class="inputBoxSmall">
                                    <input name="Confirm_Password" type="password"
                                    class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none inputSmall" 
                                    id="Confirm_Password" onfocusout="checkPasswords()" required>
                                    <span id="Confirm_Password_text">Confirm Password</span>
                                </div>
                            </div>  
                            <div class="password_messages flex flex-col">
                                <span class="text-sm" id='P_message'></span>    
                                <span class="text-sm" id='message'></span>
                            </div>
                            <div class="mt-6 mb-6 inputBox">
                                <input name="MobileNumber" type="tel"
                                    class="form-control w-95per px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="MobileNumber" required />
                                <span>Mobile Number</span>
                            </div>
                            <div class="mt-6 mb-6 inputBox">
                                <textarea name="Address"
                                class="form-control w-95per h-28 px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                id="MobileNumber" required ></textarea>
                                <span>Address</span>
                            </div>
                            <div class="mt-6 mb-6 inputBox">
                                <input name="OrganizationName" type="text"
                                    class="form-control w-95per px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="OrganizationName" required/>
                                <span>Organization Name</span>
                            </div>
                            <div class="mb-2 text-lg heading mt-14">Bank Details</div>
                            <div class="mb-6 inputBox flex flex-row space-x-5">
                                <div class="inputBoxSmall">
                                    <input name="BankName" type="text"
                                        class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none inputSmall"
                                        id="Bank Name" required/>
                                    <span>Bank Name</span>
                                </div>
                                <div class="inputBoxSmall">
                                    <input name="BranchName" type="text"
                                        class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none inputSmall"
                                        id="Branch Name" required>
                                    <span>Branch Name</span>
                                </div>
                            </div>
                            <div class="mb-6 inputBox flex flex-row space-x-5">
                                <div class="inputBoxSmall">
                                    <input name="Currency" type="text"
                                        class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none inputSmall"
                                        id="Currency" required/>
                                    <span>Bank Currency</span>
                                </div>
                                <div class="inputBoxSmall">
                                    <input name="CurrencyCode" type="text"
                                        class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none inputSmall"
                                        id="CurrencyCode" required>
                                    <span>Bank Currency Code</span>
                                </div>
                            </div>
                            <div class="mt-6 mb-6 inputBox">
                                <input name="BankID" type="text"
                                    class="form-control w-95per px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="Bank ID" required/>
                                <span>Bank ID</span>
                            </div>
                            <div class="mb-2 text-lg heading mt-14">Branch Details</div>
                            <div class="mb-6 inputBox">
                                <input name="Address Line 1" type="text"
                                    class="form-control w-95per px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="AddressLine1" required />
                                <span>Address</span>
                            </div>
                            <div class="mb-6 inputBox">
                                <input name="Address Line 2" type="text"
                                    class="form-control w-95per px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="AddressLine2" required />
                                <span>Address Line 2</span>
                            </div>
                            <div class="mb-6 inputBox flex flex-row space-x-5">
                                <div class="inputBoxSmall">
                                    <input name="City" type="text"
                                        class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none inputSmall"
                                        id="City" required/>
                                    <span>City</span>
                                </div>
                                <div class="inputBoxSmall">
                                    <input name="Region" type="text"
                                        class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none inputSmall"
                                        id="Region" required>
                                    <span>Region</span>
                                </div>
                            </div>
                            <div class="mb-6 inputBox flex flex-row space-x-5">
                                <div class="inputBoxSmall">
                                    <input name="ZipCode" type="text"
                                        class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none inputSmall"
                                        id="ZipCode" required/>
                                    <span>Zip Code</span>
                                </div>
                                <div class="inputBoxSmall">
                                    <select name="Country" type="text"
                                        class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none inputSmall"
                                        id="Country" required>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AX">Aland Islands</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="BN">Brunei Darussalam</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo</option>
                                            <option value="CD">Congo, Democratic Republic of the Congo</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Cote D'Ivoire</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">Curacao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard Island and Mcdonald Islands</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN" selected>India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran, Islamic Republic of</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                            <option value="KR">Korea, Republic of</option>
                                            <option value="XK">Kosovo</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Lao People's Democratic Republic</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libyan Arab Jamahiriya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao</option>
                                            <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia, Federated States of</option>
                                            <option value="MD">Moldova, Republic of</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="AN">Netherlands Antilles</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PS">Palestinian Territory, Occupied</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RE">Reunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russian Federation</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="BL">Saint Barthelemy</option>
                                            <option value="SH">Saint Helena</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="MF">Saint Martin</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome and Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="CS">Serbia and Montenegro</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SX">Sint Maarten</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syrian Arab Republic</option>
                                            <option value="TW">Taiwan, Province of China</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania, United Republic of</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Viet Nam</option>
                                            <option value="VG">Virgin Islands, British</option>
                                            <option value="VI">Virgin Islands, U.s.</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                    </select>
                                    <span>Country</span>
                                </div>
                            </div>
                            <div class="mb-2 text-lg heading mt-14">Account Details</div>  
                            <div class="mb-6 inputBox">
                                <input name="Account Holder Name" type="text"
                                    class="form-control w-95per px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="AccountHolderName" required/>
                                <span>Account Holder Name</span>
                            </div>
                            <div class="mb-6 inputBox">
                                <input name="Account Number" type="text"
                                    class="form-control w-95per px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="Account Number" required/>
                                <span>Account Number</span>
                            </div>
                            <div class="mb-6 inputBox flex flex-row space-x-5">
                                <div class="inputBoxSmall">
                                    <input name="CIF No" type="text"
                                        class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none inputSmall"
                                        id="CIF_No" required/>
                                    <span>CIF No.</span>
                                </div>
                                <div class="inputBoxSmall">
                                    <input name="IFSC Code" type="text"
                                        class="form-control px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none inputSmall"
                                        id="IFSC_code" required>
                                    <span>IFSC Code</span>
                                </div>
                            </div>
                            <div class="mb-6 inputBox">
                                <input name="RegisteredMobileNo" type="tel"
                                    class="form-control w-95per px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="RegisteredMobileNo" required/>
                                <span>Registered Mobile No.</span>
                            </div>
                            <div class="mb-6 inputBox">
                                <input name="DOB" type="text" onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'"
                                    class="form-control w-95per px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="DOB" required/>
                                <span>D.O.B.</span>
                            </div>
                            <div class="mt-6 mb-6 inputBox">
                                <textarea name="Permanent Residence"
                                class="form-control w-95per h-28 px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                id="PermanentResidence" required ></textarea>
                                <span>Permanent Residence</span>
                            </div>
                            <div class="mb-6 inputBox">
                                <select name="AccountType"
                                    class="form-control w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none"
                                    id="RegisteredMobileNo" required>
                                        <option value="Current" selected>--Select--</option>
                                        <option value="Current">Current</option>
                                        <option value="Savings">Savings</option>
                                        <option value="Salary">Salary</option>
                                        <option value="Other">Other</option>
                                </select>
                                <span>Account Type</span>
                            </div>
                        </div>

                        <div class="text-center lg:text-left">
                            <!-- <a href="nextSign.html"> -->
                            <input type="submit"
                                class="inline-block px-7 py-3 bg-indigo-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out" value="Register" />
                                <p class="text-sm font-semibold mt-2 pt-1 mb-0">
                                    Already have an account ?
                                    <a href="login.php"
                                        class="text-red-600 hover:text-red-700 focus:text-red-700 transition duration-200 ease-in-out">Login</a>
                                </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body> 
</html> 