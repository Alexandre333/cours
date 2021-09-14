# On importe les différents modules utilisés
from flask import *
import requests
import json
import wikiscraper as ws
import datetime
from flask_sqlalchemy import SQLAlchemy

# Initialisation de Flask
app = Flask(__name__)

# Importation des variables du fichier config.py
app.config.from_object('config')

########################
###### Config BDD ######
########################
# Configuration du chemin de notre BDD
app.config['SQLALCHEMY_DATABASE_URI'] = "sqlite:///equipe.db"
# Initialisation de l'objet pour la bdd
db = SQLAlchemy(app)

# Création du modèle (unique dans notre exemple)
class Equipe(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    nom = db.Column(db.String(255), nullable=False)

# Pour générer le fichier .db à partir du modèle
#db.create_all()
########################
###### Fin Config BDD ##
########################

# La page d'accueil
# http://127.0.0.1:5000/
@app.route('/')
def index():
    # On prépare le dictionnaire qui va recevoir nos données
    data = {}

    # On assigne des valeurs aux clés de notre dictionnaire
    data["title"] = "Accueil"
    data["projet"] = app.config['NOM_PROJET']

    # On récupère l'heure actuelle
    time = datetime.datetime.now()
    data["heure"] = time.hour
    data["minute"] = time.minute
    data["jour"] = time.today().strftime("%A")

    # On veut afficher notre fichier qui contient notre page d'accueil lorsque celle-ci est demandée en URL.
    # On transmet aussi le dictionnaire de données qui sera à utiliser dans l'affichage HTML
    return render_template('index.html', data=data)

# La page des résultats de la méteo
# http://127.0.0.1:5000/meteo
@app.route('/meteo/')
def meteo():
    # On récupère la valeur du paramètre "ville" se trouvant dans notre URL
    ville = request.args.get('ville')

    # Si aucune ville n'a été sélectionnée, on redirige vers la page d'accueil
    if not ville:
        return redirect('/')
    else:
        # Pour utiliser l'API de OpenWeatherMap, il lui fournir l'ID de la ville.
        if ville == "paris":
            city_id = "2988507"
        elif ville =="berlin":
            city_id = "2950159"
        elif ville =="seoul":
            city_id = "1835848"
        elif ville =="rome":
            city_id = "3169070"

        # On exécute la requête API
        # La variable app.config['API_WEATHER_KEY'] contient notre clé d'API, renseignée dans le fichier config.py
        response_api = requests.get("http://api.openweathermap.org/data/2.5/weather?id="+city_id+"&units=metric&APPID="+app.config['API_WEATHER_KEY'])

        # On récupère la donnée JSON de la réponse de l'API
        data_api = response_api.json()

        # On récupère la donnée de température et on l'arrondit
        temperature = round(data_api['main']['temp'])

        # On prépare le dictionnaire qui va recevoir nos données
        data = {}

        # On assigne des valeurs aux clés de notre dictionnaire
        data["ville"] = ville
        data["temperature_celcius"] = temperature
        data["title"] = "La méteo à " + ville

    # Pour cette URL demandée, on va afficher le contenu du fichier meteo.html.
    # On transmet aussi le dictionnaire de données qui sera utilisé dans l'affichage HTML
    return render_template('meteo.html', data=data)

# La page d'informations sur une ville
# http://127.0.0.1:5000/ville/<nom>
@app.route("/ville/<nom>")
# Notre fonction prend comme entrée le paramètre et la valeur qui viennent de l'URL
def ville(nom):
    # Utilisation de la librairie wikiscraper pour récupérer les infos sur Wikipédia de la ville choisie
    ws.lang("fr")
    result = ws.searchBySlug(nom)
    
    # On prépare le dictionnaire qui va contenir nos données
    data = {}
    # On assigne les valeurs aux clés personnalisées de notre dictionnaire
    # Le titre H1 de la page
    data["ville"] = result.getTitle()
    # Le premier et deuxième paragraphe du résumé
    data["description"] = result.getSummary()[0] + " " + result.getSummary()[1]
    # L'image d'illustration utilisée dans la page
    data["image"] = result.getImage()[0]

    # Pour cette URL demandée "/ville/<nom>", on va afficher nos données avec le fichier ville.html.
    # On transmet aussi le dictionnaire de données qui sera utilisé dans l'affichage HTML
    return render_template('ville.html', data=data)

# La page des mentions légales
# http://127.0.0.1:5000/mentions
@app.route('/mentions/', methods=['POST', 'GET'])
def mentions():
    data = {}
    data["title"] = "Mentions légales"
    data["responsable"] = app.config['IDENTITE_DEV']
    data["societe"] = app.config['SOCIETE']

    ## Exemple sans BDD :
    # Dans notre dictionnaire, on assigne une liste de plusieurs valeurs pour une clé
    # On utilisera une boucle dans le fichier HTML pour afficher les valeurs une par une.
    #data["developpeurs"] = ["Alexandre", "Laureen", "Tom", "Séléna"]

    ## Exemple avec BDD :
    # Si le formulaire est utilisé, on récupère le champs renseigné
    if request.method == "POST":
        nom_dev = request.form.get("nom")
        # On crée un objet modèle qui va contenir notre valeur
        requete_ajout = Equipe(nom=nom_dev)

        # On insert l'objet dans la BDD
        db.session.add(requete_ajout)
        db.session.commit()

    # On interroge la BDD pour récupérer toutes les données dans notre modèle
    equipe_developpeurs = Equipe.query
    # On met les données reçues dans notre dictionnaire pour un affichage dans le template
    data["developpeurs"] = equipe_developpeurs
    
    # On indique le chemin vers le fichier à partir du dossier "templates"
    return render_template('annexes/mentions.html', data=data)

# Erreur 404
# Si une page n'est pas trouvée et le serveur envoie une réponse 404
# exemple : http://127.0.0.1:5000/zeofkzoefkzoef
@app.errorhandler(404)
# On indique le type d'erreur et notre fonction prend comme entrée la valeur de l'erreur automatiquement comme paramètre
def notFound(error):
    data = {}
    data["title"] = "Pas non trouvée"
    # On décide d'utiliser ce template si une telle erreur se produit
    return render_template('annexes/error404.html', data=data)