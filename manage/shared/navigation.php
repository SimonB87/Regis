<nav class="navbar navbar-expand-xl navbar-dark bg-gray underline-white sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://www.mauritiuselvira.com/">
        <img src="https://uploads-ssl.webflow.com/5e18aa9988b6fcc053b834a9/5e79e6b7afefe444bb6e516a_page-01__1_-removebg-preview.png" sizes="226px" srcset="https://uploads-ssl.webflow.com/5e18aa9988b6fcc053b834a9/5e79e6b7afefe444bb6e516a_page-01__1_-removebg-preview-p-500.png 500w, https://uploads-ssl.webflow.com/5e18aa9988b6fcc053b834a9/5e79e6b7afefe444bb6e516a_page-01__1_-removebg-preview-p-800.png 800w, https://uploads-ssl.webflow.com/5e18aa9988b6fcc053b834a9/5e79e6b7afefe444bb6e516a_page-01__1_-removebg-preview.png 866w" alt="mauritiuselvira.com logo" class="logo" width="226">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse full-width-lg" id="navbarColor01">
        <ul class="navbar-nav justify-content-center full-width">
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Admin page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../index.php">Show event</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Event set-up
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="createneweventsetupmain.php">Create a new event</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="eventsetupmain.php">Existing event main set up</a></li>
              <li><a class="dropdown-item" href="#">Existing event description</a></li>
              <li><a class="dropdown-item" href="#">Existing event register form </a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registrations.php">Registrations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.mauritiuselvira.com/contact">Contact</a>
          </li>

<?php
        if (isset($_SESSION['username'])) {
          if ($_SESSION['user_level'] === "9") {
            echo "<li class='nav-item'><a href='accounts.php' class='nav-link'>
              Accounts
            </a></li>";
          }
        } else {
        }

        if (isset($_SESSION['username'])) {
          echo "<li class='nav-item'><a href='handlers\logout.php' class='nav-link'>
                  Logout
                </a></li>";
        } else {
          
        }
?>

        </ul>
        
      </div>
    </div>
  </nav>