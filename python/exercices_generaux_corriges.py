# Exercice 1 :
# Afficher un "Hello World" dans le terminal
print("Hello World")

# Exercice 2 :
# Modifier le code pour calculer la moyenne des notes
note_maths = 15
note_francais = 12
note_histoire_geo = 9
moyenne = (note_maths+note_francais+note_histoire_geo)/3
print('La moyenne est de '+str(moyenne)+' / 20.')

# Exercice 3 :
"""
Avec une boucle FOR, affichez 15 fois "J'adore le Python"
avec le numéro de la ligne à coté
"""

for i in range(1, 16):
	print(str(i) + "- J'adore le Python")

# Exercice 4 :
"""
Imaginons : on a un budget de 1500€ et on souhaite 
acheter un produit à 1800€. Afficher si le budget le
permet en le vérifiant avec une condition IF
"""
budget = 1500
produit = 1800

if budget > produit:
	print("Tu peux l'acheter")
else:
	print("Tu ne peux pas l'acheter")

# Exercice 5 :
#Afficher le 3ème élément de cette liste
fruits = ['papaye', 'mangue', 'litchi', 'kaki', 'avocat']
print(fruits[2])

# Exercice 6 :
"""
Compléter la fonction qui permet de convertir
des euros en dollars pour un prix donné
"""

def converDollar(prixEnEuros):
	tauxConversion = 1.18
	prixEnDollar = prixEnEuros * tauxConversion
	return prixEnDollar

euros = 20

print(converDollar(euros))