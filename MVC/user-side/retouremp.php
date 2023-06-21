<?php
require_once('../controllers/empcont.php');
$empcont=new EmpCont();
$empcont->retour_emp($_POST['codeetud'],$_POST['codeliv']);
echo"<script> alert(\"Retour effectuée avec succé! \");</script>";
echo"<form name=\"formb\" action=\"AcceuilEmp.html\" style=\"margin: auto; width: 620px;padding-top: 100px;\">
    <fieldset>
        <legend>Retourner un livre</legend> 
    <table style=\"margin: auto;\">
    <tr>
    <td><input type=\"reset\" name=\"Annuler\" value=\"Annuler\"></td>
    <td><input type=\"submit\" name=\"retour\" value=\"Acceuil Emprunt\"></td>
    </tr>";
?>