<?php

class Food {
    public $name;
    public $price;

    public function show_price(){
        echo $this->price."<br>";
    }

    public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
    }
}

class Animal {
    public $name;
    public $height;
    public $weight;

    public function show_height(){
        echo $this->height.'<br>';
    }

    public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
}

$Food = new Food('玉ねぎ', 200);
$Animal = new Animal('ライオン', 100, 100);

print_r($Food);
echo "<br>";
print_r($Animal);
echo "<br>";
$Food->show_price();
$Animal->show_height();
?>