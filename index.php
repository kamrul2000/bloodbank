<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
    <head> 
        <title>Admin Login</title> 
        <link rel="stylesheet" type="text/css" href="style4.css">
    
</head> 
    <body>
        <div id ="full">
            <div id="inner_full"> 
            <div id="header" align="center"><h2><img src="logo.jpg" alt="image" width="100" height="100" style="border-radius: 15px;">CSTE Blood Bank</h2></div>
            <br>
           <br>
           <br>
           <br>
                
                <form action="" method="post">
            <table align="center">
                <tr>
                    <th><b>Enter Username</b></th>
                    <th ><b><input type="text" name="un" placeholder="Enter Username"></th>
                </tr> 
                <tr>
                    <th ><b>Enter Password</b></th>
                    <th ><b><input type="password" name="ps" placeholder="Enter Password" ></th>
                </tr>
                <th align="center"><input type="submit" name="sub" value="Login" ></th>
                
                <tr>
                </tr>       
                
            </table>
            </form>
           <br>
           

           
            <?php
            if(isset($_POST['sub']))
            {
                 $un=$_POST['un'];
                 $ps=$_POST['ps'];
                $q=$db->prepare("SELECT*FROM admin where uname='$un' && pass='$ps'");
                $q->execute();
                $res=$q->fetchAll(PDO::FETCH_OBJ);
                if($res)
                {
                    $_SESSION['un']=$un;
                 header("Location:admin-home.php") ;  
                }
                else
                {
                    echo "<script>alert('Wrong User')</script>";
                }
            }
        ?>
        <br>
<br>
<div id="footer"><br><h3 align="center">Copyright@All rights reserved</h3></div>
           </div>  
        </div>
   </body>  
</html>