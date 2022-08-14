"use strict";
document.addEventListener("DOMContentLoaded", function (event) {
  hideEmptyTickets();
});

function enableRegistrationOptions(source, type) { 
  let getValue = "";
  let sourceValue = document.getElementById(source).value;

  let allowLeader = null;
  let allowFollower = null;
  let allowCouple = null;

  if (type == "dancerKind") {

    getValue ="passType";


    if (sourceValue == "1 - Early birds pass leader/follower") {
      allowCouple = false;

      if ( eventState.earlyBirdsSingles.leader == false ) {
        allowLeader = false;
      }

      if ( eventState.earlyBirdsSingles.follower == false ) {
        allowFollower = false;
      }

    } else if (sourceValue == "3 - Fullpass leader/follower") {
      allowCouple = false;

      if ( eventState.regularSingles.leader == false ) {
        allowLeader = false;
      }

      if ( eventState.regularSingles.follower == false ) {
        allowFollower = false;
      }

    } else if (sourceValue == "5 - Partypass leader/follower") {
      allowCouple = false;

      if ( eventState.partySingles.leader == false ) {
        allowLeader = false;
      }

      if ( eventState.partySingles.follower == false ) {
        allowFollower = false;
      }

    }

  } else if (type == "otherDancerKind") {

    getValue ="otherTicketOptions";

    if (sourceValue == "1 - special type1 single") {
      allowCouple = false;

      if ( eventState.specialType1Singles.leader == false ) {
        allowLeader = false;
      }

      if ( eventState.specialType1Singles.follower == false ) {
        allowFollower = false;
      }

    } else if (sourceValue == "3 - special type2 single") {
      allowCouple = false;

      if ( eventState.specialType2Singles.leader == false ) {
        allowLeader = false;
      }

      if ( eventState.specialType2Singles.follower == false ) {
        allowFollower = false;
      }

    }

  }
  
  if ( sourceValue.length > 1 ) {
    document.getElementById(type).removeAttribute("disabled");
    const allOptions = document.querySelectorAll("#" + type + " option");

    allOptions.forEach((element) => {
      element.classList.remove("hidden");
    });

    if ( allowLeader == false ) {
      document.querySelector("#" + type + " option:nth-child(2)").classList.add("hidden");
    }
    if ( allowFollower == false ) {
      document.querySelector("#" + type + " option:nth-child(3)").classList.add("hidden");
    }
    if ( allowCouple == false ) { 
      document.querySelector("#" + type + " option:nth-child(4)").classList.add("hidden");
    }
  }


}

function hideEmptyTickets() {

  const passTypeOptionsElements = document.querySelectorAll("#passType options");
  const otherTicketOptionsElements = document.querySelectorAll("#passType options");

  passTypeOptionsElements.forEach((element, index) => {
    element.classList.remove("hidden");

    if ( 
      ( (eventState.earlyBirdsSingles.follower == false) && (eventState.earlyBirdsSingles.leader == false) ) ||
      ( (eventState.partySingles.follower == false) && (eventState.partySingles.leader == false) ) ||
      ( (eventState.partySingles.follower == false) && (eventState.partySingles.leader == false) )
      ) {
        element.classList.add("hidden");
      }

  });

  otherTicketOptionsElements.forEach((element, index) => {
    element.classList.remove("hidden");

    if (  
      ( (eventState.specialType1Singles.follower == false) && (eventState.specialType1Singles.leader == false) ) ||
      ( (eventState.specialType2Singles.follower == false) && (eventState.specialType2Singles.leader == false) )
       ) {
        element.classList.add("hidden");
       }
  });

}