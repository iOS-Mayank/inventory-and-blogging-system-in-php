<html>
<body>
    <?php 
        include('sanitizer.php');
        include('dbconnection.php');
        if(!empty($_GET['msg'])){
            echo "<script>alert('".sanitizer($_GET['msg'])."');</script>";
        }
    ?>
    <a href="showsupplier.php">goback</a>
    <h1>EDIT Supplier</h1><br>
    <form action="core.php?type=editsupplier&id=<?php echo $_GET['id'];?>" method="post"> 
        Supplier Name:
        <input type="text" name="suppliername"><br><hr>
        Supplier Company:
        <input type="text" name="suppliercompany"><br><hr>
        supplier EmailId:
        <input type="text" name="supplieremail"><br><hr>
        Supplier address:
        <input type="text" name="supplieraddress"><br><hr>
        Supplier contactno:
        <input type="number" name="suppliercontact"><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>