<?php
class Emprunter
{
/* attributs de la classe emp: on va verifier si les emprents entrainnent la sup du livre de la table livre*/
private $empl_code;
private $empet_code;
private $emp_date;
/* Constructeur de la classe */
function __construct($empl_code="",$empet_code="",$emp_date="")
{
    $this->empl_code=$empl_code;
    $this->empet_code=$empet_code;
    $this->emp_date=$emp_date;
}
public function getLecode(){
	return $this->empl_code;
}

public function getEecode(){
	return $this->empet_code;
}

public function getLedate(){
	return $this->emp_date;
}

public function setLecode($empl_code){
	if($empl_code!=0)$this->empl_code=$empl_code;
}

public function setEecode($empet_code){
	if($empet_code!=0) $this->empet_code=$empet_code;
}
public function setLedate($emp_date){
	if($emp_date!=0) $this->emp_date=$emp_date;
}
}?>