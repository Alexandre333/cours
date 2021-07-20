# On importe la librairie et on utilise que la fonction pyplot
import matplotlib.pyplot as pyplot

# Pour utiliser une API en ligne
import requests
import json


# On initialise les listes qui contiendront nos données X et Y
x_value = []
y_value = []

# On exécute la requête API
response = requests.get("https://data.sncf.com/api/records/1.0/search/?dataset=effectifs-disponibles-sncf-depuis-1851&q=&rows=90&sort=date")
# On récupère la donnée JSON de la réponse de l'API
data = response.json()
    
# On fait une boucle FOR pour récupérer une à une les différentes données de notre JSON
# La limite de notre FOR correspond à la longueur de l'objet JSON qu'on reçoit
for i in range(len(data['records'])):
    # On récupère la donnée pour la date
    # La date sera affichée en abscisse
    x = data['records'][i]['fields']['date']

    # On récupère la donnée pour l'effectif
    # Le nombre sera affiché en ordonnée
    y = data['records'][i]['fields']['effectif_sncf']

    x_value.append(x)
    y_value.append(y)


# On configure le chart
pyplot.bar(x_value, y_value, color = "purple", width = 0.8)
pyplot.gca().invert_xaxis() # Ordre croissant de date
pyplot.xticks(rotation='vertical') # Retourner les labels
pyplot.xlabel("Année") # Légende à X
pyplot.ylabel("Nombre d'employés") # Légende pour Y

# On ajoute un titre et on modifie sa taille
titre = pyplot.title('Effectifs à la SNCF depuis 90 ans')
titre.set_fontsize(14)

# On affiche notre chart avec toutes ses configurations
pyplot.show()