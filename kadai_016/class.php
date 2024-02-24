<!DOCTYPE html>
<html lang="ja">    

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <!-- PHPの埋め込み -->
 <?php
 class Food{
    private $name;
    private $price;

    public function __construct(string $name, int $price) {
    $this->name = $name;
    $this->price = $price;
    }

}

 class Animal{
    private $name;
    private $height;
    private $weight;

    public function __construct(string $name, int $height, int $weight){
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
    }

 }

    // インスタンス化する
    $food = new Food('potato', 250);
    $animal = new Animal('dog', 60, 5000);

    print_r($food);
    print_r($animal);
?>

</body>

</html>