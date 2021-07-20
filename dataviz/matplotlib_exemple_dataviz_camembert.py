# On importe la librairie et on utilise que la fonction pyplot
import matplotlib.pyplot as pyplot
# On importe Numpy pour effectuer des calculs mathématiques ensuite dans le traitement
import numpy as np

# Déclaration des labels et des données dans des tableaux (listes)
labels = ['Facebook', 'Snapchat', 'WhatsApp', 'Instagram', 'Messenger']
values = [25.1, 16.3, 14.7, 14.4, 12.3]

# Fonction proposée par l'équipe de Matplotlib
# Permettant d'afficher la valeur réelle au label % du chart
def real_label(pct, allvals):
    absolute = int(round(pct/100.*np.sum(allvals)))
    return "{:.1f}%\n({:d})".format(pct, absolute)

# On configure le chart
fig1, ax1 = pyplot.subplots()
ax1.pie(values, labels=labels, autopct=lambda pct: real_label(pct, values))
ax1.axis('equal')  # Pour avoir un chart 100% circulaire

# On ajoute un titre et on modifie sa taille
titre = pyplot.title('Les réseaux sociaux les plus visités chaque jour en France en 2020 (en millions)')
titre.set_fontsize(16)

# On affiche notre chart avec toutes ses configurations
pyplot.show()