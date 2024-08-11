<?php

trait comp1{
    public function total_emp(){
        echo 500;
    }

}
trait comp2{

    public function totalBranch(){
        echo 10;

    }

}
class Company{
use comp1;
use comp2;

}

$data = new Company;
$data->total_emp() ;
echo "\n";
$data->totalBranch();





?>