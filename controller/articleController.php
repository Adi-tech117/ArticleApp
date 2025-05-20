<?php

Class Article {
    private $conn;

    Public function __construct($db){
        $this->conn = $db;
    }

    public function create($title, $content){
        $newArticle = $this->conn->prepare("INSERT INTO article(title, content) values (?, ?)");
        return $newArticle->execute([$title, $content]);
    }

    Public function getAll(){
        $articles = $this->conn->prepare("SELECT * FROM article");
        $articles->execute();
        return $articles;
    }

    public function getDatabyId($id){
        $article = $this->conn->prepare("SELECT * FROM article WHERE id=?");
        $article->execute([$id]);
        return $article->fetch(PDO::FETCH_ASSOC);

    }
    public function update($id, $title, $content){
        $newArticle = $this->conn->prepare("UPDATE article SET title = ?, content = ? WHERE id = ?");
        return $newArticle->execute([$title, $content, $id]);
    }
     public function delete($id){
        $Article = $this->conn->prepare("DELETE FROM article WHERE id = ?");
        return $Article->execute([$id]);
    }

}


?>