<?php

        require_once 'Core/Modele.php';
	require_once 'Classes/Chercheur.php';

Class Administrateur extends Modele{
    
    public function getUtilisateurs(){
        $reqUtilisateurs = 'SELECT * FROM Comptes WHERE statut=utilisateur';
        $reponseUtilisateurs = $this->executerRequete($reqUtilisateurs);
        while($donneesUtilisateurs = $reponseUtilisateurs->fetch()){
            $reqNom = 'SELECT nom,prenom FROM Auteur WHERE Auteur.id = Comptes.auteur_id';
            $reponseNom = $this->executerRequete($reqNom);
            while($donneesNom = $reponseNom->fetch()){
                $Utilisateurs[] = new Chercheur_UTT($donneesUtilisateurs['auteur_id'], $donneesNom['nom'], $donneesNom['prenom'], $donneesUtilisateurs['equipe'],$donneesUtilisateurs['login'],$donneesUtilisateurs['mdp']); 
            }
        }
        return $Utilisateurs;
    }
    
    function detectionCoherenceDonnees(){
        
    }
    function statistiquesChercheurs(){
        //me faut :  //nbpublication-OK annéemax anneemin nbpublié nbCI  nbRI nb CF 
            $reqChercheur = 'SELECT * FROM Auteur ORDER BY id';
            $reponseChercheur = $this->executerRequete($reqChercheur);
            while($donneesChercheur = $reponseChercheur->fetch()){
                $Chercheur[] = new Chercheur($donneesChercheur['id'], $donneesChercheur['nom'], $donneesChercheur['prenom'],$donneesChercheur['organisation'] ,$donneesChercheur['equipe']); 
            }
            for($i=0;$i<=sizeof($Chercheur);$i++){
                $idChercheur = $Chercheur[$i]->getId();
                $getpubli = $Chercheur[$i]->getPublications($idChercheur);
                $nbpublié =0;$nbRI =0;$nbCI =0;$nbCF =0;
                foreach($getpubli as $a){
                    $annees[] = $a->getAnnee();
                    if($a->getStatut() == 'publie'){$nbpublié[i]+=1;}
                    if($a->getType() === 'CI'){$nbCI[i]+=1;}
                    if($a->getType() === 'CF'){$nbCF[i]+=1;}
                    if($a->getType() === 'RI'){$nbRI[i]+=1;}
                }
                $nbpublication[$i] = sizeof($getpubli);
                $anneemax[$i] = max($annees);
                $anneemin[$i] = min($annees);
                echo $nbpublication[$i];
                echo $anneemax[$i];
                echo $anneemin[$i];
                echo $nbpublié;
            $pointsChercheur[$i] = ($nbpublication[$i]/($anneemax[$i] - $anneemin[$i])) * ($nbpublié/$nbpublication[$i]) * (($nbCI + $nbRI)/$nbpublication[$i]) * (($nbCI+$nbRI)/$nbpublication[$i]);        
        $Résultat[i] = array($Chercheur[$i]->getNom(),$Chercheur[$i]->getPrenom(),$pointsChercheur[$i]);
        }
        //return $Résultat;
        print_r($Résultat);
    }

    public function ajouterUtilisateur(Chercheur_UTT $nouvelUtilisateur){
        $sql = 'INSERT INTO Comptes VALUES(?, ?, ?);';
        $this->executerRequete($sql, 
            array(
                $nouvelUtilisateur->getID(),
                $nouvelUtilisateur->getLogin(),
                $nouvelUtilisateur->getMdp(),
            ));
    }
}
