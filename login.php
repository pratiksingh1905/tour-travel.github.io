<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tour and Travel</title>
    <link rel="shortcut icon" href="images/download.jfif">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <style>
        body{
            background-image: url(images/login.jfif);
            background-repeat: no-repeat;
            background-size: cover;
            
        }
        
        h1{
            text-align: center;
            color: white;
            font-family: aria;
            text-decoration-line: underline;
            text-decoration-color: darkorange;
        }
        
        .icon-login{
            display: flex;
            justify-content: center;
            font-size: 600%;
            margin-top: 4%;
            margin-bottom: 4%;
            
        }
        
        input{
            width: 400px;
            margin: 3%;
            padding: 5px;
            display: flex;
            margin: 0 auto;
            margin-bottom: 2%;
            
            
        }
        
        .button{
            font-size: 120%;
            font-family: arial;
            width: 200px;
            padding-left: 70px;
            background-color: aqua;
            margin-bottom: 2%;
            
        }
        .button:active{
            background-color: bisque;
        }
        
        p{
            color: white;
            text-align: center;
        }
        a{
            color: deeppink;
        }
        
        .btn{
            padding: 2% 6%;
            margin: 2%;
            
        }
        div p a:hover{
            color: red;
        }
        
        
                
    </style>
    
    
    
    </head>
    
    
    
   
    <body>
        
        <a href="index.html" style="color: black"><button class="btn btn-success">Home</button></a>
        
        <h1> User Login</h1>
        <div class="icon-login glyphicon glyphicon-log-in "></div>
        
        <div class="form">
            <form method="POST">
                <input type="text" name="email" placeholder="Email " name="user"><br>
                <input type="password"  placeholder="password" name="pass">
                
                <input class="button" type="submit" value="submit" name="submit">
                
            </form>
            
            
        
        </div>
        
        <div>
            <p>New User? <a href="sign-up.php">Click here</a></p>
            
        </div>
        
        <?php
        
         include "connection.php";
        
        
        
        
       
        if(isset($_POST['submit']))
        {
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            
            $select = "select * from registration where email = '$email' ";
            
            $emailquery = mysqli_query($con, $select);
           
            
            $num = mysqli_num_rows($emailquery);
          
            
            if($num > 0)
            {
                $res = mysqli_fetch_array($emailquery);
                $dbpass = $res['password'];
                $verify = password_verify($pass, $dbpass);
                
                if($verify)
                    {
                    
                         $_SESSION['username']= $res['name']; 
                    
                         $_SESSION['id']=$res['id'];
                    
                    
                        ?>
                        <script>
                         alert("Login Successful "); 
                        
                            
                        location.replace("home.php");

                                </script>
                            <?php
                    }
                else
                    {
                        ?>
                        <script>
                         alert("Password incorrect ");

                                </script>
                            <?php
                    }

            }
            else
            {
                ?>
                    <script>
                     alert("Email doesn't exist ");
                    
                            </script>
                        <?php
                }
            }
            
            
        
        
        
        
        ?>
        
        
        
        
        
        
    </body>
</html>