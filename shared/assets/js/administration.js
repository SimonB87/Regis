"use strict";
function adminUpdateUserRights(id) {

  // AJAX function for updattig user rights
  const selector_userRight = "user_" + id + "_user_right";
  const selector_userEmail = "user_" + id + "_emailaddress";
  const selector_status = "user_" + id + "_status";

  const userRight = document.getElementById( selector_userRight ).value;
  const userEmail = document.getElementById( selector_userEmail).innerText;
  const status = document.getElementById( selector_status );
  const countOfAdmins = countAdmins("#app-users", ".user_right");

  status.innerText = "Updating ...";

  status.classList.remove("hidden");

  if (countOfAdmins == false) {

    status.innerText = "You can not save this option.";

  } else {

    $.ajax({
      url: "administration_updateuser.php",
      type: "POST",
      data: {
        messagename: "administration_updateuser",
        usermail: userEmail,
        userright: userRight
      },
      error: function (xhr, status, error) { // Error case
        console.error(xhr);
        console.error(status);
        console.error(error);
        status.innerText = (status + " - " + error);
      },
      cache: false,
      success: function (dataResult) {
        var dataResult = JSON.parse(dataResult);
        if (dataResult.statusCode == 200) {
          status.innerText = (dataResult.content + " " + dataResult.postMail);
        }
        else if (dataResult.statusCode == 418) {
          status.innerText = ("Error occured - code 418");
        }
        else if (dataResult.statusCode == 404) {
          status.innerText = ("Error occured - code 404");
        }
      }
    });

  }

  function countAdmins(tableId, userRightClass) {
    const users = document.querySelectorAll(`${tableId} ${userRightClass}`);
    let right9 = 0;

    users.forEach((element, index) => { 
        let rightValue = element.value; 
        if (rightValue == 9) { 
          right9++; 
        } 
    });

    if ( (right9 >= 1) && (right9 <= 2) ){
      return true;
    } else {
      return false;
    }
  }

}