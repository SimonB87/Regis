  <nav class="navbar navbar-expand-xl navbar-dark bg-dark underline-white">
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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Lessons
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="https://www.mauritiuselvira.com/bachata">Bachata</a></li>
              <li><a class="dropdown-item" href="https://www.mauritiuselvira.com/salsa">Salsa</a></li>
              <li><a class="dropdown-item" href="https://www.mauritiuselvira.com/wedding-dance">Wedding dance</a></li>
              <li><a class="dropdown-item" href="https://www.mauritiuselvira.com/individual-lessons">Individual lesson</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="https://www.mauritiuselvira.com/gift-voucher">Gift voucher</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.mauritiuselvira.com/prices">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.mauritiuselvira.com/about-us">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.mauritiuselvira.com/contact">Contact</a>
          </li>

          <?php
          if ( isset($_SESSION['username']) == true) {
            echo "<li class='nav-item'>
                    <a class='nav-link' href='manage/login.php'>Login</a>
                  </li>";
          }
          ?>

        </ul>
        
      </div>
    </div>
  </nav>