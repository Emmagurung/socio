<?php
require("database.php");
require("session.php");

if(!$isLoggedIn){
  header("Location: index.php");
}
if(isset($_POST['post'])){
  $imagepath=null;
  if(isset($_FILES["image"])&& $_FILES["image"]["name"]){
    $targetDir = "uploads/";
    if(!is_dir($targetDir)){
      mkdir($targetDir,0755,true);

    }
    $filename=basename($_FILES["image"]["name"]);
    $imagepath=$targetDir.$filename;
    move_uploaded_file($_FILES["image"]["tmp_name"],$imagepath);
  }
  $query = $pdo->prepare("INSERT INTO posts (text, user_id,image) VALUES (?,?,?)");
  $query->execute([$_POST['post'], $user->id, $imagepath]);
  }
  
$query = $pdo->prepare("SELECT * FROM posts INNER JOIN users ON users.id=posts.user_id ORDER BY posts.id desc");
$query->execute();
$posts = $query->fetchALL(PDO::FETCH_OBJ);
// print_r($posts);
require("./views/home.view.php");
?>
