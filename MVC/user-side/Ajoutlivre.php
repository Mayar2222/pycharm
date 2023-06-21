<?php

require_once('../controllers/livrecont.php');
require_once('../models/livre.php');
$liv_code=$_POST['codelivre'];
$liv_titre=$_POST['titre'];
$liv_aut=$_POST['auteur'];
$liv_date=$_POST['date'];
$liv=new livre($liv_code,$liv_titre,$liv_aut,$liv_date);
$lcnt=new Livrecont();
$res=$lcnt->nouveauLiv($liv);
echo"<script> alert(\"Insertion effectuée avec succée! \");</script>";
echo"<form name=\"formb8\" action=\"Acceuillivre.html\" style=\"margin: auto; width: 620px;padding-top: 100px;\">
    <fieldset>
        <legend>Nouveau Livre: Insertion effectuée</legend> 
    <table style=\"margin: auto;\">
    <tr>
    <td><input type=\"reset\" name=\"Annuler\" value=\"Annuler\"></td>
    <td><input type=\"submit\" name=\"retour\" value=\"Acceuil Livre\"></td>
    </tr>";

?>