<?php 
    include_once 'databse.php';

    $sql3="select * from info1";
    $res= mysqli_query($conn,$sql3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User page</title>
</head>
<body>
    <form >
        <center>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                <?php while($r= mysqli_fetch_assoc($res)){ ?>
                    <tr>
                        <td><?php echo $r["id"] ; ?></td>
                        <td><?php echo $r["name"] ; ?></td>
                        <td><?php echo $r["email"] ; ?></td>
                    </tr>
                <?php } ?>
                
            </table>
        </center>
    </form>
</body>
</html>