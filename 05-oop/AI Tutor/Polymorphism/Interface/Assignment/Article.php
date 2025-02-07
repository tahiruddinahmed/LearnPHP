<?php 

require_once 'Content.php';

class Article implements Content {
    public $title;
    public $body;
    public $author;

    public function __construct($title, $body, $author)
    {
        $this->title = $title;
        $this->body = $body; 
        $this->author = $author;
    }

    public function render(): string {
        $output = "
        <h1>{$this->title}</h1>
        <p>Author: {$this->author}</p>
        <p>{$this->body}</p>
        
        ";

        return $output;
    }
}