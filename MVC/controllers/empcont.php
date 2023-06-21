<?php
include_once('../models/emprunter.php') ;
include_once('../database/Connexion.php');
class EmpCont extends Connexion{
function __construct() {
parent::__construct();
}
function nouveauEmp(Emprunter $el)
{
$query="insert into emprunter (CodeEtudiant,CodeLivre,DateEmprunt) values (?,?,?)";
$res=$this->pdo->prepare($query);
$aryy =array($el->getEecode(),$el->getLecode(),$el->getLedate()) ;
return $res->execute($aryy);

}
function listeEmp()
{
$query="SELECT * FROM emprunter";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
function retour_emp($empet_code,$empl_code)
{
$query="DELETE FROM emprunter WHERE CodeEtudiant=? and CodeLivre=?";
$res=$this->pdo->prepare($query);
$aryy=array($empet_code,$empl_code);
return $res->execute($aryy);
}
}
