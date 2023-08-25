<?php 
class Joueur {
    private string $_prenom; 
    private string  $_nom;
    private DateTime $_naissance;
    private Pays $_pays; 
    private array $_jouer=[];
    
    public function __construct(string $prenom , string $nom , string $naissance , Pays $pays) {
        $this->_prenom = $prenom ; 
        $this->_nom = $nom ; 
        $this->_naissance = new DateTime($naissance);
        $this->_pays = $pays ;
    }

    public function getPrenom(){
        return $this->_prenom;
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getNaissance(){
        return $this->_naissance->format("d-m-Y");
    }
    public function getPays(){
        return $this->_pays;
    }
    public function getJouer(){
        return $this->_jouer;
    }
    public function setPrenom(string $prenom){
        $this->_prenom= $prenom;
    }
    public function setNom(string $nom){
        $this->_nom= $nom;
    }
    public function setNaissance(string $naissance){
        $this->_naissance = new DateTime($naissance);
    }
    public function setPays(Pays $pays){
        $this->_pays= $pays;
    }
    public function setJouer(Jouer $jouer){
        array_push($this->_jouer,$jouer);
    }
    public function CalculAge(){
        $today = new DateTime();  
        $age = $this->_naissance->diff($today);
        return $age->format('%Y years');
    }

    public function __toString()
    {
        return $this->_prenom." ".$this->_nom." (".$this->CalculAge().") origine : ".$this->_pays ;
    }

    public function Equipes(){
        $result =$this->_prenom." ". $this->_nom .'<br>';
        foreach($this->_jouer  as $equipe ){
            $result.= $equipe ."<br>";
        }
        return $result ;
    }











}
?>