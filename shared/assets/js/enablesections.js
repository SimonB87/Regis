document.addEventListener("DOMContentLoaded", function(event) { 
  const notMainSectionsEnabled = document.querySelectorAll(".checkbox-enablesection");
  notMainSectionsEnabled.forEach(function(sectionCheckbox, sectionIndex) {
    const isChecked = sectionCheckbox.hasAttribute("checked");
    
    if ((!(isChecked == true)) && (sectionIndex > 0)) {

      const sectionInputs = document.querySelectorAll(".section-form-" + sectionIndex + " input");

      sectionInputs.forEach(function(item) {
        item.setAttribute("disabled", "");
      });

    }
  });

});

const checkboxSection = document.querySelectorAll(".checkbox-enablesection");
checkboxSection.forEach(function(checkboxSectionItem, index) { 

  checkboxSectionItem.addEventListener("click", function() {
    const itemNotChecked = checkboxSection[index].hasAttribute("checked");
    const idSection = checkboxSectionItem.attributes["aria-rowindex"].value;

    const wholeSubSectionInputs = document.querySelectorAll(".section-form-" + idSection + " input");
    wholeSubSectionInputs.forEach(function(input) {
      const isDisabled = input.hasAttribute("disabled");
      if (isDisabled == true) {
        input.removeAttribute("disabled");
      } else {
        input.setAttribute("disabled", "");
      }
    });

  });
});

const checkboxSubsectionsSection = document.querySelectorAll(".checkbox__wholeSubSectionChoosen");
checkboxSubsectionsSection.forEach(function(elem, index) { 
  elem.addEventListener("click", function() {
    const id = elem.attributes["aria-rowindex"].value;
    
    const sectionItems = document.querySelectorAll(".gov-form-subSection__" + id + " input[type=checkbox]");
    sectionItems.forEach(function(checkbox){
      const isCheckboxDisabled = checkbox.hasAttribute("disabled");
      if ((isCheckboxDisabled) == true) {
        checkbox.removeAttribute("disabled");
      } else {
        checkbox.setAttribute("disabled", "");
      }
    });
  });
});