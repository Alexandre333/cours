# On indique le nom du dossier de notre app
# Flask s'occupera de récupérer le fichier __init__.py contenu dans l'app
from appmeteo import app

# Permet de lancer le serveur
# Si il y a des erreurs, elles s'afficheront car nous sommes en debug=True
if __name__ == "__main__":
    app.run('0.0.0.0', debug=True)
