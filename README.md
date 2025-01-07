# Projet Symfony - Prise de Rendez-Vous Laboratoire Médical

## Description
Ce projet utilise le **framework Symfony** pour créer une application de prise de rendez-vous en ligne pour un laboratoire médical. L'application permet aux patients de s'inscrire, de prendre des rendez-vous, et de consulter les résultats. Les laborantins peuvent gérer les rendez-vous, fournir les résultats, et effectuer toutes les tâches nécessaires à la gestion du laboratoire.

 ---
  
### Fonctionnalités
  L'application propose plusieurs fonctionnalités adaptées aux besoins du laboratoire médical, notamment :

  - **Inscription des patients** : Les patients peuvent s'inscrire facilement via un formulaire d'inscription.

 - **Prise de rendez-vous** : Les patients peuvent consulter les créneaux horaires disponibles et prendre des rendez-vous en ligne.

- **Gestion des rendez-vous** : Les laborantins peuvent voir la liste des rendez-vous programmés, modifier ou annuler des rendez-vous si nécessaire.

- **Consultation des résultats** : Une fois les analyses effectuées, les patients peuvent consulter leurs résultats via l'application.

- **Interface Administration** : Interface dédiée aux laborantins pour gérer les différents aspects de l'application (rendez-vous, résultats, etc.).

---
### Technologies utilisées
Backend : Symfony (Framework PHP)
Frontend : HTML, CSS, JavaScript, avec l'intégration d'un design responsive
Base de données : MySQL ou MariaDB pour la gestion des données (utilisé par Symfony via Doctrine)
Serveur Web : Apache ou Nginx (selon votre configuration)
Environnement de développement : Docker pour la gestion des conteneurs et des services (MySQL, PHP, Apache, etc.)

---
### Structure du projet
L'architecture du projet est composée des éléments suivants :

- **src/** : Contient le code source de l'application, y compris les contrôleurs, les entités, et les services.
- **templates/** : Contient les vues Twig utilisées pour rendre les pages web dynamiques.
- **public/** : Répertoire des ressources publiques comme les images, les fichiers CSS et JS.
- **config/** : Contient la configuration de Symfony et de l'application.
- **var/** : Répertoire pour les fichiers temporaires et de cache.
- **migrations/**: Contient les scripts de migration pour la base de données.
Installation
#### Clonez le repository :
Copier le code
**git clone <url_du_repository>**
Installez les dépendances avec Composer :

#### Configurez la base de données :

Modifiez le fichier **.env** ou **.env.local** pour configurer la connexion à votre base de données :

##### env
DATABASE_URL=mysql://username:password@127.0.0.1:3306/**NomDeVotreBase**
Ensuite, exécutez les migrations pour préparer la base de données :
**php bin/console doctrine:migrations:migrate**
###### Démarrez le serveur de développement :
Vous pouvez démarrer un serveur de développement Symfony avec la commande suivante :
**symfony serve**
 L'application sera alors accessible à l'adresse suivante : http://127.0.0.1:8000

### Utilisation
- **Inscription d'un patient** : Accédez à la page d'inscription depuis l'accueil et remplissez les informations nécessaires pour devenir un patient.

- **Prendre un rendez-vous** : Une fois connecté, le patient peut consulter les créneaux disponibles et prendre un rendez-vous.

- **Consultation des résultats** : Après la réalisation des analyses, les patients peuvent consulter leurs résultats directement depuis leur tableau de bord.

- **Gestion des rendez-vous (pour les laborantins)** : Les laborantins peuvent accéder à un tableau de bord pour voir tous les rendez-vous, les gérer, et fournir les résultats des analyses.



