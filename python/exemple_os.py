##############################################
## Manipuler des fichiers avec le module OS ##
##############################################

# Importation du module
import os

# On configure les variables pour plus de facilité si le nom du fichier ou le chemin du dossier changent
fichier = "fichier1.txt"
dossierParent = "C:/wamp64/www/cours/python/textes/"

# Cette fonction permet de concaténer correctement le chemin
cheminFinal = os.path.join(dossierParent, fichier)

# On vérifie si le fichier existe déjà dans notre dossier
if os.path.exists(cheminFinal):
	# Si le fichier existe, on le supprime
	os.remove(cheminFinal)
	print("Le fichier est déjà présent dans notre dossier. Suppression effectuée.")

else:
	# Si le fichier n'existe pas, on le crée	
	print("Le fichier demandé n'existe pas. Un nouveau va être créé.")
	with open(dossierParent + 'fichier1.txt', 'w') as nouveauFichier:
		nouveauFichier.write("Lorem ipsum dolor sit amet.")

# On vérifie si le dossier n'existe pas
if not os.path.exists(dossierParent + "nouveau dossier/"):
	# Si tel est le cas, on en crée un
	os.mkdir(dossierParent + "nouveau dossier/")