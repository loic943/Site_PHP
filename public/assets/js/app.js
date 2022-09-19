const toggle = document.querySelector(".toggle");
const onglets = document.querySelector(".onglets");

toggle.addEventListener('click', function(){
    onglets.classList.toggle("visible");
})
