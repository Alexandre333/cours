import pandas
import json

# On ouvre le fichier excel avec Pandas
excel_data = pandas.read_excel("fichier_test.xlsx", sheet_name="Feuil1")

#print(excel_data)
#print(excel_data["NomDept"])

# Convertir le dataframe en json avec ses index (key)
result = excel_data.to_json(orient="records")
# On load le json dans notre variable "data"
data = json.loads(result)

print(data[0]["NomDept"])

# Créer un fichier json local
with open("data_nouveau.json", "w", encoding='utf-8') as fichier:
	json.dump(data, fichier, ensure_ascii=False, indent=4)