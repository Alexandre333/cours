# Importation du module
import zipfile

###########################################
#### Zipper des fichiers en un dossier ####
###########################################

# Liste de mes fichiers à zipper
mesFichiers = ['img/prix_choc.jpg', 'img/velo_transporteur.png']

# Création d'une fonction pour zipper des fichiers
# 1er argument = le nom du dossier qui sera zippé
# 2eme argument = une list des fichiers à intégrer au dossier zippé
def zipDossier(nomDossierZip, listFichiers):

	# On ouvre un fichier .zip en écriture avec un type de compression
	with zipfile.ZipFile(nomDossierZip + '.zip', 'w', zipfile.ZIP_DEFLATED) as zip:
		# Pour chaque fichier de notre liste, on le rajoute dans notre dossier zippé
		for fichier in listFichiers:
			zip.write(fichier)

	# On affiche le message de confirmation
	print("Le dossier zippé a été créé !")

# Appel et utilisation de la fonction
zipDossier("monPremierZip", mesFichiers)

###################################
#### Dézipper un dossier zippé ####
###################################

# Le nom du dossier à dézipper. Il se trouve dans le même répertoire que notre programme Python
nomDossierDezip = "dezipDossier.zip"

# On ouvre le fichier en lecture
with zipfile.ZipFile(nomDossierDezip, 'r') as zip:
	# Affiche le contenu du dossier zippé
    zip.printdir()
    # Extrait tous les fichiers dans le dossier courant (même dossier que notre programme Python)
    zip.extractall()