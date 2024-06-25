<?php

use LDAP\Result;

require_once "./autoload.php";

echo "<pre>";

///////////////////////////////////////////////////////////
// Test autoload
// echo "<pre>";
// $p = new Person("Zaw", 22, "male");
// print_r($p);
///////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////
// Inheritence Example

// $parentObj = new ParentClass;
// print_r($parentObj);

// $childObj = new Child("aaa", "bbb", "ccc", "ddd", "eee");
// print_r($childObj);
// echo $childObj->a;
// echo $childObj->b;
// echo $childObj->c;
// echo $childObj->x();
// echo $childObj->y();
// echo $childObj->z();
///////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////
// Model example
// $m = new Model;
// print_r($m->select()->limit(3)->all());

// Student class inherit model
// $student = new Student;
// print_r($student->select(["id", "name", "pocket_money"])->limit(3)->all());

// Batch class inherit model
// $batch = new Batch;
// print_r($batch->select()->all());

// Course class inherit model
// $course = new Course;
// print_r($course->select()->all());
///////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////
// Single Inheritence example
// $request = new Request;
// echo $request->get();
// echo $request->post();
// echo $request->file();
// echo $request->length();
///////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////
// Polymorphysim

// function animalSound(object $dog) {
//     return $dog->makeSound();
// }

// echo animalSound("hehe"); 
// $cat = new Cat;
// echo animalSound($cat);
//  it can only be use for one type of animal correctly, if you enter cat it still works but dont make sense

// function animalSound(Animal $animal) {
//     // return $animal->cute();
//     // return $animal->bite();
//     return $animal->makeSound();
// }

// $cat = new Cat;
// $dog = new Dog;
// echo animalSound($cat);
// echo animalSound($dog);
///////////////////////////////////////////////////////////


// require_once "./classes/Person.php";
// require_once "./classes/Phone.php";
// require_once "./classes/Db.php";
// require_once "./classes/FileWriter.php";
// require_once "./classes/QueryBuilder.php";
// require_once "./classes/FacebookUser.php";
// require_once "./classes/BankAccount.php";

// system("clear");
// echo "<pre>";



///////////////////////////////////////////////////////////
// $bankAccount = new BankAccount("Minn Khant Ko", "3000000");
// echo $bankAccount->checkBalance();
// echo "<br>";
// echo $bankAccount->deposit(5000000)->checkBalance();
// echo $bankAccount->setBalance(100)->getBalance();
///////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////
// $fbu = new FacebookUser("MKK", "asdffdsa", ["a", "b", "c"]);

// echo $fbu->facebookPassword;
// var_dump($fbu->posts);
///////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////
// EXAMPLE
// $qb = new QueryBuilder;
// // echo $qb->a()->getData();
// print_r($qb->a()->b()->c()->a()->getData());

// $db = new Db;
// $queryBuilder = new QueryBuilder("students");

// $students = $db->all($queryBuilder->select(["id", "name", "date_of_birth"])
//     ->where("gender_id", "=", 1)
//     ->where("pocket_money", ">", "900")
//     ->limit(20)
//     ->sql());

// print_r($students);
///////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////
// $fileWrite = new FileWriter(__DIR__ . "/notes/test.txt");
// $fileWrite->write("Hello World\n");
// $fileWrite->write("San Kyi Tar");
///////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////
// $db = new Db;
// $students = $db->all("SELECT * FROM students LIMIT 10");
// print_r($students);
///////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////
// $me = new Person("MKK", 25, "male");
// print_r($me);

// $you = new Person("Su Su", 21, "female");
// print_r($you);
///////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////
// $myPhone = new Phone;
// $myPhone->brand = "iPhone";
// $myPhone->model = "15 Pro Max";
// print_r($myPhone);
// echo $myPhone->makeCall();
///////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////
// $me = new Person;
// $me->name = "MKK";
// $me->age = 25;
// $me->gender = "male";
// echo "<br>";
// print_r($me);
// echo $me->name;
// echo "<br>";
// echo $me->speak("german");
// echo "<br>";
// echo $me->learn("anything");
// echo "<br>";

// $you = new Person;
// $you->name = "MKK";
// $you->age = 25;
// $you->gender = "male";
// print_r($you);
///////////////////////////////////////////////////////////