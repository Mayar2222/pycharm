<?php
require_once('../controllers/etudCont.php');
require_once('../models/etudiant.php');
$etud_code=$_POST['codeetud'];
$etud_nom=$_POST['nometud'];
$etud_prenom=$_POST['prenetud'];
$etud_adresse=$_POST['adetud'];
$etud_classe=$_POST['clasetud'];
$etud=new Etudiant($etud_code,$etud_nom,$etud_prenom,$etud_adresse,$etud_classe);
$ecnt=new EtudCon();
$res=$ecnt->nouveauEtud($etud);
echo"<script> alert(\"Insertion effectuée avec succée! \");</script>";
echo"<form name=\"formb6\" action=\"Acceuiletud.html\" style=\"margin: auto; width: 620px;padding-top: 100px;\">
    <fieldset>
        <legend>Nouveau etudiant: Insertion effectuée </legend> 
    <table style=\"margin: auto;\">
    <tr>
    <td><input type=\"reset\" name=\"Annuler\" value=\"Annuler\"></td>
    <td><input type=\"submit\" name=\"retour\" value=\"Acceuil Etudiant\"></td>
    </tr>";

?>

