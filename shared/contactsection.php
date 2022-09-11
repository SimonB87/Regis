<div class="bg-info text-white padding-regular-topBottom">
    <div class="container text-center padding-small">
      <div class="row">
        <div class="col-12 padding-small">

        <?php
        if (isset($settings_organizerName)) {
          echo "<h2>Event organizer</h2> <div><p>" . $settings_organizerName . "<p></div>";
        }
        ?>


          <div class="row">

            <?php 
            if(isset( $itemsFooterLinks[0]->isAllowed )) { if ($itemsFooterLinks[0]->isAllowed == "on") { 
              echo "<div class='nav-item col-lg-6 col-md-6 col-sm-12 padding-small ' >
                      <p> <a class='nav-link text-white' href='" . $itemsFooterLinks[0]->weblink . "' class='text-white'> " . $itemsFooterLinks[0]->displayName . " " . $itemsFooterLinks[0]->textOdkazu . " </a> </p>
                    </div>";
              } 
            }

            if(isset( $itemsFooterLinks[1]->isAllowed )) { if ($itemsFooterLinks[1]->isAllowed == "on") { 
              echo "<div class='nav-item col-lg-6 col-md-6 col-sm-12 padding-small ' >
                      <p> <a class='nav-link text-white' href='" . $itemsFooterLinks[1]->weblink . "' class='text-white'> " . $itemsFooterLinks[1]->displayName . " " . $itemsFooterLinks[1]->textOdkazu . " </a> </p>
                    </div>";
              } 
            }

            if(isset( $itemsFooterLinks[2]->isAllowed )) { if ($itemsFooterLinks[2]->isAllowed == "on") { 
              echo "<div class='nav-item col-lg-6 col-md-6 col-sm-12 padding-small ' >
                      <p> <a class='nav-link text-white' href='" . $itemsFooterLinks[2]->weblink . "' class='text-white'> " . $itemsFooterLinks[2]->displayName . " " . $itemsFooterLinks[2]->textOdkazu . " </a> </p>
                    </div>";
              } 
            }

            if(isset( $itemsFooterLinks[3]->isAllowed )) { if ($itemsFooterLinks[3]->isAllowed == "on") { 
              echo "<div class='nav-item col-lg-6 col-md-6 col-sm-12 padding-small ' >
                      <p> <a class='nav-link text-white' href='" . $itemsFooterLinks[3]->weblink . "' class='text-white'> " . $itemsFooterLinks[3]->displayName . " " . $itemsFooterLinks[3]->textOdkazu . " </a> </p>
                    </div>";
              } 
            }

            ?>

          </div>

        </div>

        <div class="col-lg-2 col-md-3 col-sm-12 padding-small text-center-sm fs-5 align-left-md">
          Follow us on ...
        </div>

        <div class="col-lg-10 col-md-9 col-sm-12 padding-small text-center-sm align-right-md">
        
        <?php
            if(isset( $itemsFooterLinks[4]->isAllowed )) { if ($itemsFooterLinks[4]->isAllowed == "on") { 
              echo "<span class='social-item padding-small ' >
                      <a href='" . $itemsFooterLinks[4]->weblink . "' class='fs-3 padding-small nav-link text-white fa-brands " . $itemsFooterLinks[4]->iconFontAwesome . " '> " . $itemsFooterLinks[4]->textOdkazu . " </a>
                    </span> <span class='padding-small'></span>";
              } 
            }

            if(isset( $itemsFooterLinks[5]->isAllowed )) { if ($itemsFooterLinks[5]->isAllowed == "on") { 
              echo "<span class='social-item padding-small ' >
                      <a href='" . $itemsFooterLinks[5]->weblink . "' class='fs-3 padding-small nav-link text-white fa-brands " . $itemsFooterLinks[5]->iconFontAwesome . " '> " . $itemsFooterLinks[5]->textOdkazu . " </a>
                    </span> <span class='padding-small'></span>";
              } 
            }

            if(isset( $itemsFooterLinks[6]->isAllowed )) { if ($itemsFooterLinks[6]->isAllowed == "on") { 
              echo "<span class='social-item padding-small ' >
                      <a href='" . $itemsFooterLinks[6]->weblink . "' class='fs-3 padding-small nav-link text-white fa-brands " . $itemsFooterLinks[6]->iconFontAwesome . " '> " . $itemsFooterLinks[6]->textOdkazu . " </a>
                    </span> <span class='padding-small'></span>";
              } 
            }

            if(isset( $itemsFooterLinks[7]->isAllowed )) { if ($itemsFooterLinks[7]->isAllowed == "on") { 
              echo "<span class='social-item padding-small ' >
                      <a href='" . $itemsFooterLinks[7]->weblink . "' class='fs-3 padding-small nav-link text-white fa-brands " . $itemsFooterLinks[7]->iconFontAwesome . " '> " . $itemsFooterLinks[7]->textOdkazu . " </a>
                    </span> <span class='padding-small'></span>";
              } 
            }

            if(isset( $itemsFooterLinks[8]->isAllowed )) { if ($itemsFooterLinks[8]->isAllowed == "on") { 
              echo "<span class='social-item padding-small ' >
                      <a href='" . $itemsFooterLinks[8]->weblink . "' class='fs-3  padding-small nav-link text-white fa-brands " . $itemsFooterLinks[8]->iconFontAwesome . " '> " . $itemsFooterLinks[8]->textOdkazu . " </a>
                    </span> <span class='padding-small'></span>";
              } 
            }

        ?>

        </div>

      </div>
    </div>
  </div>