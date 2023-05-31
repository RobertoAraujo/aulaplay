<?php
require_once 'vendor/autoload.php';

class video
{
    private ?int $id;
    private string $url;
    private string $titulo;

    public function __construct(?int $id, string $url, string $titulo)
    {
        $this->$id=$id;
        $this->$url=$url;
        $this->$titulo=$titulo;
    }

    public function id(): ?int 
    {
        return $this->id;
    }

    public function url(): String 
    {
        return $this->url;
    }
    public function titulo(): String 
    {
        return $this->titulo;
    }

}