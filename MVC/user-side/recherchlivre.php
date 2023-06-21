<?php
require_once('../controllers/livrecont.php');
$lcont=new Livrecont();
$res=$lcont->recherche($_POST['selectlivre'],$_POST['val']);
if($res>0)
{
    echo"<script> alert(\"Le livre existe dans la base de donnée! \");</script>";
}
else
{
    echo"<script> alert(\"Le livre n'existe pas dans la base de donnée! \");</script>";
}
echo"<form name=\"formb\" action=\"Acceuillivre.html\" style=\"margin: auto; width: 620px;padding-top: 100px;\">
    <fieldset>
        <legend>Rechercher Livre</legend> 
    <table style=\"margin: auto;\">
    <tr>
    <td><input type=\"reset\" name=\"Annuler\" value=\"Annuler\"></td>
    <td><input type=\"submit\" name=\"retour\" value=\"Acceuil Livre\"></td>
    </tr>";
?>