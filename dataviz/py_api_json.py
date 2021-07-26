#### Pour utiliser une API en ligne ####
import requests
import json

# Fonction pour afficher le JSON en arbre
def jprint(obj):
    text = json.dumps(obj, sort_keys=True, indent=4)
    print(text)

# On exécute la requête API
response = requests.get("http://api.openweathermap.org/data/2.5/weather?q=Paris,fr&units=metric&APPID=b0e08d79e61f6106a2b9f98d95df1e01")

# On récupère la donnée JSON de la réponse de l'API
data = response.json()

# On récupère la donnée de température et on l'arrondit à 1 décimale
temperature = round(data['main']['temp'], 1)
print("A Paris il fait : " + str(temperature) + "°C")

# On récupère la donnée du vent, on la convertit et on l'arrondit à 1 décimale
vent = round(data['wind']['speed'] * 3.6, 1)
print("Le vent souffle à " + str(vent) + " km/h")

"""
### Pour utiliser un fichier JSON en local ###
import json

# On ouvre le fichier JSON
f = open('meteo.json',)

# On récupère le JSON en dictionnaire
data = json.load(f)

print(data)

# On ferme le document
f.close()
"""
