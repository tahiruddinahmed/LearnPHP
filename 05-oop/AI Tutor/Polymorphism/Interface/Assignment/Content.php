<?php 

interface Content {
    /**
     * Render HTML Output
     * 
     * @return string 
     */
    public function render() : string;
}