<?php
// $target_dir = "uploads/";
// if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["submit"])){
//    echo var_dump($_FILES['file_upload']);
//    $_target_file=$target_dir.basename($_FILES['file_upload']['name']);
//    echo "<br>".$_target_file;
//    $upload_result=move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file); 
//    echo "<h1>this is after upload</h1>";
//    echo "<br> the result is ".$upload_result;
//    if ($upload_result) {
//       echo "The file ". htmlspecialchars( basename( $_FILES["file_upload"]["name"])). " has been uploaded.";
//    }else {
//       echo "Sorry, there was an error uploading your file.";
//    }
// }
?>

<?php
$target_dir = __DIR__."/uploads/";
echo "<h2>".__DIR__."</h2>";
echo $_POST;
if($_SERVER['REQUEST_METHOD']=='POST' and isset($_POST['upload'])){
   echo var_dump($_FILES['fileToUpload']);
   $_target_file=$target_dir.basename($_FILES['fileToUpload']['name']);
   echo "<br> <h1>".$_target_file. "</h1>";  
   echo $_FILES['fileToUpload']['tmp_name'];
   if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$_target_file)){
   // if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], __DIR__.'/uploads/'. $_FILES["fileToUpload"]['name'])){
   // if (copy($_FILES['fileToUpload']['tmp_name'],$_target_file)){
      echo "<br><h1>success</h1>";
   }else {
      echo "<br><h1>failure</h1>";
   }
}
?>