<?php
/**
 * Created by PhpStorm.
 * User: ndodwaria
 * Date: 2/2/17
 * Time: 5:57 PM
 */
session_start();

if(isset($_SESSION['user'])){
    $conn=mysqli_connect('localhost','root','nd123.in','HACKATHON');
    if(!$conn){
        die("Connection Error".mysqli_connect_error());
    }
    else{
?>
        <?php
           
            $username=$_SESSION['user'];
            $query='select * from MESSAGE';
            $retval=mysqli_query($conn,$query);
                   if(mysqli_num_rows($retval)>0){
                    ?>
                    <div class="dynamic">
                    <?php
                    while($row=mysqli_fetch_assoc($retval)){
                ?>
                        
                        <div class="content">
                            <div class="content_image">
                                <img src=<?php echo '"../images/'.$row['IMAGE_NAME'].'"'; ?> width="100%" height="100%">
                            </div>
                            <div class="desc" align="center">
                                <div class="event_title"><h1><?php echo $row['TITLE']; ?></h1></div>
                                <div class="event_desc"><p><?php echo $row['MESSAGE']; ?></p></div>
                                <div class="link_button"><a href=<?php echo '"'.$row['LINK'].'"';?> >Register</a></div>
                            </div>       
                        </div>
                                     
                <?php
                    }
                 ?>
                 </div>   
                 <?php   
            }
            }
        
        }
        else
        {
            header('Location: ../index.php');
        }
    ?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/home">
</head>
<body>
    <div class="dynamic">
        <div class="content">
            <div class="content_image"><img src="../images/ext.jpg" width="350px" height="350px"></div>
            <div class="desc" align="center">
                <div class="event_title"><h1>Evevt Title</h1></div>
                <div class="event_desc">
                <p>Property crime is a category of crime that includes burglary,
                larceny, theft, motor vehicle theft, arson, shoplifting, and
                vandalism. Property crime only involves the taking of money
                or property, and does not involve force or threat of force
                against a victim.</p>
                </div>
                <div class="link_button"><a href="#">Register</a></div>
            </div>       
        </div>
    </div>

    <div class="dynamic">
        <div class="content">
            <div class="content_image"><img src="../images/ext.jpg" width="350px" height="350px"></div>
            <div class="desc" align="center">
            <div class="event_title"><h1>Evevt Title</h1></div>
                <div class="event_desc">
                <p>Property crime is a category of crime that includes burglary,
                larceny, theft, motor vehicle theft, arson, shoplifting, and
                vandalism. Property crime only involves the taking of money
                or property, and does not involve force or threat of force
                against a victim.</p>
                </div>
                <div class="link_button"><a href="#">Register</a></div>
            </div>       
        </div>
    </div>
</body>
</html> -->
  