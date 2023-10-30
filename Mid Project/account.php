<?php
session_start();
include_once 'database_conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>

<body>
    <form method="post">
        <fieldset style="height: 50px; border-radius: 10px;">
            <table style="height: 40px;">
                <th style="width:450px; text-align:left; color:yellow;" valign="top;">
                    <img src="img/logo_main.png" alt="logo" style="height:50px; width: 50px;"> <sup>DOT NGO</sup>

                </th>
                <th style="width:1950px; text-align:center; color:aqua;">
                    Your Account!
                </th>

                <?php
                if (isset($_SESSION['username'])) { ?>
                    <th style="width:40px;">
                        <button type="submit" name="submit_button" style="height: 50px; width: 50px; padding: 0; border: none;">
                            <img src="img/login_logo.jpg" alt="Submit" width="50" height="50">
                        </button>
                        <?php
                        $userName = $_SESSION['username'];
                        echo "<td style='width:400px; color:yellow;'>Welcome " . $userName . "</td>";
                        ?>
                    </th>
                <?php } else {
                    header('location: login_page.php');
                    exit;
                }
                ?>

            </table>
        </fieldset>
    </form>


    <form method="post">
        <fieldset style="height: 500px; text-align:center; width:1230px; float: left; border-radius: 10px; ">
            <table border="1" style="position: absolute; left: 50px; top: 120px;">
                <tr >
                    <td style="width: 140px; height: 60px;"colspan="2">Bank Information</td>
                    
                </tr>

                <tr>
                    <td style="width: 120px; height: 60px;" >Bank Name: </td>
                    <td style="width: 120px; height: 60px;">
                        <?php
                            if (isset($_SESSION['username'])) {
                                $userName = $_SESSION['username'];
                                $sql32 = "SELECT bank_name FROM bank_info WHERE acc_holder = '$userName'";
                                $result = $conn->query($sql32);
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo $row['bank_name'];
                                } else {
                                    echo "No data found";
                                }
                            }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td style="width: 120px; height: 60px;" >Account Number: </td>
                    <td style="width: 120px; height: 60px;">
                        <?php
                            if (isset($_SESSION['username'])) {
                                $userName = $_SESSION['username'];
                                $sql33 = "SELECT acc_no FROM bank_info WHERE acc_holder = '$userName'";
                                $result = $conn->query($sql33);
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo $row['acc_no'];
                                } else {
                                    echo "No data found";
                                }
                            }
                        ?>
  
                    </td>
                </tr>

                <tr>
                    <td style="width: 120px; height: 60px;">Account Holder:</td>
                    <td style="width: 120px; height: 60px;">
                        <?php
                            if (isset($_SESSION['username'])) {
                                $userName = $_SESSION['username'];
                                $sql34 = "SELECT acc_holder FROM bank_info WHERE acc_holder = '$userName'";
                                $result = $conn->query($sql34);
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo $row['acc_holder'];
                                } else {
                                    echo "No data found";
                                }
                            }
                        ?>
                    </td>

                </tr>

                <tr>
                    <td style="width: 120px; height: 60px;">Account Type: </td>
                    <td style="width: 120px; height: 60px;">
                        <?php
                            if (isset($_SESSION['username'])) {
                                $userName = $_SESSION['username'];
                                $sql35 = "SELECT acc_type FROM bank_info WHERE acc_holder = '$userName'";
                                $result = $conn->query($sql35);
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo $row['acc_type'];
                                } else {
                                    echo "No data found";
                                }
                            }
                        ?>
                    </td>

                </tr>

                <tr>
                    <td style="width: 120px; height: 60px;">Mobile Number: </td>
                    <td style="width: 120px; height: 60px;">
                        <?php
                            if (isset($_SESSION['username'])) {
                                $userName = $_SESSION['username'];
                                $sql36 = "SELECT mobile_agent FROM bank_info WHERE acc_holder = '$userName'";
                                $result = $conn->query($sql36);
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo $row['mobile_agent'];
                                } else {
                                    echo "No data found";
                                }
                            }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td style="width: 120px; height: 60px;" colspan="2" > 
                        <button type="submit" name="add_acc" formaction="new_acc.php" >Add or Update Account</button>
                    </td>
                    
                </tr>
            </table>
           

            <table border="1" style="position: absolute; left: 600px; top: 120px;">
                <tr >
                    <td style="width: 250px; height: 70px;"colspan="2">Transation: </td>
                    
                </tr>

                <tr>
                    <td style="width: 170px; height: 70px;" >Available Balance: </td>
                    <td style="width: 250px; height: 70px;">
                        <?php
                            if (isset($_SESSION['username'])) {
                                $userName = $_SESSION['username'];
                                $sql36 = "SELECT aval_bal FROM bank_info WHERE acc_holder = '$userName'";
                                $result = $conn->query($sql36);
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo $row['aval_bal'];
                                } else {
                                    echo "No data found";
                                }
                            }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td style="width: 170px; height: 70px;" >Total BAalance: </td>
                    <td style="width: 250px; height: 70px;">
                        <?php
                            if (isset($_SESSION['username'])) {
                                $userName = $_SESSION['username'];
                                $sql32 = "SELECT total_bal FROM bank_info WHERE acc_holder = '$userName'";
                                $result = $conn->query($sql32);
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo $row['total_bal'];
                                } else {
                                    echo "No data found";
                                }
                            }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td style="width: 170px; height: 70px;">Last Withdraw:</td>
                    <td style="width: 250px; height: 70px;">
                        <?php
                            if (isset($_SESSION['username'])) {
                                $userName = $_SESSION['username'];
                                $sql32 = "SELECT last_draw FROM bank_info WHERE acc_holder = '$userName'";
                                $result = $conn->query($sql32);
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo $row['last_draw'];
                                } else {
                                    echo "No data found";
                                }
                            }
                        ?>
                    </td>

                </tr>

                <tr>
                    <td style="width: 170px; height: 70px;">Withdraw Now: </td>
                    <td style="width: 250px; height: 70px;">
                        <input type="text" name="ammount">
                    </td>

                </tr>

                <tr>
                    <td style="width: 170px; height: 70px;" align="right" colspan="2" > 
                        <button type="submit" name="withdraw"  >Withdraw</button>
                    </td>
                    
                </tr>
            </table>

           
     
        </fieldset>
        </form>


        <?php
           if (isset($_POST['withdraw'])) {
            if (isset($_SESSION['username'])) {
                $userName = $_SESSION['username'];
                $amountToWithdraw = $_POST['ammount'];
        
                // First, retrieve the current balance from the database
                $sqlGetBalance = "SELECT total_bal, aval_bal FROM bank_info WHERE acc_holder = '$userName'";
                $result = $conn->query($sqlGetBalance);
        
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $currentTotalBalance = $row['total_bal'];
                    $currentAvailableBalance = $row['aval_bal'];
        
                    // Check if the user has sufficient balance
                    if ($currentAvailableBalance >= $amountToWithdraw) {
                        // Calculate the new balances
                        $newTotalBalance = $currentTotalBalance - $amountToWithdraw;
                        $newAvailableBalance = $currentAvailableBalance - $amountToWithdraw;
        
                        // Update the balances in the database
                        $sqlUpdateBalance = "UPDATE bank_info SET total_bal = $newTotalBalance, aval_bal = $newAvailableBalance WHERE acc_holder = '$userName'";
                        if ($conn->query($sqlUpdateBalance) === TRUE) {
                            echo "Withdrawal successful. Your new available balance is: $newAvailableBalance";
                        } else {
                            echo "Error updating balance: " . $conn->error;
                        }
                    } else {
                        echo "Insufficient available balance for withdrawal.";
                    }
                } else {
                    echo "User not found or some other error occurred.";
                }
            }
           }
        ?>
</body>

</html>