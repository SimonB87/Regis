<div class="bg-white padding-regular">
  <div class="container">
    <div class="row padding-regular">
      <div class="col-12 text-center">
        <h1 class="padding-regular text-info">
          <strong>

          <?php 
            if ($settings_appUnderDevelopment === "1 - on") { 
              echo "App is under development";
            } elseif ($eventIsOpen = false) {
              echo "There is no open event";
            }
          ?>

          </strong>
        </h1>
      </div>
      <div class="col-12">
        <h2 class="padding-small">

          <?php 
            if ($settings_appUnderDevelopment === "1 - on") { 
              echo "Registration form under development";
            } elseif ($eventIsOpen = false) {
              echo "Wait for App to be re-opened";
            }
          ?>

        </h2>

      </div>
    </div>
  </div>
</div>
