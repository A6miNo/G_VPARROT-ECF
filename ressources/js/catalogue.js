//fonction ouverture sur fiche 
console.log(location.href)

const btnOpening = window.document.querySelector('.open');
btnOpening.addEventListener('click',()=>{
    window.open('./fiche.html','Titre Fiche')
});


//fonction sur les filtres min et max des range

// Sélection les éléments input range
const priceRange = document.getElementById('prix-range');
const kmRange = document.getElementById('km-range');
const yearRange = document.getElementById('annee-range');

// Sélection des éléments input number correspondants
const minPriceInput = document.querySelector('.min_price');
const maxPriceInput = document.querySelector('.max_price');
const minKmInput = document.querySelector('.min_km');
const maxKmInput = document.querySelector('.max_km');
const minYearInput = document.querySelector('.min_year');
const maxYearInput = document.querySelector('.max_year');

// Fonction pour mettre à jour les valeurs d'input number
function updateInputValues() {
    minPriceInput.value = priceRange.value;
    maxPriceInput.value = priceRange.value;
    minKmInput.value = kmRange.value;
    maxKmInput.value = kmRange.value;
}

// Ajoutez des écouteurs d'événements pour les changements d'input range
priceRange.addEventListener('input', function () {
    updateInputValues();
});

kmRange.addEventListener('input', function () {
    updateInputValues();
});

// Ajoutez des écouteurs d'événements pour les input number correspondants
minPriceInput.addEventListener('input', function () {
    priceRange.value = minPriceInput.value;
    updateInputValues();
});

maxPriceInput.addEventListener('input', function () {
    priceRange.value = maxPriceInput.value;
    updateInputValues();
});

minKmInput.addEventListener('input', function () {
    kmRange.value = minKmInput.value;
    updateInputValues();
});

maxKmInput.addEventListener('input', function () {
    kmRange.value = maxKmInput.value;
    updateInputValues();
});

// Mettez à jour les valeurs initiales
updateInputValues();





//recherche AJAX sur la sidebar de filtre

// Écoute d'événement pour soumettre le formulaire
document.getElementById('filter-form').addEventListener('submit', function (e) {
    e.preventDefault(); // Empêche la soumission du formulaire par défaut

    // Récupération des les valeurs des filtres
    const marqueElements = document.querySelectorAll('.marque');
    const marques = Array.from(marqueElements).map(element => element.value);

    const modeleElements = document.querySelectorAll('.modele');
    const modeles = Array.from(modeleElements).map(element => element.value);  
    
    const priceElements = document.querySelectorAll('.prix');
    const prices = Array.from(priceElements).map(element => element.value);

    const kmElements = document.querySelectorAll('.km');
    const kilometers = Array.from(kmElements).map(element => element.value); 

    const yearElements = document.querySelectorAll('.année');
    const years = Array.from(yearElements).map(element => element.value); 

// Création del'objet contenant les données de filtre
const data = {
    marque: marques,
    modele: modeles,
    prix: prices,
    km: kilometers,
    annee: years
};

// Création de l'instance de l'objet XMLHttpRequest
const xhr = new XMLHttpRequest();

// Configuration de  la requête AJAX (POST)
xhr.open('POST', 'mon_url_api.php', true); // Remplacez par l'URL de votre API
xhr.setRequestHeader('Content-Type', 'application/json');

// Définition de la fonction de gestionnaire d'événements pour la réponse
xhr.onload = function() {
    if (xhr.status === 200) {
        // La réponse contient les résultats filtrés, mettez à jour votre interface utilisateur
        // Par exemple, vous pouvez afficher les produits filtrés dans une liste sur la page.
        // Assurez-vous d'avoir une structure HTML pour afficher ces produits et utilisez JavaScript pour la mettre à jour.
        // Par exemple, si vous avez une <div id="resultats">, vous pouvez faire quelque chose comme :

        
        // Mis a jour du nombre d'annonces
        document.getElementById('nbsearch').innerHTML = xhr.responseText; 

        
    } else {
        console.error('Erreur AJAX :', xhr.status, xhr.statusText);
    }
};

// Gestion des erreurs de la requête AJAX
xhr.onerror = function() {
    console.error('Erreur réseau lors de la requête AJAX');
};

// Envoi de la requête avec les données JSON
xhr.send(JSON.stringify(data));
});
