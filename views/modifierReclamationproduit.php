<HTML>
<head>
	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    
    <title>Musica - Music Template</title>

    <!-- Favicon -->
    <link rel="icon" href="../musica2/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../musica2/style.css">
</head>
<body>
<?PHP
include "../entities/reclamationproduit.php";
include "../core/reclamationproduitC.php";
include "../session/session.php";

if(Session::getUserSession()==null) {
	header('Location: ../session/login.php');
}
$user = Session::getUserSession();
$idUser=$user->getId() ;
$etat=0; 
//echo $idUser ;


if (isset($_GET['id'])){
	$reclamationproduitC=new ReclamationproduitC();
    $result=$reclamationproduitC->recupererReclamationproduit($_GET['id']);
	foreach($result as $row){
        $id=$row['id'];
        $idClt=$row['idClt'];
		$typeP=$row['typeP'];
		$categorieP=$row['categorieP'];
        $numeroP=$row['numeroP'];
        $descriptionP=$row['descriptionP'];
        $numerofacture=$row['numerofacture'];
      


?>
<!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(../musica2/img/bg-img/breadcumb4.jpg);">
        <div class="bradcumbContent">
            <h2> modifier reclamation</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area mt-30 section-padding-100-0">
        <div class="container">

            <div class="row">

                <div class="col-12 col-lg-6">
                    <div class="contact-content mb-100">
                     
              

                        <!-- Contact Social Info 
                        <div class="contact-social-info mt-50">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                        -->

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon">
                                <img src="../musica2/img/core-img/placeholder.png" alt="">
                            </div>
                            <h6>Tunis</h6>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon">
                                <img src="../musica2/img/core-img/message.png" alt="">
                            </div>
                            <h6>+216 52272411</h6>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon">
                                <img src="../musica2/img/core-img/smartphone.png" alt="">
                            </div>
                            <h6>Gaboudia@gmail.com</h6>
                        </div>
                    </div>
                </div>
<form method="POST">
<table>

<tr>
<td>typeP</td>
<td><input class="form-control" type="text" name="typeP" value="<?PHP echo $typeP ?>"></td>
</tr>
<tr>
<td>categorieP</td>
<td><input class="form-control" type="text" name="categorieP" value="<?PHP echo $categorieP ?>"></td>
</tr>
<tr>
<td>numeroP</td>
<td><input class="form-control" type="text" name="numeroP" value="<?PHP echo $numeroP ?>"></td>
</tr>
<tr>
<td>descriptionP</td>
<td><input class="form-control" type="text" name="descriptionP" value="<?PHP echo $descriptionP ?>"></td>
</tr>
<tr>
<td>numerofacture</td>
<td><input class="form-control" type="text" name="numerofacture" value="<?PHP echo $numerofacture ?>"></td>
</tr>
<tr>
<td></td>
<td><input class="btn musica-btn mt-30" type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
    
    $reclamationproduit=new reclamationproduit($idClt,$_POST['typeP'],$_POST['categorieP'],$_POST['numeroP'],$_POST['descriptionP'],$_POST['numerofacture'],$etat);
    $reclamationproduit->setId($id);
    $reclamationproduitC->modifierReclamationproduit($reclamationproduit,$_POST['id_ini']);
    
	echo $_POST['id_ini'];
	//header('Location: afficherReclamationproduit.php');
}
?>
</body>
</HTMl>