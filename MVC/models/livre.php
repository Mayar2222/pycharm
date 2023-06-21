<?php
class Livre
{
private $livre_code;
private $livre_titre;
private $livre_auteur;
private $livre_date_ed;
/* Constructeur de la classe */
function __construct($livre_code="",$livre_titre="",$livre_auteur="",$livre_date_ed="")
{
    $this->livre_code=$livre_code;
    $this->livre_titre=$livre_titre;
    $this->livre_auteur=$livre_auteur;
    $this->livre_date_ed=$livre_date_ed;
}
public function getLcode(){
	return $this->livre_code;
}

public function getLtitre(){
	return $this->livre_titre;
}

public function getLaut(){
	return $this->livre_auteur;
}

public function getLdate(){
	return $this->livre_date_ed;
}
public function setLcode($livre_code){
	if($livre_code!=0)$this->livre_code=$livre_code;
}

public function setLtitre($livre_titre){
	if($livre_titre!=0) $this->livre_titre=$livre_titre;
}

public function setLaut($livre_auteur){
	 if($livre_auteur!=0)$this->livre_auteur=$livre_auteur;
}

public function setLdate($livre_date_ed){
	if($livre_date_ed !=0) $this->$livre_date_ed=$livre_date_ed;
}

}?>