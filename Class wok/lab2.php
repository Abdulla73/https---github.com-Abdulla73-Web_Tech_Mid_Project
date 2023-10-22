 <th style="width:450px;">
                    <td>
                        <img src="logo_main.png" alt="Your Image" width="50" height="50">
                    </td>
                    <td style="text-align: center; color:yellow;">
                        DOT NGO
                    </td>
                    </th>

                <th style="width:450px;">
                   <b style="color:yellow;"></b><td>Dashboard</td></b> 
                </th>

                <?php
                session_start(); 
                if (isset($_SESSION['username'])) { ?>
                    <th style="width:450px;" >
                        <td>
                            <img src="login_logo.jpg" alt="login logo" width="50" height="50">
                        </td>
                        <td>
                            <?php 
                                $userName = $_SESSION['username'];
                            ?>
                            <b style= "color:yellow;"><?php echo " $userName"?></b>
                           
                        </td>
                    </th>
                <?php } ?>
            </table>

    

    


  