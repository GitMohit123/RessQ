<!doctype html>
<html lang="fr" dir="ltr">
<head>
    <title>Register</title>

    
    <script src="https://kit.fontawesome.com/decdc0c2fa.js" crossorigin="anonymous"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <style>
      .nav-item-middle{
          border-right: 2px solid rgb(221, 221, 221);
      }
  </style>

<body>
  <nav
  class="navbar navbar-expand-xl navbar-light bg-white shadow-sm sticky-lg-top"
>
  <div class="container">
    <a class="navbar-brand d-flex" href="/home.php">
      <h1>RessQ</h1>
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarToggler"
      aria-controls="navbarToggler"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div
      class="collapse navbar-collapse justify-content-between"
      id="navbarToggler"
    >
      <div class="languageSwitcher text-center"></div>

      <ul class="navbar-nav mb-2 mb-lg-0 fw-bold">
        <li class="nav-item-middle">
          <a
            class="nav-link active"
            aria-current="page"
            href="/home.php"
            >Home</a
          >
        </li>
        <li class="nav-item-middle dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Want to Donate</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/campSchedule.php">Blood Donation Camp Schedule</a></li>
            <li><a class="dropdown-item" href="/signupInfo.php">Add Donor</a></li>
            <li><a class="dropdown-item" href="/addBloodBank.php">Add Blood Bank</a></li>
          </ul>
      </li>
      <li class="nav-item-middle dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Looking for Blood</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/bloodAvailable.php">Blood Available</a></li>
          </ul>
      </li>
        </li>
        <li class="nav-item">
                <a href="/AboutUs.php" style="text-decoration: none;">
                <button
                type="button"
                class="nav-link btn btn-link"
                data-bs-toggle="modal"
                data-bs-target="#contactModal"
              >
              About
              </button>
              </a>
            </li>
      </ul>

      <div class="d-flex flex-column flex-xl-row">
        <a
          href="/signup.php"
          class="btn btn-danger btn-lg px-4 me-md-2 d-flex align-items-center justify-content-center"
        >
          Sign up
        </a>
        <a
          href="/signin.php"
          class="text-dark text-decoration-none d-flex align-items-center justify-content-center mt-3 ms-xl-4 mt-xl-0"
          >Sign in</a
        >
      </div>
    </div>
  </div>
</nav>


<div class="container" style=" width: 50%;">

    <div class="formFieldsWrapper m-4" >
        
        <form class="row g-3" action="" method="post">
            <div class="col-md-6">
              <label for="inputfname" class="form-label">First Name</label>
              <input type="text" class="form-control" id="inputfname" name="firstName"/>
            </div>
            <div class="col-md-6">
              <label for="inputlname" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="inputlname" name="lastName"/>
            </div>
            <div class="col-md-6">
              <label for="inputdob" class="form-label">DOB</label>
              <input type="date" class="form-control" id="inputdob" name="dob" />
            </div>
            <div class="col-md-6">
              <label for="inputtel" class="form-label">Phone No.</label>
              <input type="tel" class="form-control" id="inputtel" name="phonenumber"/>
            </div>
            <div class="col-md-6">
              <label for="inputemail" class="form-label">Email ID</label>
              <input type="email" class="form-control" id="inputemail" name="emailid"/>
            </div>
            <div class="col-md-3">
              <label for="inputbg" class="form-label" >Blood Group</label>
              <select id="inputState" class="form-select" name="bg">
                <option selected>Choose...</option>
                <option>A+</option>
                <option>O+</option>
                <option>B+</option>
                <option>AB+</option>
                <option>A-</option>
                <option>O-</option>
                <option>B-</option>
                <option>AB-</option>
              </select>
            </div>
            <div class="col-md-3">
              <label for="inputgender" class="form-label">Gender</label>
              <select id="inputState" class="form-select" name="gender">
                <option selected>Choose...</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputid" class="form-label">Goverment ID </label>
              <select id="inputState" class="form-select" name="govtid">
                <option selected>Choose...</option>
                <option>Adhaar Card</option>
                <option>Pan Card</option>
                <option>Driving License</option>
                <option>Voter Id Card</option>
              </select>
            </div>
    
            <div class="col-md-6">
              <label for="inputidno" class="form-label">Goverment ID No.</label>
              <input type="text" class="form-control" id="inputeidno" name="govtno" />
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input
                type="text"
                class="form-control"
                id="inputAddress"
                placeholder="1234 Main St"
                name="address"
              />
            </div>
    
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="inputCity" name="city" />
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">State</label>
              <select id="inputState" class="form-select" name="state">
                <option value="SelectState">Select State</option>
                <option value="Andra Pradesh">Andra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madya Pradesh">Madya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Orissa">Orissa</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttaranchal">Uttaranchal</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="West Bengal">West Bengal</option>
                <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadeep">Lakshadeep</option>
                <option value="Pondicherry">Pondicherry</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip" name="zip" />
            </div>
            <div class="col-12">
              <label for="exampleFormControlTextarea1" class="form-label"
                >Any Previous Medical Condition ?</label
              >
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="3"
                name="text"
              ></textarea>
            </div>
    
            <span>
              <div class="col-12">
                <p>Are willing to donate blood ?</p>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault"
                    id="flexRadioDefault2"
                    checked
                  />
                  <label class="form-check-label" for="flexRadioDefault2">
                    Yes
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault"
                    id="flexRadioDefault1"
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                      No
                  </label>
                </div>
    
                
              </div>
            </span>
    
            
            <input type="submit" class="btn btn-danger" name="Register">
        </form>
    </div>
</div>

    <footer class="bg-dark">
    <div class="container d-flex flex-column align-items-center py-5">
        <a href="https://linatabara3.com/fr"><img src="https://linatabara3.com/imgs/linatabara3LogoAsciiWhite.png" alt="Linatabara3 Logo" height="40px"></a>

        <div class="d-flex flex-column flex-sm-row align-items-center">
            <a class="footerLink text-decoration-none text-white px-3 mt-4 mt-sm-3" href="/home.php">Accueil</a>
            <a class="footerLink text-decoration-none text-white px-3 mt-3" href="/signin.php">Blood Donor</a>
            <a class="footerLink text-decoration-none text-white px-3 mt-3" href="/bloodAvailable.php">Need For Blood</a>
        </div>

        <div class="w-75">
            <p class="text-white mt-3 text-center fw-bold">
                Ce site algÃ©rien aide ceux qui ont besoin de sang Ã  trouver des donneurs en toute simplicitÃ© prÃ¨s de chez eux. Ce site est une "Sada9a Jarya", merci de prier pour son propriÃ©taire et tous ceux qui ont aidÃ© Ã  y parvenir avec misÃ©ricorde et pardon.
            </p>
        </div>

        <span class="text-white">---</span>

        <div class="w-75">
            <p class="text-white mt-3 text-center">
                Le code de cette platfom est open source, vous pouvez le trouver sur Github.
            </p>

            <div class="social-btns">
                <a class="btn github" href="https://github.com/theHocineSaad/linatabra3" rel="nofollow">
                    <svg class="fa-brands fa-github" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
                </a>

            </div>
        </div>

        <span class="text-white mt-3">Suivez nous sur:</span>
        <div class="findUsOnSocialMedia bg-dark d-flex justify-content-end align-items-center">
            <div class="social-btns">
                <a class="btn facebook" href="https://www.facebook.com/linatabara3" target="_blank">
                    <svg class="fa-brands fa-facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
                </a>
                <a class="btn instagram" href="https://www.instagram.com/linatabara3/" target="_blank">
                    <svg class="fa-brands fa-instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                </a>

            </div>
        </div>

    </div>

</footer>






    <link rel="modulepreload" href="https://linatabara3.com/build/assets/app.375cedd6.js" /><script type="module" src="https://linatabara3.com/build/assets/app.375cedd6.js"></script>        <link rel="modulepreload" href="https://linatabara3.com/build/assets/gettingDairas.549e3cbc.js" /><link rel="modulepreload" href="https://linatabara3.com/build/assets/registerPage.41a116f3.js" /><script type="module" src="https://linatabara3.com/build/assets/gettingDairas.549e3cbc.js"></script><script type="module" src="https://linatabara3.com/build/assets/registerPage.41a116f3.js"></script>    <script src="https://www.google.com/recaptcha/api.js?hl=fr" async defer></script>

</body>

</html>


<?php

      if($_POST['Register']){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $DOB = $_POST['dob'];
        $Phonenumber = $_POST['phonenumber'];
        $email = $_POST['emailid'];
        $Bloodgroup = $_POST['bg'];
        $gender = $_POST['gender'];
        $Govtid = $_POST['govtid'];
        $Govtno = $_POST['govtno'];
        $Address = $_POST['address'];
        $City = $_POST['city'];
        $State = $_POST['state'];
        $Zip = $_POST['zip'];
        $textarea = $_POST['text'];
        $flexradio = $_POST['flexRadioDefault'];

        $query = "INSERT INTO signupid values('$firstName','$lastName','$DOB','$Phonenumber','$email','$Bloodgroup','$gender','$Govtid','$Govtno','$Address','$City','$State','$Zip','$textarea','$flexradio')";
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "bloodbank";

        $connection = new mysqli($servername,$username,$password,$database);
        if($connection->connect_error){
            die("Connection failed: " . $connection->connect_error);
        }
        $data = mysqli_query($connection,$query);

        if($data){
            echo "Data Inserted into db";
        }
        else{
            echo "Failed";
        }

      }
?>