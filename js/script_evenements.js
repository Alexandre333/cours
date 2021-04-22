document.write("<hr>");
document.write("<h2>Evenements JS</h2>");

// Ecouteur sur l'objet "Document"
// Sélectionner l'élément <h1>
document.querySelector("h1").addEventListener("click", changeTaille);

function changeTaille(){
	this.style.fontSize = "10px";
}

// Sélectionner l'élément dont l'id est 'paragraphe'
document.getElementById("paragraphe").addEventListener("mouseover", changeGras);

function changeGras(){
	this.style.fontWeight = "900";
}

document.getElementById("paragraphe").addEventListener("mouseout", changeNormal);

function changeNormal(){
	this.style.fontWeight = "normal";
}

// Ecouteur sur l'objet "Window"
window.addEventListener('resize', changeCouleur);

function changeCouleur(){
	document.body.style.backgroundColor = "blue";
	document.body.style.color = "white";
}


// Manipulation du DOM
// Création d'un nouveau élément paragraphe
var nouveauParagraphe = document.createElement("p");

// Ajout du texte à l'intérieur de l'élément
nouveauParagraphe.innerHTML = 'Voici mon nouveau paragraphe !';

// Attribution d'un nouvel attribut (id) pour cet élément
var nouveauAttribut = document.createAttribute("id");
nouveauAttribut.value = "couleurJolie";
nouveauParagraphe.setAttributeNode(nouveauAttribut);

// Ajout de l'élément en dernière poisiton dans le body
document.body.appendChild(nouveauParagraphe);

// Ajout d'un écouteur pour modifier le contenu du premier paragraphe
document.getElementById("couleurJolie").addEventListener("click", changeTexte);

function changeTexte(){
	document.getElementById("paragraphe").innerHTML = "Le texte dans ce paragraphe est changé !";
}


// Manipulation du CSS avec ses propres fonctions
document.getElementById("uneBoite").style.backgroundColor = "red";
document.getElementById("uneBoite").style.width = "400px";
document.getElementById("uneBoite").style.height = "250px";