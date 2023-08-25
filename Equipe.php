<?php 
class Equipe {
    private string $_nom;
    private Pays $_pays;
    private array $_jouer=[];

    public function __construct(string $_nom , Pays $pays ) {
        $this->_nom = $_nom;
        $this->_pays = $pays;
        $pays->setEquipe($this);
    }

    public function getNom(){
        return $this->_nom;
    }
    public function getJouer(){
        return $this->_jouer;
    }
    public function getPays(){
        return $this->_pays;
    }
    
    public function setNom(string $nom){
        $this->_nom = $nom; 
    }
    public function setJouer(Jouer $jouer){
        array_push($this->_jouer, $jouer) ;
    }
    public function setPays(Pays $pays){
        $this->_pays = $pays; 
        $pays->setEquipe($this);
    }
    public function __toString(){
        return $this->_nom;
    }

    public function joueurs(){
        $result= $this."<br>";
        foreach($this->_jouer as $joueur){
            $result.=$joueur->getDate()." ".$joueur->getJoueur()."<br>" ;     
        }
        return $result;
    }

}





















?>