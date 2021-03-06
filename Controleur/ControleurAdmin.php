<?php
    require_once 'ControleurSecurise.php';
    require_once 'Classes/Publication.php';
    require_once 'Classes/Chercheur.php';
    require_once 'Classes/Administrateur.php';

    class ControleurAdmin extends ControleurSecurise{

        private $chercheur;
        private $publication;

        public function __construct(){
            $this->chercheur = new Chercheur(null, 'nom', 'prenom', 'orga', 'equipe');
            $auteurs = array($this->chercheur);
            $this->publication = new Publication(null, $auteurs, 'titre', 'ref', 'annee', 'statut', 'type'); 
        }

        public function index(){
            
            $admin = new Administrateur();
            $comptes = $admin->getUtilisateurs();
            
            $nbPublications = $this->publication->getNombrePublications();
            $nbChercheurs = $this->chercheur->getNombreChercheurs();
            $login = $this->requete->getSession()->getAttribut('login');
            $this->genererVue(array('comptes' => $comptes,'nbPublications' => $nbPublications, 'nbChercheurs' => $nbChercheurs, 'login' => $login));
        }
    }
