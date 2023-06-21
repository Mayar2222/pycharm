<?php
class Etudiant
{
/* attributs de la classe utilisateur*/
private $etud_code;
private $etud_nom;
private $etud_prenom;
private $etud_adresse;
private $etud_classe;
/* Constructeur de la classe */
function __construct($etud_code="",$etud_nom="",$etud_prenom="",$etud_adresse="",$etud_classe="")
{
    $this->etud_code=$etud_code;
    $this->etud_nom=$etud_nom;
    $this->etud_prenom=$etud_prenom;
    $this->etud_adresse=$etud_adresse;
    $this->etud_classe=$etud_classe;
}
public function getEcode(){
	return $this->etud_code;
}

public function getEnom(){
	return $this->etud_nom;
}

public function getEprenom(){
	return $this->etud_prenom;
}

public function getEadresse(){
	return $this->etud_adresse;
}
public function getEclasse(){
	return $this->etud_classe;
}
public function setEcode($etud_code){
	$this->etud_code=$etud_code;
}

public function setEnom($etud_nom){
	 $this->etud_nom=$etud_nom;
}

public function setEprenom($etud_prenom){
	 $this->etud_prenom=$etud_prenom;
}

public function setEadresse($etud_adresse){
	 $this->etud_adresse=$etud_adresse;
}
public function setEclasse($etud_classe){
	 $this->etud_classe=$etud_classe;
}
}?>