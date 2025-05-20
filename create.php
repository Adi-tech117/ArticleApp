<?php
require_once('config/db.php');
require_once('controller/articleController.php');

$db = new DATABASE();
$conn = $db->getConnection();
$article= new Article($conn);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $article->create($_POST['title'], $_POST['content']);
    header("Location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container my-5">
        <h2>Tambah Artikel</h2>
        <form method="POST">
        <div class="mb-3">
            <label class="form-label">Title Article</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Content Article</label>
            <textarea name="content" Class="form-control" id=""></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
    </div>
    
</body>
</html>