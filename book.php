<?php
    class Book {
        var $title;
        var $author;
        var $pages;

        function __construct($aTitle, $aAuthor, $aPages) {
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }
    }
 ?>