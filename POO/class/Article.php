<?php

namespace POO\Class;

use PDO;
use POO\Class\ConstInfo as appInfo;

class Article
{
   
    public function __construct(
        private int       $id,
        private int       $author,
        private string    $message,
        private \DateTime $createdAt,
        private string    $article,
        private int       $categorie,
    )
    {}

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Article
     */
    public function setId(int $id): Article
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getAuthor(): int
    {
        return $this->author;
    }

    /**
     * @param int $author
     * @return Article
     */
    public function setAuthor(int $author): Article
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return Article
     */
    public function setMessage(string $message): Article
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return Article
     */
    public function setCreatedAt(\DateTime $createdAt): Article
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getArticle(): string
    {
        return $this->article;
    }

    /**
     * @param string $article
     * @return Article
     */
    public function setArticle(string $article): Article
    {
        $this->article = $article;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategorie(): int
    {
        return $this->categorie;
    }

    /**
     * @param int $categorie
     * @return Article
     */
    public function setCategorie(int $categorie): Article
    {
        $this->categorie = $categorie;
        return $this;
    }

    //methode perso
    public static function getAllArticle()
    {
        $pdo = new PDO(appInfo::DB_DSN, appInfo::DB_USER, appInfo::DB_PWD);
        return $pdo->query('select * from article')->fetchAll(PDO::FETCH_OBJ);
    }

    public function register(){
        //requete insert PDO
    }
}