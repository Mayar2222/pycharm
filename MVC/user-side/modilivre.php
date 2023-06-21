<?php
require_once('../controllers/livrecont.php');
$lcont=new Livrecont();
$res=$lcont->getLcode($_POST['codelivre']);
?>
<form name = 'formb' method='post' action='modifactionlivre.php' style="margin: auto; width: 620px;padding-top: 100px;">
    <fieldset>
        <legend>Modifier un Livre</legend> 
<table style="margin: auto;">
<tr>
<td>Code Livre</td>
<td><input type = "text" name = "codelivre" value = "<?php echo $res['CodeLivre'] ?>"/></td></tr>
<tr>
<td>Titre</td>
<td><input type = "text" name = "titre" value = "<?php echo $res['Titre'] ?>"/></td>
</tr>
<tr>
<td>Auteur</td>
<td><input type = "text" name = "auteur" value = "<?php echo $res['Auteur'] ?>"/></td>
</tr>
<tr>
<td>Date</td>
<td><input type = "text" name = "date" value = "<?php echo $res['DateEdition'] ?>"/></td>
</tr>
<tr><td><input type = "submit" value= "modifier" name = "mod"/></td></tr>
</table></form>