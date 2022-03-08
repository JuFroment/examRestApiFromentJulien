# examRestApiFromentJulien

####################################################
# SI LE PATCH NE FONCTIONNE PAS #
####################################################

Mon PATCH ne fonctionnait pas et il me sortait cette erreur 

    "hydra:description": "The content-type \"application/json\" is not supported. Supported MIME types are \"multipart/form-data\", \"application/merge-patch+json\", \"application/vnd.api+json\"." avec un status 415 : Unsupported Media Type
    
Pour le corriger j'ai simplement décoché dans le header de la requête le "Content-Type" : "application/json" et j'en ai recréé un "Content-Type" : "application/merge-patch+json" et là ça a fonctionné.
    
  

#################################
# Partie Théorique : #
#################################

1) Donner 5 verbes HTTP et expliquer leurs utilité

* GET 
Le verbe GET permet d'accéder a une ressource, soit la totalité, soit un élement spécifique.

* POST
Le verbe POST permet d'ajouter un élément dans une BDD en lui passant les données dans le corps de la requête. 

* PUT
Le verbe PUT met à jour la ressource complète en la remplaçant par une nouvelle version. ATTENTION, cela nécessite de mettre à jour toutes les propriétés de la donnée.

* PATCH
Le verbe PATCH ressemble au PUT, la seule différence est qu'il ne met à jour que la ou les propriétés renseignées sans toucher aux autres.

* DELETE
Le verbe DELETE vient supprimer la ressource de la BDD.

2) Donner les composants d'une requête HTTP

Une requête HTTP est composée des éléments suivants : 
-une url, le client passe par l'url afin d'obtenir une réponse du serveur
-des headers, qui contiennent les informations du client
-une méthode (cf verbes ci dessus)
-un body (il n'y en a pas toujours)


3) Donner les composants d'une réponse HTTP

Une réponse HTTP contient les éléments suivants :
-elle est renvoyée par le serveur web
-des headers, qui donnent un contexte un peu plus détaillé de la réponse
-un body (au format html, json, xml etc)
-un code status(200 : indique que l'opération est réussie, 404 : ressource non trouvée, 500 : erreur côté serveur)
