##################################################
## Ouverture et écriture simple dans un fichier ##
##################################################

# On ouvre le fichier en mode écriture (curseur au début)
fichier = open("latin.txt", "w")

# On écrit dans le fichier. Le mode d'ouverture va écraser ce qui était écrit avant.
fichier.write("Lorem ipsum dolor sit amet.")

# On affiche le nom du fichier en utilisant la méthode "name" pour l'objet "fichier"
print(fichier.name)

# Dès qu'on a fini de travailler avec le fichier, on le ferme pour le laisser libre
fichier.close()

###############################################################
## Ouverture et écriture de plusieurs lignes dans un fichier ##
###############################################################

# Chaque nouvelle ligne correspond à un élément de la liste
# Pour effectuer un retour à la ligne, il faut indiquer "\n"
textesLatin = [
	"Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n", 
	"Pellentesque eget nibh rhoncus, posuere velit eget.\n", 
	"Donec id placerat augue. Morbi imperdiet euismod gravida.\n",
	"Vestibulum ante ipsum primis in faucibus orci luctus.\n"
]

# On ouvre le fichier en mode écriture (curseur au début)
fichier2 = open("latin2.txt", "w")

# On utilise cette méthode avec une liste
fichier2.writelines(textesLatin)

fichier2.write("Ut ac arcu sed est suscipit aliquam eu tristique leo.")

fichier2.close()

###############################################
## Ouverture et écriture à la fin du fichier ##
###############################################

# On ouvre le fichier en mode lecture et écriture (curseur à la fin)
# Le curseur se trouve après le dernier caractère du fichier pour les prochaines opérations
fichier2Ajout = open("latin2.txt", "a+")

fichier2Ajout.write("\nUne nouvelle ligne")

# La méthode .read() va afficher le contenu de notre fichier après le curseur.
# Avec une ouverture en mode "a+", le curseur se retrouve à la fin du document.
# Nous allons donc mettre le curseur à la position 0 du document.
fichier2Ajout.seek(0)

# On affiche le contenu
print(fichier2Ajout.read())

fichier2Ajout.close()