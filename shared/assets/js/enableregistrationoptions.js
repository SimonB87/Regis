function enableRegistrationOptions(source, type) { 
  let getValue = "";
  let sourceValue = document.getElementById(source).value;

  let allowLeader = null;
  let allowFollower = null;

  if (type == "dancerKind") {

    getValue ="passType";


    if (sourceValue == "1 - Early birds pass leader/follower") {

      if ( eventState.earlyBirdsSingles.leader == false ) {
        allowLeader = false;
      }

      if ( eventState.earlyBirdsSingles.follower == false ) {
        allowFollower = false;
      }

    } else if (sourceValue == "3 - Fullpass leader/follower") {

      if ( eventState.regularSingles.leader == false ) {
        allowLeader = false;
      }

      if ( eventState.regularSingles.follower == false ) {
        allowFollower = false;
      }

    } else if (sourceValue == "5 - Partypass leader/follower") {

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

      if ( eventState.specialType1Singles.leader == false ) {
        allowLeader = false;
      }

      if ( eventState.specialType1Singles.follower == false ) {
        allowFollower = false;
      }

    } else if (sourceValue == "3 - special type2 single") {

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
  }


}

