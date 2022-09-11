  <nav class="navbar navbar-expand-xl navbar-dark bg-dark underline-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://www.mauritiuselvira.com/">
        <img src="assets/mauritiuselvira_logo.png" sizes="226px" srcset="https://uploads-ssl.webflow.com/5e18aa9988b6fcc053b834a9/5e79e6b7afefe444bb6e516a_page-01__1_-removebg-preview-p-500.png 500w, https://uploads-ssl.webflow.com/5e18aa9988b6fcc053b834a9/5e79e6b7afefe444bb6e516a_page-01__1_-removebg-preview-p-800.png 800w, https://uploads-ssl.webflow.com/5e18aa9988b6fcc053b834a9/5e79e6b7afefe444bb6e516a_page-01__1_-removebg-preview.png 866w" alt="mauritiuselvira.com logo" class="logo" width="226">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse full-width-lg" id="navbarColor01">
        <ul class="navbar-nav justify-content-center full-width">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>

          <?php
            if(isset( $itemsNavLinks[0]->itemAllowed )) { if ($itemsNavLinks[0]->itemAllowed == "on") { 
              echo "<li class='nav-item'>
                      <a class='nav-link' target='_blank' href='" . $itemsNavLinks[0]->itemWebLink . "'> " . $itemsNavLinks[0]->displayName . " </a>
                    </li>";
              } 
            }

            if(isset( $itemsNavLinks[1]->itemAllowed )) { if ($itemsNavLinks[1]->itemAllowed == "on") { 
              echo "<li class='nav-item'>
                      <a class='nav-link' target='_blank' href='" . $itemsNavLinks[1]->itemWebLink . "'> " . $itemsNavLinks[1]->displayName . " </a>
                    </li>";
              }
            }

            if(isset( $itemsNavLinks[2]->itemAllowed )) { if ($itemsNavLinks[2]->itemAllowed == "on") { 
              echo "<li class='nav-item'>
                      <a class='nav-link' target='_blank' href='" . $itemsNavLinks[2]->itemWebLink . "'> " . $itemsNavLinks[2]->displayName . " </a>
                    </li>";
              }
            }

            if(isset( $itemsNavLinks[3]->itemAllowed )) { if ($itemsNavLinks[3]->itemAllowed == "on") { 
              echo "<li class='nav-item'>
                      <a class='nav-link' target='_blank' href='" . $itemsNavLinks[3]->itemWebLink . "'> " . $itemsNavLinks[3]->displayName . " </a>
                    </li>";
              }
            }

            if(isset( $itemsNavLinks[4]->itemAllowed )) { if ($itemsNavLinks[4]->itemAllowed == "on") { 
              echo "<li class='nav-item'>
                      <a class='nav-link' target='_blank' href='" . $itemsNavLinks[4]->itemWebLink . "'> " . $itemsNavLinks[4]->displayName . " </a>
                    </li>";
              }
            }

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