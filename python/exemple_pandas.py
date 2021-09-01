# On importe la librairie avec un alias
import pandas as pd

################################
## Créer son propre dataframe ##
################################

# On déclare notre jeu de données
donnees = {
  "Pays": ["France", "Italie", "Corée du Sud", "Thaïlande", "Thaïlande", "Espagne"],
  "Capitale": ["Paris", "Rome", "Séoul", "Bangkok", "Bangkok", "Madridd"],
  "Population": [2.1, 2.8, 9.7, 10.8, 10.8, 3.2]
}

# On crée le dataframe à partir des données
df = pd.DataFrame(donnees)
# On affiche le dataframe
print(df)

# Pour afficher une donnée précise :
# - En indiquant son label => loc[ligne_label, colonne_label]
print(df.loc[0, "Pays"]) # On utilise l'index comme label de ligne
# - En indiquant son index => iloc[ligne_index, colonne_index]
print(df.iloc[0, 1])

# Pour modifier la valeur d'une cellule précise
# On choisit ici la ligne et la colonne avec leur label de la cellule à modifier
df.loc[5, 'Capitale'] = "Madrid"
print(df)

# Pour enregistrer le dataframe au format Excel
# On utilise la méthode de Pandas pour le type de fichier Excel
writerExcel = pd.ExcelWriter("tableur.xlsx")
# On exporte notre dataframe vers Excel en retirant la colonne des indexs
df.to_excel(writerExcel, index=False)
# On sauvegarde le fichier
writerExcel.save()
print('------- Fichier Excel généré -------')


####################################
## Travailler avec un fichier Excel existant ##
####################################

df_client = pd.read_excel('data_client.xlsx')

# On affiche tout
print(df_client)
# On affiche que les 10 premières lignes
print(df_client.head(10))
# On affiche les 5 dernières lignes
print(df_client.tail()) 
# On affiche le nombre de lignes de notre fichier
print(len(df_client.index))
# On supprime les doublons des lignes avec le même nom
df_client = df_client.drop_duplicates(subset=['Nom'])
# On affiche toutes les lignes de la colonne des noms
print(df_client.loc[:,'Nom'])