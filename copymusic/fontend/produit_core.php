<?php

?>

<form method="get" action="ajoutertopanier.php" >
<table>
<caption>Ajouter Porduit a mon panier</caption>
<tr>
<td>poduit</td>
<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
<input type="hidden" name="panier">
<td><input type="submit" name="ajouter" value="add to my cart"></td>
</tr>
</table>
</form>
</body>
</HTMl>
