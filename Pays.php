<?php 
class Pays {
    private string $_nom;
    private array $_equipes=[];


public function __construct(string $nom) {
    $this->_nom = $nom ;
}

public function getNom(){
    return $this->_nom ; 
}
public function getEquipe(){
    return $this->_equipes;
}
public function setNom(string $nom){
    $this->_nom=$nom;
}
public function setEquipe(Equipe $equipe){
    array_push($this->_equipes,$equipe);
}

public function __toString(){
    return "$this->_nom";
}
public function equipes(){
    $result="$this <br>";
    foreach($this->_equipes as $equipe){
        $result.=$equipe ."<br>"; 
    }
    return $result;
}


}
?>