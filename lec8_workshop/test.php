<?php
    $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    
?>
<html>
<head><meta charset="utf-8"></head>
<style>
table, th, td {
  border:1px solid black;
}
</style>

<body>
<?php
    $stmt = $pdo->prepare("SELECT * FROM product");
    $stmt->execute();
    ?>
    <table>
        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>รายละเอียดสินค้า</th>
            <th>ราคา</th>
        </tr>
    <?php while ($row = $stmt->fetch()){
        ?>
        <tr> 
            <td><?=$row ["pid"]?></td>
            <td><?=$row ["pname"]?></td>
            <td><?=$row ["pdetail"]?></td>
            <td><?=$row ["price"]?></td>
        </tr>
        </br>
    <?php }?>
    </table>
    
    

</body>
</html>
