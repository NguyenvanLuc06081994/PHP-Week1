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
<?php
$dictionary = array("hello" => "xin chao", "how" => "the nao", "book" => "sach", "computer" => "may tinh");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $searchWord = $_POST["search"];
    $flag = false;
    foreach ($dictionary as $key => $value) {
        if ($key === $searchWord) {
            echo "Tu " . $key . ".<br> Nghia cua tu : " . $value;
            echo "<br>";
            $flag = true;
        }
    }
    if ($flag === false) {
        echo "Khong tim thay";
    }
}
?>
<h2>Dictionary</h2>
<form action="" method="post">
    <input type="text" name="search" placeholder="Input Word">
    <input type="submit" id="submit" value="Search">
</form>
</body>
</html>