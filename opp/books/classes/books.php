<?php
class books{
public $name;
public $url;
public function __construct(array $book)
{
    $this->name=$book['name'];
    $this->url=$book['file_path'];
}
}
class bookPDF extends books{
public $img='icons/pdf.png';
public function show(){
    echo "<p>";
    echo "<img src={$this->img} alt='img'><a href={$this->url}>$this->url</a>";
    echo "</p>";
}
}
class bookDOC extends books{
    public $img='icons/doc.png';
    public function show(){
        echo "<p>";
        echo "<img src={$this->img} alt='img'><a href={$this->url}>$this->url</a>";
        echo "</p>";
    }
}
class bookTXT extends books{
    public $img='icons/txt.png';
    public function show(){
        echo "<p>";
        echo "<img src=$this->img alt='img'><a href={$this->url}>$this->url</a>";
        echo "</p>";
    }
}