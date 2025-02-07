<?php 

require_once 'Content.php';

class Page implements Content {
    public $title;
    public $mainContent;

    public function __construct($title, $mainContent)
    {
        $this->title = $title;
        $this->mainContent = $mainContent;
    }

    public function render(): string {
        $output = "
        <h1>{$this->title}</h1>
        <p>{$this->mainContent}</p>
        
        ";

        return $output;
    }
}