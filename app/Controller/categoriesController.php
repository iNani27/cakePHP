<?php
class CategoriesController extends AppController{
    function getCat(){
        $c = $this->Category->find("all");
        return($c);
    }
}
?>
