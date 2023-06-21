<?php
include_once('../models/etudiant.php') ;
include_once('../database/Connexion.php');
class Livrecont extends Connexion{
function __construct() {
parent::__construct();
}
function nouveauLiv(Livre $l)
{
$query="insert into livre(CodeLivre,Titre,Auteur,DateEdition) values (?,?,?,?)";
$res=$this->pdo->prepare($query);
$aryy =array($l->getLcode(),$l->getLtitre(),$l->getLaut(),$l->getLdate()) ;
//var_dump($aryy);
return $res->execute($aryy);
}
function supprimer_liv($code)
{
$query="DELETE FROM livre WHERE CodeLivre=?";
$res=$this->pdo->prepare($query);
$aryy= array($code);
return $res->execute($aryy);}
function listeLivress()
{
$query="SELECT * FROM livre";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
function getLcode($code)
{
$query="SELECT * FROM livre where CodeLivre=?";
$res = $this->pdo->prepare($query);
$res->execute(array($code));
$array= $res->fetch();
return $array;
}
function recherche($champ,$val)
{
$query="SELECT * FROM livre where ?=?";
$res=$this->pdo->prepare($query);
$aryy= array($champ,$val);
return $res->execute($aryy);
}
function modifier_livre(Livre $l)
{
$query="UPDATE livre SET Titre=?, Auteur=? ,DateEdition=? WHERE CodeLivre=? ";
$res=$this->pdo->prepare($query);
$aryy =array($l->getLtitre(),$l->getLaut(),$l->getLdate(),$l->setLcode()) ;
return $res->execute($aryy);
}

}
?>
