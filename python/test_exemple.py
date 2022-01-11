import os

# Exemple 1
# On crée une fonction qui permet de convertir des Kelvin en Celcius
def kelvinToCelcius(tempKelvin):
    # Le calcul pour passer en Celcius
    tempCelcius = tempKelvin - 273.15

    # On retourne le résultat tout en arrondissant à l'entier le plus proche
    return round(tempCelcius)

def test_kelvinToCelcius():
    # -273.15°C correspond au minimum de froid possible (zéro absolu soit 0 Kelvin)
    # Si la valeur retournée est inférieure à ce nombre, alors il y a une erreur et on l'indique
    # On vérifie si la valeur retournée est supérieure au zéro absolu, sinon le test échoue
    # La valeur passée en paramètre ci-dessous peut provenir d'une API de méteo
    assert kelvinToCelcius(0) > -273.15, "Valeur en dessous du zéro absolu"

# Exemple 2
# On crée une fonction qui permet d'afficher le contenu d'un fichier texte
def traitement_fichier(fichier):
    # On ouvre le fichier texte en lecture
    fichierTexte = open(fichier, "r")

    # On récupère le nombre de caractères contenus dans le fichier
    filesize = os.path.getsize(fichier)

    # S'il contient du texte, on retourne le texte sinon on retourne 0
    if filesize != 0:
        return fichierTexte
    else:
        return 0

# On crée la fonction pour tester le résultat
def test_traitement_fichier():
    # On affirme que la valeur retournée doit être différente de 0 sinon le test échoue
    assert traitement_fichier("fichier.txt") != 0