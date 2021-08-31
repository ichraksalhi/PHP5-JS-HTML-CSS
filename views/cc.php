<?PHP
include "../core/ReclamationproduitC.php";
$reclamationproduit1C=new ReclamationproduitC();
$listeReclamationproduits=$reclamationproduit1C->afficherReclamationproduits();

//var_dump($listeReclamtionproduits->fetchAll());
?>
<table border="1">
<tr>
<td>Id</td>
<td>TypeP</td>
<td>CategorieP</td>
<td>NumeroP</td>
<td>DescriptionP</td>
<td>numerofacture</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeReclamationproduits as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['typeP']; ?></td>
	<td><?PHP echo $row['categorieP']; ?></td>
	<td><?PHP echo $row['numeroP']; ?></td>
	<td><?PHP echo $row['descriptionP']; ?></td>
	<td><?PHP echo $row['numerofacture']; ?></td>
	<td><form method="POST" action="supprimerReclamationproduit.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierReclamationproduit.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


