<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .thumbnail{
            height: 60px;
            width: 100px;
            overflow: hidden;
        }
        .thumbnail img{
            width:100%;
        }
    </style>
</head>
<body>
<table border="0">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerlist = array(
        "1" => array("ten" => "Vũ Quang Huy", "ngaysinh" => "07-05-2002", "diachi" => "Hải Phòng", "anh" => "image/huy.jpg"),
        "2" =>array("ten" => "Nguyễn Minh Thịnh", "ngaysinh" => "31-10-2002", "diachi" => "Hải Phòng", "anh" => "image/thinh.jpg"),
        "3" =>array("ten" => "Hoàng Sơn Tùng", "ngaysinh" => "29-04-2002", "diachi" => "Hải Phòng", "anh" => "image/tung.jpg")
    );
    foreach($customerlist as $key => $values){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$values['ten']."</td>";
        echo "<td>".$values['ngaysinh']."</td>";
        echo "<td>".$values['diachi']."</td>";
        echo "<td><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
