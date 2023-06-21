<?php
require_once('../controllers/etudCont.php');
require_once('../models/etudiant.php');
$ecnt=new EtudCon();
$etud=new Etudiant();
$etud->setEcode($_POST['codeetud']);
$etud->setEnom($_POST['nometud']);
$etud->setEprenom($_POST['prenometud']);
$etud->setEadresse($_POST['adretud']);echo "+++++++++++++". $_POST['adretud'];
$etud->setEclasse($_POST['classe']);
$ecnt->modifier_etudiant($etud);
echo"<script> alert(\"Modification effectuée avec succée! \");</script>";
echo"<form name=\"formb\" action=\"Acceuiletud.html\" style=\"margin: auto; width: 620px;padding-top: 100px;\">
    <fieldset>
        <legend>Modification etudiant: Modification effectuée</legend> 
    <table style=\"margin: auto;\">
    <tr>
    <td><input type=\"reset\" name=\"Annuler\" value=\"Annuler\"></td>
    <td><input type=\"submit\" name=\"retour\" value=\"Acceuil Etudiant\"></td>
    </tr>";
   
?>