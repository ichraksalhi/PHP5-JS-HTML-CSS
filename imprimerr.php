<?php
include "core/ReclamationproduitC.php";
//include "include_once dirname(_FILE_) . '/../config.php";
//include "config.php";


ob_start();
?>
<page backtop="20mm">
	 <h1> Toutes les reclamations </h1>
		<table style="width:100%;border: 1px dashed">
		<tr>
			

                          <th  style="width: 15%">id </th>
                          <th  style="width: 15%">typeP</th>
                          <th style="width: 15%">categorieP</th>
                          <th  style="width: 20%">numeroP</th>
                          <th style="width: 15%">descriptionP</th>
						   <th style="width: 15%">numerofacture</th>
                       

                      
		</tr>
		<?php
	
$reclamationproduit1C=new ReclamationproduitC ();
$listeReclamationproduits=$reclamationproduit1C->afficherReclamationproduits();
foreach($listeReclamationproduits as $row) {
			?>
		<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['typeP']; ?></td>
	<td><?PHP echo $row['categorieP']; ?></td>
	<td><?PHP echo $row['numeroP']; ?></td>
	<td><?PHP echo $row['descriptionP']; ?></td>
	<td><?PHP echo $row['numerofacture']; ?></td>
		</tr>
			<?php  
		}

?>
	</table>


</page>

<?php
$content= ob_get_clean();
require('html2pdf/html2pdf.class.php');
try{
$pdf=new html2pdf('p','A4','fr','true','UTF-8');
$pdf->pdf->SetDisplayMode('fullpage');

$pdf->writeHTML($content);
//$pdf->pdf->IncludeJS('print(true)');
$pdf->Output('test.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>