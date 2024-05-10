<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Donor Registration</title> 
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    
    <div id="full">
        <div id="inner_full"> 
            <div id="header" align="center">
                <h2><a href="admin-home.php" style="text-decoration:none;color:white;"><img src="logo.jpg" alt="image" width="100" height="100" style="border-radius: 15px;"> CSTE Blood Bank</a></h2>
            </div>
            <div id="body">
                <?php
                $un=$_SESSION['un'];
                if(!$un)
                {
                    header("Location:index.php");
                    exit; // Stop further execution
                }
                ?>
                <h1 align="center">Donor Registration</h1>
                <div id="form">
                    <form action="" method="post">
                        <table>
                            <tr>
                                <th>Name</th>
                                <td><input type="text" name="name" placeholder="Name"></td> 
                                <th>Father's Name</th>
                                <td><input type="text" name="fname" placeholder="Father's Name"></td> 
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><textarea name="address" placeholder="Address"></textarea></td> 
                                <th>City</th>
                                <td><input type="text" name="city" placeholder="City"></td> 
                            </tr>
                            <tr>
                                <th>Age</th>
                                <td><input type="text" name="age" placeholder="Age"></td> 
                                <th>Blood Group</th>
                                <td>
                                    <select name="bgroup">
                                        <option>O+</option>
                                        <option>A+</option>
                                        <option>B+</option>
                                        <option>AB+</option>
                                        <option>O-</option>
                                        <option>A-</option>
                                        <option>B-</option>
                                        <option>AB-</option>
                                    </select>
                                </td> 
                            </tr>
                            <tr>
                                <th>E-Mail</th>
                                <td><input type="text" name="email" placeholder="E-Mail"></td> 
                                <th>Mobile No</th>
                                <td><input type="text" name="mno" placeholder="Mobile No"></td> 
                            </tr>
                            <tr>
                                <th>Last Donation Date:</th>
                                <td colspan="3"><input type="date" name="date"></td>
                            </tr>
                            <tr>
                                <td colspan="4" align="center"><input type="submit" name="sub" value="Save"></td>
                            </tr>
                        </table>
                    </form>
                    <?php
                    if(isset($_POST['sub']))
                    {
                      $name=$_POST['name'];
                      $fname=$_POST['fname'];
                      $address=$_POST['address'];
                      $city=$_POST['city'];
                      $age=$_POST['age'];
                      $bgroup=$_POST['bgroup'];
                      $mno=$_POST['mno'];
                      $email=$_POST['email'];
                      $Date=$_POST['date'];


                     $q=$db->prepare("INSERT INTO donor_registration(name,fname,address,city,age,bgroup,mno,email,date) VALUES(:name,:fname,:address,:city,:age,:bgroup,:mno,:email,:date)");
                    
                     $q->bindValue('name',$name);
                     $q->bindValue('fname',$fname);
                     $q->bindValue('address',$address);
                     $q->bindValue('city',$city);
                     $q->bindValue('age',$age);
                     $q->bindValue('bgroup',$bgroup);
                     $q->bindValue('mno',$mno);
                     $q->bindValue('email',$email);
                     $q->bindValue('date',$Date);
                     if($q->execute())
                    
                     {
                         echo "<script>alert('Donor Registration Successfull')</script>";
                     }
                     else
                     {
                        echo "<script>alert('Donor Registration Fail')</script>";        
                     }
                    }
                    ?>
                </div>
            </div>
            
        </div>
    </div>
    <div id="footer">
        <h3 align="center">Copyright@All rights reserved</h3>
    </div>
</body>
</html>
