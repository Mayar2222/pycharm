<?php
require_once('../controllers/etudCont.php');
$econt=new EtudCon();
$res=$econt->recherche($_POST['selectetud'],$_POST['val']);
if($res>0)
{
    echo"<script> alert(\"L'etudiant existe dans la base de donnée! \");</script>";
}
else
{
    echo"<script> alert(\"L'etudiant n'existe pas dans la base de donnée! \");</script>";
}
echo"<form name=\"formb\" action=\"Acceuiletud.html\" style=\"margin: auto; width: 620px;padding-top: 100px;\">
    <fieldset>
        <legend>Rechercher Etudiant </legend> 
    <table style=\"margin: auto;\">
    <tr>
    <td><input type=\"reset\" name=\"Annuler\" value=\"Annuler\"></td>
    <td><input type=\"submit\" name=\"retour\" value=\"Acceuil Etudiant\"></td>
    </tr>";
?>