<?php 
    include_once 'page2.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
</head>
<body>
    <form >
        <fieldset style="height: 565px;" >
            <h1 style="color: blue;">Admin Control panel</h1>
            <h3 align ="center" style="text-decoration: underline; color:blueviolet " >Controls:</h3>
            <center>
                <button type="submit" name="manage_iteams" style="margin-left: 20px;" >Manage iteams</button>
                <button type="submit" name="manage_employee" style="margin-left:100px;" >Manage Employee</button> 
                <button type="submit" name="manage_customer" style="margin-left: 100px;" >Manage customer data</button>
                <button type="submit" name="manage_shop_data" style="margin-left: 100px;" >Manage shop data</button><br><br>
            </center>
            <fieldset>
                <h3 align="center" style="text-decoration: underline; color:aqua;" >Data:</h3>
            </fieldset>

        </fieldset>
    </form>
</body>
</html>