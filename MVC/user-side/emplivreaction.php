<?php
require_once('../controllers/empcont.php');
require_once('../models/emprunter.php');
$elcont=new EmpCont();
$emp=new Emprunter();
$emp->setLecode($_POST['emplivre']);
$emp->setEecode($_POST['empetud']);
$emp->setLedate($_POST['date']);
$res=$elcont->nouveauEmp($emp);
echo"<script> alert(\"Insertion effectuée avec succée! \");</script>";
echo"<form name=\"formb\" action=\"AcceuilEmp.html\" style=\"margin: auto; width: 620px;padding-top: 100px;\">
    <fieldset>
        <legend>Emprunter Livre</legend> 
    <table style=\"margin: auto;\">
    <tr>
    <td><input type=\"reset\" name=\"Annuler\" value=\"Annuler\"></td>
    <td><input type=\"submit\" name=\"retour\" value=\"Acceuil Emprunt\"></td>
    </tr>";

?>