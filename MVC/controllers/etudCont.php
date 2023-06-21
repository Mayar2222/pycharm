<?php
include_once('../models/etudiant.php') ;
include_once('../database/Connexion.php');
class EtudCon extends Connexion{
function __construct() {
parent::__construct();
}
function nouveauEtud(Etudiant $e)
{
$query="insert into etudiant(CodeEtudiant,Nom,Prenom,Adresse,Classe) values (?,?,?,?,?)";
$res=$this->pdo->prepare($query);
$aryy =array($e->getEcode(),$e->getEnom(),$e->getEprenom(),$e->getEadresse(),$e->getEclasse()) ;
//var_dump($aryy);
return $res->execute($aryy);
}
function supprimer_etud($code)
{
$query=" DELETE FROM etudiant WHERE CodeEtudiant=?";
$res=$this->pdo->prepare($query);
$aryy= array($code);
return $res->execute($aryy);
}
function modifier_etudiant(Etudiant $e)
{
$query="UPDATE etudiant SET Nom=?, Prenom=?,Adresse=?,Classe=? WHERE CodeEtudiant=? ";
$res=$this->pdo->prepare($query);
$aryy =array($e->getEnom(),$e->getEprenom(),$e->getEadresse(),$e->getEclasse(),$e->getEcode()) ;
return $res->execute($aryy);
}
function getetud($code)
{
$query="SELECT * FROM etudiant where CodeEtudiant=?";
$res = $this->pdo->prepare($query);
$res->execute(array($code));
$array= $res->fetch();
return $array;
}
function recherche($champ,$val)
{
$query="SELECT * FROM etudiant where ?=?";
$res = $this->pdo->prepare($query);
$aryy= array($champ,$val);
return $res->execute($aryy);
}
function listeEtudiants()
{
$query="SELECT * FROM etudiant";
$res = $this->pdo->prepare($query);
$res->execute();
return $res;
}








}

?>