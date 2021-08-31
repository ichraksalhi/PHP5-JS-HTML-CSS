<?PHP
include "../entities/produit.php";
include "../core/produitC.php";



function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 

// Filtre du validation 
//&lt;script&gt;location.href('http://www.hacked.com')&lt;/script&gt;

if (isset($_POST['prix_initial']) and isset($_POST['prix_final']) and isset($_POST['pourcentage']) and isset($_POST['desc']) and isset($_FILES['image']))
{
    
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
         
            
$pro =new  promo(test_input($_POST['prix_initial']),test_input($_POST['prix_final']),test_input($_POST['pourcentage']),test_input($_POST['desc']),$_FILES['image']['name']);

$controlpromo =new PromoC();
$controlpromo->ajouterpromo($pro);
header('Location: produit.php');
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

}else{
	echo "vérifier les champs";
}
//*/

?>