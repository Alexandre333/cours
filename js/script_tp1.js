/* Spoile intentionnel */
// Dans un premier temps, on cache le paragraphe du résumé
document.querySelector('.resume').style.visibility = "hidden";

// On met une écoute sur le checkbox
document.getElementById("id_divulgacher").addEventListener("click", cacherResume);

function cacherResume(){
	document.querySelector('.resume').style.visibility = "visible";
}

/* Image source */

// On met une écoute sur l'image
document.querySelector("img").addEventListener("mouseover", changeImage);

function changeImage(){
	// On change l'attribut "src"
	this.setAttribute("src", "https://i.gifer.com/51Wc.gif");
}

/* Nom acteur */
// On récupère le dernier enfant de la liste et on lui assigne un texte
document.querySelector("ul").lastElementChild.innerHTML = "Matt LeBlanc";