<?php
require_once('../controllers/empcont.php');
$empcont=new EmpCont();
$res=$empcont->listeEmp();
?>
<form name = 'formb' method='post' action='AcceuilEmp.html' style="margin: auto; width: 620px;padding-top: 100px;">
    <fieldset>
        <legend>Liste des livres</legend> </br></br>
    <table border=1 style='margin: auto;'>
    <tr>
    <td>Code Etudiant</td>
    <td>Cpde Livre</td>
    <td>Date Emprunt </td>
</tr>
<?php
if (is_array($res) || is_object($res))
{
    foreach($res as $row)
    {
    echo "<tr>
    <td>$row[CodeEtudiant]</td>
    <td>$row[CodeLivre]</td>
    <td>$row[DateEmprunt]</td>";
    }
}?>
<tr><td colspan="5">
<input type="submit" name="Acceuil" value="Acceuil Emprunt"></td></tr>
</table>
</form>
