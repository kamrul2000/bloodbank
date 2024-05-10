<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
    <head> 
        <title>Donor Registration</title> 
        <link rel="stylesheet" type="text/css" href="style2.css">
        <style type="text/css">
            td{
                width:200px;
                height:40px;
            }
            </style>
    </head> 
    <body>
    <div class="navbar">
        <div class="logo">
            <a href="admin-home.php">CSTE Blood Bank</a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="donor-red.php">Donor Registration</a></li>
                <li><a href="donor-list.php">Donor List</a></li>
                <li><a href="stock-blood-list.php">Stock Blood List</a></li>
                <li><a href="out-stock-blood-list.php">Out Stock Blood List</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
        <div id ="full">
            <div id="inner_full"> 
            <div id="header" align="center"><h2><a href="admin-home.php"style="text-decoration:none;color:white;"><img src="logo.jpg" alt="image" width="100" height="100" style="border-radius: 15px;"> CSTE Blood Bank</a></h2></div>
            <div id="body">
                <br>
                <?php
                $un=$_SESSION['un'];
                if(!$un)
                {
                    header("Location:index.php");
                
                }
                ?>
                <h1 align="center">Stock Blood List</h1><br>
                <center><div id="form">
                    <table>
                        
            <tr>
                            <td><center><b><font color="blue">Name</font></b></center></td>
                            <td><center><b><font color="blue">Mobile No</font></b></center></td>
                            <td><center><b><font color="blue">Blood Group</font></b></center></td>
                        </tr>
                        <?php
                        $newDate=date("Y/m/d"); 
                        $q=$db->query("SELECT * FROM donor_registration WHERE DATEDIFF(now(), Date)>120; ");
                        while($r1=$q->fetch(PDO::FETCH_OBJ))
                        {
                            ?>
                          <tr>
                            <td><center><?=$r1->name; ?></center></td>
                            <td><center><?=$r1->mno; ?></center></td>
                            <td><center><?=$r1->bgroup; ?></center></td>
                            
                        </tr>
                            <?php
                        }
                        ?>
                        
                        
                        
                    </table>
                   
               </div></center>
                </div> 
                <center>
                <div style="padding-left: 20%;">
            </center>
            <br>
<br>
<div id="footer"><br><h3 align="center">Copyright@All rights reserved</h3></div>
           </div>  

        </div>
   </body>  
</html>