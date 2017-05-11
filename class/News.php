<?php

class News
{
    private $publish_date;
    private $author;
    private $content;

    public function getPublishDate()
    {
        return $this->publish_date;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setPublishDate($publish_date)
    {
        $this->publish_date = $publish_date;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }
}