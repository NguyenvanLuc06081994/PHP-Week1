<?php
$customerList = array(
    "0" => array("name" => "Mai Văn Hoàn", "day_of_birth" => "1983/08/20", "address" => "Hà Nội", "image" => "images/img1.jpg"),
    "1" => array("name" => "Nguyễn Văn Nam", "day_of_birth" => "1983/08/21", "address" => "Bắc Giang", "image" => "images/img2.jpg"),
    "2" => array("name" => "Nguyễn Thái Hòa", "day_of_birth" => "1983/08/22", "address" => "Nam Định", "image" => "images/img3.jpg"),
    "3" => array("name" => "Trần Đăng Khoa", "day_of_birth" => "1983/08/17", "address" => "Hà Tây", "image" => "images/img4.jpg"),
    "4" => array("name" => "Nguyễn Đình Thi", "day_of_birth" => "1983/08/19", "address" => "Hà Nội", "image" => "images/img5.jpg")
);
function searchByDate($customers, $from_date, $to_date)
{
    if (empty($from_date) && empty($to_date)) {
        return $customers;
    }
    $filtered_customers = [];
    foreach ($customers as $customer) {
        if (!empty($from_date) && (strtotime($customer['day_of_birth']) < strtotime($from_date)))
            continue;

        if (!empty($to_date) && (strtotime($customer['day_of_birth']) > strtotime($to_date)))
            continue;
        $filtered_customers[] = $customer;

    }
    return $filtered_customers;
}

?>
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
$from_date = NULL;
$to_date = NULL;
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $from_date = $_POST['fromDate'];
    $to_date = $_POST['toDate'];
}
$filtered_customers = searchByDate($customerList, $from_date, $to_date);
?>
<form action="" method="post">
    From : <input type="text" name="fromDate" placeholder="yyyy-mm-dd">
    To : <input type="text" name="toDate" placeholder="yyyy-mm-dd">
    <input type="submit" value="Search">

</form>
<table>
    <caption><h2>List Customers</h2></caption>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Date Of Bird</th>
        <th>Address</th>
        <th>Image</th>
    </tr>
    <?php foreach ($filtered_customers as $key => $customer): ?>
    <tr>
        <td><?php echo $key+1; ?></td>
        <td><?php echo $customer['name']; ?></td>
        <td><?php echo $customer['day_of_birth']; ?></td>
        <td><?php echo $customer['address']; ?></td>
        <td><div class="profile"><img src="<?php echo $customer['profile']; ?>" alt=""></div></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
