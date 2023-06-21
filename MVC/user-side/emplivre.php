<?php
require_once('../controllers/etudCont.php');
require_once('../controllers/livrecont.php');
$lcont=new Livrecont();
$resliv=$lcont->listeLivress();
$econt=new EtudCon();
$reset=$econt->listeEtudiants();
?>
<form name="formb" method="post" action="emplivreaction.php" style="margin: auto; width: 620px;padding-top: 100px;">
    <fieldset>
        <legend>Emprunter livre</legend> 
    <table style="margin: auto;">
        Veuillez selectionner le code de votre livre:
        <tr>
            <td width="37%">Code Livre</td>
            <td width="63%">
                <select name="emplivre">
                    <?php
                        foreach($resliv as $row)
                        {
                        echo "<option value=\"$row[CodeLivre]\">$row[CodeLivre]</option>";
                        }?>
                </select>
            </td></br>
        </tr>
        <tr>
            <td width="37%">Code Etudiant</td>
            <td width="63%">
                <select name="empetud">
                    <?php
                        foreach($reset as $row)
                        {
                        echo "<option value=\"$row[CodeEtudiant]\">$row[CodeEtudiant]</option>";
                        }?>
                </select>
            </td></br>
        </tr>
        <tr>
            <td>Date</td>
            <td><input type="text" name="date" id ="date" value="<?php echo date('Y-m-d'); ?>" /></td>
        </tr>
<tr><td colspan="5">
<input type="submit" name="Emprunter" value="Emprunter">
<input type="reset" name="Annuler" value="Annuler"></td></tr>
</table>
</form>
