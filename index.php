<?php
system("clear");
require_once "./autoload.php";

// $myself = (Object) [
//     "name" => "Kyaw",
//     "age" => 21
// ];

// var_dump($myself->name);
// $fruitOne = new Fruit("lee","bl");
// $fruitOne->name = "apple";
// $fruitOne->color = "red";
// $fruitOne->price = 1000;
// var_dump($fruitOne->oopMethod(" Gyi bar byar"));

// $studentOne = new Student("Kyaw Kyaw","male","2002","Bago");
// print($studentOne->showFullName());
// print($studentOne->myself());

// $doubtMen = new Db("doubtMen");
// print_r($doubtMen->update(8,[
//     "name" => "Soe",
//     "money" => 6000
// ]));

// var_dump($doubtMen->show(18));

// print_r($users->delete(4));

// $fileWriterOne = new FileWriter("Text.json");
// $fileWriterOne->write(["name" => "Kyaw Zin Win"]);
// $fileWriterOne->write(["name" => "Kyaw Zin Win"]);
// $fileWriterOne->write(["name" => "Kyaw Zin Win"]);

// $html = new FileWriter("home.html");
// $html->write("<h1>Hello World!</h1>");

// $one = new One;
// $one->showName();

$queryBuilder = new QueryBuilder("doubtMen");
print_r($queryBuilder->where("id","=",3)->orWhere("id","=",4)->order("name","DESC")->sql());