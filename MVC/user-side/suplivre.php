<?php
require_once('../controllers/livrecont.php');
$lcnt=new Livrecont();
$lcnt->supprimer_liv($_POST['codelivre']);

echo"<script> alert(\"Suppression effectuée avec succée! \");</script>";
echo"<form name=\"formb\" action=\"Acceuillivre.html\" style=\"margin: auto; width: 620px;padding-top: 100px;\">
    <fieldset>
        <legend>Suppression d'un livre: Suppression effectuée </legend> 
    <table style=\"margin: auto;\">
    <tr>
    <td><input type=\"reset\" name=\"Annuler\" value=\"Annuler\"></td>
    <td><input type=\"submit\" name=\"retour\" value=\"Acceuil Livre\"></td>
    </tr>";
?>