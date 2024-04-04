const btn_filter = document.getElementById('filtre');
const content_filter = document.getElementById('content-filter');

btn_filter.addEventListener("click", filter = () =>  {
    content_filter.classList.toggle("d-flex")
})


const descriptionCarte = document.querySelector('.carte_description')
const showCarte = document.getElementById('donald')
const closeCarte = document.querySelector('.close')


showCarte.addEventListener('click', () => {
    descriptionCarte.style.display = "flex";
 })

closeCarte.addEventListener('click', () => {
    descriptionCarte.style.display = "none";
})


const carte = document.querySelector('.cartes')

carte.addEventListener('click', function(e) {
    console.log('pas de hover')
    Event.preventDefault
})