# Décommentez les parties de codes ci-dessous
"""
# Exemple variable
maVariable = 42 # Un entier (int)
maVariable2 = "Hello World" # Une chaîne de caractères (string)
maVariable3 = False # Un booléen (bool)
maVariable4 = ["Elément 1", "Elément 2"] # Un tableau (array)

print(maVariable2)

# Exemple concaténation
maVariable = "Bonjour"
autreVariable = "World"

varChiffre = 5

# Concaténation de texte
resultat = maVariable + autreVariable # BonjourWorld
resultat = maVariable + " " + autreVariable # Bonjour World

# Contacténer du texte et un int
resultat = maVariable + " et " + str(varChiffre) # Bonjour et 5

# Exemple incrémenation
a = 2
b = 2

# Incrémentation
a += 1 # La variable contient : 3

# Décrémentation
b -= 1 # La variable contient : 1

# Exemple opérateurs
a = 2
b = 1

# Est égal
if a == b:
	# Non

# Est différent
if a != b:
	# Oui

# Est inférieur
if a < b:
	# Non

# Est ingérieur ou égal
if a <= b:
	# Non

# Est supérieur
if a > b:
	# Oui

# Est supérieur ou égal
if a >= b:
	# Oui

# Exemple condition
# Déclaration d'une variable
maVariable = "George"

# Calcul du nombre de caractères
longeurMaVariable = len(maVariable)

# Vérifier si ma chaîne de caractères
# est supérieure à 5 caractères

# Effectuer une action différente
# selon la longueur de ma chaîne de caractères
if longeurMaVariable > 5:
	# Si strictement supérieur à 5, on effectue une action...

elif longeurMaVariable == 5:
	# Si égal à 5, on effectue une action...

elif longeurMaVariable == 4:
	# Si égal à 4, on effectue une action...

else:
	# Si aucune des conditions ci-dessus
	# n'est validée, alors on effectue une action...  

# Déclaration de la variable d'incrémentation
passaDansBoucle = 1

# On va effectuer 10 passages dans la boucle
while passaDansBoucle <= 10:
	# On affiche le numéro de passage
	# Pour concaténer, il faut que les deux
	# éléments soient en string
	print("Passage n° "+str(passaDansBoucle))

	# On incrémente la variable de 1
	passaDansBoucle += 1

# On va effectuer 10 passages dans la boucle
for i in range(1, 10):
	# Pour concaténer, il faut que les deux
	# éléments soient en string
	print("Passage n° "+str(i))

# Déclaration d'un tableau numéroté
artistes = ["Mozart", "Vivaldi", "Beethoven", "Verdi"]

# On utilise la boucle FOR et on affiche les données une par une
for artiste in artistes:
	print(artiste)

# Accès à un élément du tableau
print(artistes[0]) # Affiche : Mozart
print(artistes[1]) # Affiche : Vivaldi
print(artistes[2]) # Affiche : Beethoven
print(artistes[3]) # Affiche : Verdi


utilisateurs = {
	"Nom": "Meyer", 
	"Prénom": "Alexandre", 
	"Ville": "Paris", 
	"Newsletter": "Oui" 
}


for key in utilisateurs:
    print(key + " est égal à " + utilisateurs[key])

print(utilisateurs["Prénom"]) # Affiche : Alexandre


print("----------------")

nombre = 3

# Calcul de la puissance 2
calcul2 = nombre * nombre

# Calcul de la puissance 3
calcul3 = nombre * nombre * nombre

# Calcul de la puissance 5
calcul5 = nombre * nombre * nombre * nombre * nombre



# Calcul de la puissance 2
calcul2 = pow(3, 2)

# Calcul de la puissance 3
calcul3 = pow(3, 3)

# Calcul de la puissance 5
calcul5 = pow(3, 5)



# Fonction pour direBonjour()
# On déclare la fonction
def direBonjour(prenom):
	phrase = "Bonjour " + prenom + " !"

	return phrase

# On appelle la fonction avec un argument
print(direBonjour("Alex"))
print(direBonjour("Laureen"))


# Fonction pour siPrenomCool()
# Objectif : Vérifier si un prénom est cool

def siPrenomCool(prenom):
	longueur_prenom = len(prenom)

	if longueur_prenom < 5:
		phrase = "Ton prénom n'est pas cool !"
	else:
		phrase = "Ton prénom est cool !!"

	return phrase

# On appelle la fonction
print(siPrenomCool("Laureen"))

# Fonction pour montanTTC()
def montanTTC(prix, tauxTaxe):
	# On calcul le taux multiplicateur pour la taxe
	coeffTaxe = (tauxTaxe/100) + 1

	# On multiplie le taux par le prix HT
	calcul = prix * coeffTaxe

	# On arrondit aux centimes
	calcul = "{:.2f}".format(calcul)

	# Pour la concaténation,
	# les deux doivent être en string
	return str(calcul) + "€"

print( montanTTC(10, 20) )
print( montanTTC(10, 5.5) )
print( montanTTC(10, 2.1) )
"""

