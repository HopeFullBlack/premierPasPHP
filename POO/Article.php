<?php

namespace POO;

use PDO;

class Article
{
    private const DB_HOST = 'localhost';
    private const DB_NAME = 'blogmano';
    private const DB_USER = 'blogmano';
    private const DB_PWD = '8H!*SE]FOSeDF7K7';
    private const DB_DSN = 'mysql:dbname=' . self::DB_NAME . ';host=' . self::DB_HOST . ';port=3306;charset=utf8';

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
        $pdo = new PDO(self::DB_DSN, self::DB_USER, self::DB_PWD);
        return $pdo->query('select * from article')->fetchAll(PDO::FETCH_OBJ);
    }

    public function register(){
        //requete insert PDO
    }
}