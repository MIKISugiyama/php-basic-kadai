<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_011</title>
 </head>
 
 <body>
  <p>
    <?php
      class Food {
        private $name;
        private $price;
        public function show_price(){
          echo $this->price;
        }
        public function __construct($name, $price){
          $this->name = $name;
          $this->price = $price;
        }
      }
      class Animal {
        private $name;
        private $height;
        private $weight;
        public function show_height(){
          echo $this->height;
        }
        public function __construct($name, $height, $weight){
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
      }
      $Food = new Food("potato",250);
      $Animal = new Animal("dog", 60, 5000);
      print_r($Food);
      echo "<br>";
      print_r($Animal);
      echo "<br>";
      $Food->show_price();
      echo "<br>";
      $Animal->show_height();
    ?>
  </p>
 </body>
</html>
