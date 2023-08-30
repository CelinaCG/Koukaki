// Vidéo bannière

var video = document.querySelector('#background-video');

// Menu burger

var sidenav = document.querySelector('#mySidenav');
var openBtn = document.querySelector('.menu_burger');
var closeBtn = document.querySelector('.croix_burger');
let logo = document.querySelector('.petit-logo');


// Ouverture menu burger
openBtn.addEventListener('click', function(){
  // Ajout du style pour modifier propriétés du style de la classe et permettre la bascule du display "none" à "flex".
  document.querySelector('.burger').style.display="flex";
  // Disparition du menu burger
  document.querySelector('.menu_burger').style.display="none";
  // Apparition de la croix
  document.querySelector('.croix_burger').style.display="flex";
 

});

// Fermeture menu burger
closeBtn.addEventListener('click', function(){
  // Disparition du menu déroulant
  document.querySelector('.burger').style.display="none";
  // Disparition de l'image de la croix
  document.querySelector('.croix_burger').style.display="none";
  // Apparition de l'image du menu burger
  document.querySelector('.menu_burger').style.display="flex";
  
});

// Scroll

// Experimentation Observer

// Nuages

// Créer l'Observer
const observer = new IntersectionObserver(entries => {
  // Lecture des entrées
  entries.forEach(entry => {
    const nuage = entry.target.querySelector('.cloud');
   
    // 'entry' est l'objet donné à nous par l'Observer
    if(entry.isIntersecting) {
      // Animation quand c'est visible
      nuage.classList.add('cloud-animation');
   
      return;
    }
    // Si pas d'aperçu de l'Observer, ne pas faire d'animation
    nuage.classList.remove('cloud-animation');
   
  });
});

// Dire à l'Observer les éléments à suivre
observer.observe(document.querySelector('.cloud-wrapper'));


// Titre 'L'histoire'

const observer_titre = new IntersectionObserver(entries => {
  entries.forEach(entry => {
   
    const titre = entry.target.querySelector('.section-title');
  
    if(entry.isIntersecting) {
      
      titre.classList.add('animation-titre');
      return;
    }
    titre.classList.remove('animation-titre');
  });
});

observer_titre.observe(document.querySelector('.titre-wrapper'));

// Titre 'Studio Koukaki'

const observer_studio = new IntersectionObserver(entries => {
  entries.forEach(entry => {
   
    const studio_titre = entry.target.querySelector('.studio-title');
  
    if(entry.isIntersecting) {

      studio_titre.classList.add('animation-titre');
      return;
    }
    studio_titre.classList.remove('animation-titre');
  });
});

observer_studio.observe(document.querySelector('.studio-wrapper'));

// Rotation des fleurs

const rotation_fleur = document.querySelector('');

window.addEventListener("scroll", () => {
  const tourne_fleur = window.tourne_fleur;
  // Vitèsse de l'animation
  const vitesse_rotation = tourne_fleur* 0.5;

  // rotation_fleur.style.transform = `translateY(${translateY}px)`;
  // document.querySelector('').style.transform = `translateY(${translateY}px)`;
});







