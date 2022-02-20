function prefillForm() {
  const inputText = document.querySelectorAll("input[type=text]");
  const inputNumber = document.querySelectorAll("input[type=number]");
  const inputDate = document.querySelectorAll("input[type=date]");
  const inputCheckbox = document.querySelectorAll("input[type=checkbox]");

  inputText.forEach(function(element) { 
    if (element.classList.contains('prefill-auto') == false) {

      element.value = randomString(9);

      function randomString(length) {
        let result           = '';
        const characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        const charactersLength = characters.length;
        for ( let i = 0; i < length; i++ ) {
          result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
       return ("Demo A" + result);
      }
      
    }
   });

  inputNumber.forEach(function(element) { 
    if (element.classList.contains('prefill-auto') == false) {
      const decimals = [10,100,300,700,1000];
      const randomInt = (Math.floor(Math.random() * decimals.length))
      element.value = (Math.floor(Math.random() * decimals[randomInt])); 
    }
  });

  inputDate.forEach(function(element) { 
    if (element.classList.contains('prefill-auto') == false) {
      const year = (Math.floor(Math.random() * 500)) + 2000;
      const month = (Math.floor(Math.random() * 8)) + 1;
      const day = (Math.floor(Math.random() * 8)) + 1;
      element.value = year + "-0" + month + "-0" + day; 
    }
  });

  inputCheckbox.forEach(function(element) { 
    if (element.classList.contains('prefill-auto') == false) {
      element.setAttribute("checked", "true"); 
    }
  });
}