<?php
require_once('../controllers/etudCont.php');
$econt=new EtudCon();
$res=$econt->listeEtudiants();
?>
<form name = 'formb' method='post' action='Acceuiletud.html' style="margin: auto; width: 620px;padding-top: 100px;">
    <fieldset>
        <legend>Liste des etudiants</legend> </br></br>
    <table border=1 style='margin: auto;'>
    <tr>
    <td>Code Etudiant</td>
    <td>Nom Etudiant</td>
    <td>Prenom Etudiant</td>
    <td>Adresse Etudiant</td>
    <td>Classe Etudiant</td>
</tr>
<?php
if (is_array($res) || is_object($res)){
    foreach($res as $row)
    {
    echo "<tr>
    <td>$row[CodeEtudiant]</td>
    <td>$row[Nom]</td>
    <td>$row[Prenom]</td>
    <td>$row[Adresse]</td>
    <td>$row[Classe]</td></tr>";
    }
}?>
<tr><td colspan="5">
<input type="submit" name="Acceuil" value="Acceuil"></td></tr>
</table>
</form>
