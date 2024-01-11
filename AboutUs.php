<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About-US</title>
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
  </head>
  <body>
    <!-- Navbar -->
    <!-- ============================================================================================================================================== -->
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
            <li class="nav-item">
              <a
                class="nav-link nav-item-middle active"
                aria-current="page"
                href="/home.php"
                >Home</a
              >
            </li>
            <li class="nav-item-middle dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Want to Donate</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/campSchedule.php">Schedule Blood Donation Camp</a></li>
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
            <a  href="/signup.php" class="btn btn-danger btn-lg px-4 me-md-2 d-flex align-items-center justify-content-center" >
              Sign up
            </a>
            <a
              href="/signin.php" class="text-dark text-decoration-none d-flex align-items-center justify-content-center mt-3 ms-xl-4 mt-xl-0" >Sign in</a>
          </div>
        </div>
      </div>
    </nav>

<!-- =============================================================================================================================================================================================================================================================== -->

    <div class="shadow-sm">
        <div class="container col-xxl-8 px-4 py-5 hero">
            <div class="row align-items-center g-5 mb-5">
                <h1 class="headline display-5 fw-bold lh-1 mb-3 text-center text-lg-start">About Us</h1>
                <div class="col-lg-6 mt-xl-0">
                    <p class="lead text-center text-lg-start">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias maxime pariatur quisquam repellendus illo voluptate laudantium eius amet nulla blanditiis!
                    </p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center justify-content-lg-start">
                        
                       
                    </div>
                </div>
               
            </div>
        </div>
    </div>

    <!-- ================================================================================================================================================= -->
 
   
</section>
<footer class="bg-dark">
<div class="container d-flex flex-column align-items-center py-5">
    <a href="/home.php"><h1 style="color: #ffffff; text-decoration: none;">RessQ</h1></a>

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

    <span class="text-white mt-3">Follow Us On:</span>
    <div class="findUsOnSocialMedia bg-dark d-flex justify-content-end align-items-center">
        <div class="social-btns">
            <a class="btn facebook" href="https://www.facebook.com/linatabara3" target="_blank">
                <i class="fa-brands fa-facebook-f fa-2xl" style="color: #ffffff;"></i></a>
            <a class="btn instagram" href="https://www.instagram.com/linatabara3/" target="_blank">
                <i class="fa-brands fa-instagram fa-2xl" style="color: #ffffff;"></i>
                </a>

        </div>
    </div>

</div>

</footer>






<link rel="modulepreload" href="https://linatabara3.com/build/assets/app.375cedd6.js" /><script type="module" src="https://linatabara3.com/build/assets/app.375cedd6.js"></script>        <link rel="modulepreload" href="https://linatabara3.com/build/assets/donorsSearchFormValidation.0972e794.js" /><link rel="modulepreload" href="https://linatabara3.com/build/assets/gettingDairas.549e3cbc.js" /><link rel="modulepreload" href="https://linatabara3.com/build/assets/tsPracticles.05139906.js" /><link rel="modulepreload" href="https://linatabara3.com/build/assets/tsPracticlesEngine.76e32d40.js" /><script type="module" src="https://linatabara3.com/build/assets/donorsSearchFormValidation.0972e794.js"></script><script type="module" src="https://linatabara3.com/build/assets/gettingDairas.549e3cbc.js"></script><script type="module" src="https://linatabara3.com/build/assets/tsPracticles.05139906.js"></script><script type="module" src="https://linatabara3.com/build/assets/tsPracticlesEngine.76e32d40.js"></script>


</body>
</html>