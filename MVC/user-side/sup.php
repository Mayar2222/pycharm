<?php
require_once('../controllers/etudCont.php');
$ecnt=new EtudCon();
$ecnt->supprimer_etud($_POST['codeetud']);
echo"<script> alert(\"Suppression effectuée avec succée! \");</script>";
echo"<form name=\"formb\" action=\"Acceuiletud.html\" style=\"margin: auto; width: 620px;padding-top: 100px;\">
    <fieldset>
        <legend>Suppression etudiant: Suppression effectuée </legend> 
    <table style=\"margin: auto;\">
    <tr>
    <td><input type=\"reset\" name=\"Annuler\" value=\"Annuler\"></td>
    <td><input type=\"submit\" name=\"retour\" value=\"Acceuil Etudiant\"></td>
    </tr>";
?>