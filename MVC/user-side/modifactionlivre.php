<?php
require_once('../controllers/livrecont.php');
require_once('../models/livre.php');
$lcont=new Livrecont();
$l=new Livre();
$l->setLcode($_POST['codelivre']);
$l->setLtitre($_POST['titre']);
$l->setLaut($_POST['auteur']);
$l->setLdate($_POST['date']);
$lcont->modifier_livre($l);
echo"<script> alert(\"Modification effectuée avec succée! \");</script>";
echo"<form name=\"formb\" action=\"Acceuillivre.html\" style=\"margin: auto; width: 620px;padding-top: 100px;\">
    <fieldset>
        <legend>Modification Livre: Modification effectuée</legend> 
    <table style=\"margin: auto;\">
    <tr>
    <td><input type=\"reset\" name=\"Annuler\" value=\"Annuler\"></td>
    <td><input type=\"submit\" name=\"retour\" value=\"Acceuil Livre\"></td>
    </tr>";
?>