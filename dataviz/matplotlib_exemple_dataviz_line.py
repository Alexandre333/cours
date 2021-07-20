# On importe la librairie et on utilise que la fonction pyplot
import matplotlib.pyplot as pyplot

# Pour utiliser une API en ligne
import requests
import json

# Pour traiter les dates
from datetime import datetime

# On initialise les listes qui contiendront nos données X et Y
x_value = []
y_value = []

# On exécute la requête API
response = requests.get("https://api.openweathermap.org/data/2.5/onecall?lat=48.866667&lon=2.333333&exclude=current,minutely,hourly,alerts&units=metric&appid=b0e08d79e61f6106a2b9f98d95df1e01")
# On récupère la donnée JSON de la réponse de l'API
data = response.json()
    
# On fait une boucle FOR pour récupérer une à une les différentes données de notre JSON
# La limite de notre FOR correspond à la longueur de l'objet JSON qu'on reçoit
for i in range(len(data['daily'])):
    # On récupère la donnée pour la date
    # La date sera affichée en abscisse
    date_stamp = data['daily'][i]['dt']
    dt_object = datetime.fromtimestamp(date_stamp)

    date = dt_object.strftime("%d/%m")
    
    # On récupère la donnée pour l'effectif
    # Le nombre sera affiché en ordonnée
    meteo = data['daily'][i]['temp']['day']

    x_value.append(date)
    y_value.append(meteo)


# On configure le chart
pyplot.plot(x_value, y_value, color="green")
pyplot.xlabel("Journée") # Légende à X
pyplot.ylabel("Température °C") # Légende pour Y

# On ajoute un titre et on modifie sa taille
titre = pyplot.title('Prochaines températures à Paris')
titre.set_fontsize(14)

# On affiche notre chart avec toutes ses configurations
pyplot.show()