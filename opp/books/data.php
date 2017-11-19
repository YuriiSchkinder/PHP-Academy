<?php
require_once 'classes/table.php';
require_once 'classes/books.php';
$sql= new table;
$arr=$sql->getBook();
$book=[];
foreach ($arr as $val) {
    $str = substr($val['file_path'], strrpos($val['file_path'], '.') + 1);
    if ($str == 'pdf') {
        $book[] = new bookPDF($val);
    }
    if ($str == 'doc') {
        $book[] = new bookDOC($val);
    }
    if ($str == 'txt') {
        $book[] = new bookTXT($val);
    }
}
foreach ($book as $val){
    $val->show();
}
?>