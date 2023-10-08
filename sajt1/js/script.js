var ime = document.getElementById("name");
var imejl = document.getElementById("email");
var poruka = document.getElementById("message");

var dugme = document.getElementById("dugme");
dugme.addEventListener("click", function(e) {
    e.preventDefault();
    alert("Ime: " + ime.value + "\n" +"E-adresa: " + imejl.value + "\n" +"Poruka: " + poruka.value);
});


