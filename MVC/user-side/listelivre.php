<?php
require_once('../controllers/livrecont.php');
$lcont=new Livrecont();
$res=$lcont->listeLivress();
?>
<form name = 'formb' method='post' action='Acceuillivre.html' style="margin: auto; width: 620px;padding-top: 100px;">
    <fieldset>
        <legend>Liste des livres</legend> </br></br>
    <table border=1 style='margin: auto;'>
    <tr>
    <td>Code Livre</td>
    <td>Titre</td>
    <td>Auteur </td>
    <td>Date d'edition</td>
</tr>
<?php
if (is_array($res) || is_object($res)){
    foreach($res as $row)
    {
    echo "<tr>
    <td>$row[CodeLivre]</td>
    <td>$row[Titre]</td>
    <td>$row[Auteur]</td>
    <td>$row[DateEdition]</td>";
    }
}
?>
<tr><td colspan="5">
<input type="submit" name="Acceuil" value="Acceuil Livre"></td></tr>
</table>
</form>
