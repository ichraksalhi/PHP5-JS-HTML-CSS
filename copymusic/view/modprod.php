<?PHP
include "../entities/produit.php";
include "../core/produitC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['marque']) and isset($_POST['prix']) and isset($_POST['desc']) and isset($_POST['select']) and isset($_FILES['image']))
{  
    
    // upload image avec filtre ///////////////////////////////
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        
            
$pro =new produit($_POST['nom'],$_POST['marque'],$_POST['prix'],$_POST['desc'],$_FILES['image']['name'],$_POST['select']);

$controlproduit =new ProduitC();
$controlproduit->modifierproduit($pro,$_POST['id']);
   header('Location: produit.php');
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
        
    
/////////////////
//end upload image avec filtre ///////////////////////////////

    
    
    
    
    
    
    

}else {

echo "<script>alert(\"vérifier les champs\")</script>";

}
?>