<?php 
class Jouer{
    private int $_date;
    private Joueur $_joueur;
    private Equipe $_equipe;

    public function __construct(int $date , Joueur $joueur , Equipe $equipe) {
        $this->_date = $date;
        $this->_joueur = $joueur;
        $this->_equipe = $equipe;
        $equipe->setJouer($this);
        $joueur->setJouer($this);
    }

    public function getDate(){
        return $this->_date;
    }
    public function getJoueur(){
        return $this->_joueur;
    }
    public function getEquipe(){
        return $this->_equipe;
    }
    public function setDate( int $date ){
        $this->_date = $date ; 
    }
    public function setJoueur( Joueur $joueur ){
        $this->_joueur = $joueur ; 
    }
    public function setEquipe( Equipe $equipe ){
        $this->_equipe = $equipe ; 
    }
    public function __toString(){
        return $this->_equipe." ".$this->_date;

    }
}
?>