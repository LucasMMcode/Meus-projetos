<?php
session_start();
include "conexao.php";
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["imagem"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["imagem"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  // Allow certain file formats
if( $imageFileType != "png") {
  echo "Sorry, only PNG files are allowed.";
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["imagem"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

  if (isset($_POST['submit'])) {
        
    $nomep = $_POST['nomep'];
    $preco = $_POST['preco'];
    $nomearquivo = $_POST['nomearquivo'];

    $sql = "select * from produtos where `Caminhoimg` = '$nomearquivo'";
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);
    if($count==1){
        $uploadOK = 0;
        echo  '<script>
        window.location.href = "cadastrap.php";
        alert("Produto existente")
        </script>';
    }
    else{
        $sql = "INSERT INTO produtos (Nome,Preco,Caminhoimg) VALUES (\"$nomep\",\"$preco\",\"$nomearquivo\");";
        $result = mysqli_query($conn, $sql);

        echo $sql.'<br><script>
        '.'window.location.href = "produtos.php";'.
        'alert("Produto cadastrado")
        </script>';
    }

}
?>