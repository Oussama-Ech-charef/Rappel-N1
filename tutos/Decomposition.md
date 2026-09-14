# Décomposition des données

## 1. Relation initiale

```text
COMMANDE(
    numero_commande,
    date_commande,
    nom_client,
    email_client,
    nom_produit,
    prix_produit,
    quantite_commandee
)
```

## 2. Dépendances fonctionnelles

```text
id_client → nom_client, email_client

id_produit → nom_produit, prix_produit

numero_commande → date_commande, id_client, quantite_commandee


```

## 3. Décomposition

### CLIENT

```text
CLIENT(
    id_client,
    nom_client,
    email_client
)
```

### COMMANDE

```text
COMMANDE(
    numero_commande,
    date_commande,
    id_client,
    quantite_commandee
)
```

### PRODUIT

```text
PRODUIT(
    id_produit,
    nom_produit,
    prix_produit
)
```



## 4. Entités finales

| Entité | Identifiant | Propriétés |
| --- | --- | --- |
| CLIENT | `id_client` | `nom_client`, `email_client` |
| COMMANDE | `numero_commande` | `date_commande`, `id_client`, `quantite_commandee`,  `id_produit`| 
| PRODUIT | `id_produit` | `nom_produit`, `prix_produit` | 


## 5. Résultat final

La relation initiale `COMMANDE` est décomposée en quatre relations :

```text
CLIENT
COMMANDE
PRODUIT
```

Cette décomposition permet de réduire les répétitions et d’organiser les données de manière plus claire.