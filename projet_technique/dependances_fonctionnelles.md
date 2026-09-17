## 1. ORGANISATEUR

**Dépendance fonctionnelle :** `id_organisateur → nom, email, mot_de_passe, role`

| Déterminant | Dépendant |
|---|---|
| id_organisateur | nom |
| id_organisateur | email |
| id_organisateur | mot_de_passe |
| id_organisateur | role |

## 2. CATEGORY

**Dépendance fonctionnelle :** `id_category → nom_category, description`

| Déterminant | Dépendant |
|---|---|
| id_category | nom_category |
| id_category | description |

## 3. EVENEMENT

**Dépendance fonctionnelle :** `id_evenement → titre, content, image, date_evenement, date_publication, lieu, prix, status, id_organisateur, id_category, heure_evenement, nombre_places, date_fin`

| Déterminant | Dépendant |
|---|---|
| id_evenement | titre |
| id_evenement | content |
| id_evenement | image |
| id_evenement | date_evenement |
| id_evenement | date_publication |
| id_evenement | lieu |
| id_evenement | prix |
| id_evenement | status |
| id_evenement | id_organisateur |
| id_evenement | id_category |
| id_evenement | heure_evenement |
| id_evenement | nombre_places |
| id_evenement | date_fin |
