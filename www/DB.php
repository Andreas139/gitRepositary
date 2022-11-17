<?php

class DB
{
    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=cestovka", "root","dtb456");

    }

    /**
     * @return Post[]
     */
    public function getAllPosts() {
        $stm = $this->pdo->query("SELECT * FROM zakaznik");
        return $stm->fetchAll(PDO::FETCH_CLASS, Zakaznik::class);
    }

    public function storePost(Zakaznik $zakaznik){
        $sql = "INSERT INTO zakaznik (meno,priezvisko) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$zakaznik->meno,$zakaznik->priezvisko]);


    }
}