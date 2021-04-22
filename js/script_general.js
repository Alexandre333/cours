document.write("<h2>tableau numéroté</h2>");

// Déclaration d'un tableau numéroté
var tableau_num = ['Mozart', 'Vivaldi', 'Beethoven', 'Verdi'];

// Ajoute un nouvel élément à la fin de notre tableau
tableau_num.push("Liszt");

// On récupère la taille du tableau (nombre de ligne)
var taille_tableau = tableau_num.length;

// On affiche les valeurs dans un tableau HTML, donc on le déclare
document.write("<table border='1'>");

// Une nouble FOR pour récupérer et afficher chaque ligne
for (var i = 0; i < taille_tableau; i++) {
	document.write("<tr><td>"+tableau_num[i]+"</td><tr>");
}
document.write("</table>");

document.write("<hr>");
document.write("<h2>tableau associatif</h2>");

// Déclaration d'un tableau associatif
var tableau_asso = { "Mozart" : "Autrichien", "Vivaldi" : "Italien", 
"Beethoven" : "Allemand", "Verdi" : "Italien"};

for (var value in tableau_asso) {
	document.write("<p>"+value+" est "+tableau_asso[value]+"</p>");
}

console.log(tableau_asso["Vivaldi"]); // Affiche Italien
