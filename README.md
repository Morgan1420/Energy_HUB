# Energy_HUB

Comando gay: php -S localhost:8081


Base de Dades:

Usuari:
 - ID: (clau unica)
 - Nom: (requerit)
 - Mail: (requerit)
 - Password (requerit)
 - historial_compres: 


Producte:
 - ID_producte (clau unica)
 - Nom Producte
 - Preu
 - Descrippció
 - Total unitats
 - Imatges


Compra: 
 - ID_compra (clau_unica)
 - ID_usuari (requerit)
 - ID_producte (requerit)
 - nombre_unitats
 - preu


Cistella
 - ID_costella (clau unica)
 - ID_user (requerida)
 - ID_Productes (requerida, multi_var)
 - 