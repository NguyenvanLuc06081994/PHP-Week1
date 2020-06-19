<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 100%;

        }

        th, td {
            padding: 8px;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php
$customerList = array(
    "1" => array("ten" => "Mai văn Hoàn",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Hà Nội",
        "anh" => "https://hanoimoi.com.vn/Uploads/anhthu/2019/5/10/david_beckham.jpg"),
    "2" => array("ten" => "Nguyễn Văn Nam",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Bắc Giang",
        "anh" => "https://hanoimoi.com.vn/Uploads/anhthu/2019/5/10/david_beckham.jpg"),
    "3" => array("ten" => "Mai văn Hoàn",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Hà Nội",
        "anh" => "https://hanoimoi.com.vn/Uploads/anhthu/2019/5/10/david_beckham.jpg"),
    "4" => array("ten" => "Mai văn Hoàn",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Hà Nội",
        "anh" => "https://hanoimoi.com.vn/Uploads/anhthu/2019/5/10/david_beckham.jpg"),
    "5" => array("ten" => "Mai văn Hoàn",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Hà Nội",
        "anh" => "https://hanoimoi.com.vn/Uploads/anhthu/2019/5/10/david_beckham.jpg")
);

?>
<table border="1px solid black" cellspacing="0">
    <caption><h1>Danh Sách Khách Hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày Sinh</th>
        <th>Địa Chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php foreach ($customerList as $key => $values) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $values['ten'] . "</td>";
        echo "<td>" . $values['ngaysinh'] . "</td>";
        echo "<td>" . $values['diachi'] . "</td>";
        echo "<td><img src='" . $values['anh'] . "' width='60px' height='60px'> </td>";
        echo "</tr>";
    } ?>
    <!--    --><?php //foreach ($customerList as $key => $values): ?>
    <!--    <tr>-->
    <!--        <td> --><?php //echo $key ?><!--</td>-->
    <!--        <td> --><?php //echo $values['ten'] ?><!--</td>-->
    <!--        <td> --><?php //echo $values['ngaysinh'] ?><!--</td>-->
    <!--        <td> --><?php //echo $values['diachi'] ?><!--</td>-->
    <!--        <td> --><?php //echo $values['anh'] ?><!--</td>-->
    <!---->
    <!--    </tr>-->
    <!--    --><?php //endforeach; ?>
</table>
</body>
</html>