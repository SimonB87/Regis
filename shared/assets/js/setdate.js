const elDate = document.getElementById("registrationdate");

const currentdate = new Date(); 
const datetime = "Datum: " + currentdate.getDate() + ". "
                + (currentdate.getMonth()+1)  + ". " 
                + currentdate.getFullYear() + " - "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();

elDate.value = datetime;