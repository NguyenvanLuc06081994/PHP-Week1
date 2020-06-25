<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <input type="text" name="surname" placeholder="surname">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="birth" placeholder="date of birth">
        <input type="text" name="address" placeholder="address">
        <input type="text" name="position" placeholder="position">
        <input type="submit" value="ADD">
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $birth = $_POST['birth'];
    $address = $_POST['address'];
    $position = $_POST['position'];

include "personManager/person.php";
include "personManager/personManager.php";
$employee = new Employee($surname,$name,$birth,$address,$position);
$manager = new EmployeeManager();
$manager->add($employee);
//$duong = new Employee("duong","xi ke","12-02-2020","bac giang", "td");
//$manager->add($duong);
$employees = $manager->getEmployee();
$manager->display();
//$manager->editEmployee($tung,$surname,$name,$birth,$address,$position);
//$manager->display();
}
