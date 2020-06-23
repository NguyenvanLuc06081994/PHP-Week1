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
    <input type="text" name="user" placeholder="User Name">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="phoneNumber" placeholder="Phone Number">
    <input type="submit" value="SIGN">
</form>
<?php
    function loadRegistrations($filename){
        $jsondata = file_get_contents($filename);
        $arr_data = json_decode($jsondata,true);
        return $arr_data;
    }
//    $name = $_POST['user'];
//    $phone = $_POST['phoneNumber'];
//    $email = $_POST['email'];
//    if (empty($name)) {
//        echo "ban chua dien ten <br>";
//    }
//    if (empty($phone)) {
//        echo "ban chua dien sdt <br>";
//    }
//    if (empty($email)) {
//        echo "ban chua dien email";
//    }
//    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
//        echo "please. write full email!";
//    }
    function saveDataJSON($filename, $name, $email, $phone)
    {
        try {
            $contact = array('name' => $name, 'email' => $email, 'phone' => $phone);
            //chuyen du lieu json va mang
            $arr_data = loadRegistrations($filename);
            // day du lieu nguoi dung vao JSON
            array_push($arr_data, $contact);
            $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
            // viet du lieu json vao file data.json
            file_put_contents($filename, $jsondata);
            echo "luu du lieu thanh cong!";

        } catch (Exception $e) {
            echo "Error: ", $e->getMessage(), "\n";
        }

    }
    $nameErr = NULL;
    $emailErr = NULL;
    $phoneErr = NULL;
    $name = NULL;
    $email = NULL;
    $phone = NULL;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $has_error = false;

    if (empty($name)) {
        $nameErr = "Tên đăng nhập không được để trống!";
        $has_error = true;
    }

    if (empty($email)) {
        $emailErr = "Email không được để trống!";
        $has_error = true;
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Định dạng email sai (xxx@xxx.xxx.xxx)!";
            $has_error = true;
        }
    }

    if (empty($phone)) {
        $phoneErr = " Số điện thoại không được để trống!";
        $has_error = true;
    }

    if ($has_error === false) {
        saveDataJSON("data.json", $name, $email, $phone);
        $name = NULL;
        $email = NULL;
        $phone = NULL;
    }
}

?>
</body>
</html>