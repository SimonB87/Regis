<footer class="bg-dark padding-regular-topBottom">

  <div class="text-center padding-small">
    <a class="navbar-brand" href="https://www.mauritiuselvira.com/">
      <img src="https://uploads-ssl.webflow.com/5e18aa9988b6fcc053b834a9/5e79e6b7afefe444bb6e516a_page-01__1_-removebg-preview.png" sizes="226px" srcset="https://uploads-ssl.webflow.com/5e18aa9988b6fcc053b834a9/5e79e6b7afefe444bb6e516a_page-01__1_-removebg-preview-p-500.png 500w, https://uploads-ssl.webflow.com/5e18aa9988b6fcc053b834a9/5e79e6b7afefe444bb6e516a_page-01__1_-removebg-preview-p-800.png 800w, https://uploads-ssl.webflow.com/5e18aa9988b6fcc053b834a9/5e79e6b7afefe444bb6e516a_page-01__1_-removebg-preview.png 866w" alt="mauritiuselvira.com logo" class="logo" width="226">
    </a>
  </div>
  <div>

    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="https://www.mauritiuselvira.com/contact">Contact us</a>
      </li>

      <?php

      if (isset($settings_adminEmail )) {
        echo "<li class='nav-item'>
              <a class='nav-link' href='mailto:".$settings_adminEmail ."'>Mail us</a>
            </li>";
      }

      ?>

    </ul>

  </div>

  <div class="text-center padding-small copyright">
    COPYRIGHT © <a href="http://www.simonburyan.cz/" class="weblink text-white"> SimonBuryan.cz (App developer) </a> & MAURITIUS & ELVIRA. ALL RIGHTS RESERVED.
  </div>

</footer>