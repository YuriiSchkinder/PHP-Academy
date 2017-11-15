<?php
class table{
   public  $officeCode;
    public $city;
    public $phone;
    public $state;
    public $country;
    public $postalCode;
    public $territory;
    public function createTable (array $table){
        $this->officeCode=$table['officeCode'];
        $this->city=$table['city'];
        $this->phone=$table['phone'];
        $this->state=$table['state'];
        $this->country=$table['country'];
        $this->postalCode=$table['postalCode'];
        $this->territory=$table['territory'];
    }
}
?>