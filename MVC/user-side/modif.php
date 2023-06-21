<?php
require_once('../controllers/etudCont.php');
$econt=new EtudCon();
$res=$econt->getetud($_POST['codeetud']);
?>
<form name = 'formb' method='post' action='modifaction.php' style="margin: auto; width: 620px;padding-top: 100px;">
    <fieldset>
        <legend>Modifier un Etudiant</legend> 
<table style="margin: auto;">
<tr>
<td>Code Etudiant</td>
<td><input type = "text" name = "codeetud" value = "<?php echo $res['CodeEtudiant'] ?>"/></td></tr>
<tr>
<td>Nom Etudiant</td>
<td><input type = "text" name = "nometud" value = "<?php echo $res['Nom'] ?>"/></td>
</tr>
<tr>
<td>Prenom Etudiant</td>
<td><input type = "text" name = "prenometud" value = "<?php echo $res['Prenom'] ?>"/></td>
</tr>
<tr>
<td>Adresse Etudiant</td>
<td><input type = "text" name = "adretud" value = "<?php echo $res['Adresse'] ?>"/></td>
</tr>
<tr>
<td>Classe Etudiant</td>
<td><input type = "text" name = "classe" value = "<?php echo $res['Classe'] ?>"/></td>
</tr>
<tr><td><input type = "submit" value= "modifier" name = "mod"/></td></tr>
</table></form>