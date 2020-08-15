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
        
        <h1> Sign Up</h1>
        <div class="icon-login glyphicon glyphicon-log-in "></div>
        
        <div class="form">
            <form method="POST" >
                <input type="text" name="name" placeholder="Name" required><br>
                
                <input type="email"  name="email" placeholder="email" required><br>
                
                <input type="number" name="mobile" placeholder="Mobile Number" required><br>
                
                
                <input type="password" name="pass" id="pass" placeholder="Create password" required><br>
                
                <input type="password" id="cpass" name="cpass" placeholder="Confirm Password" onchange="func()" required><br>
                
                <input class="button" type="submit" value="submit" name="submit" onclick="return func()" required>
                
            </form>
            
            
        
        </div>
        
        <div>
            <p>Already registered? <a href="login.php">Click here</a></p>
            
        </div>
        
        
        
        
        
        
        <script>
            function func()
            {
               if(document.getElementById("pass").value != document.getElementById("cpass").value)
                   {
                       alert("Password not matching");
                       return false;
                   }
                
            }
        
        </script>  
        
        <?php
        
        
            include "connection.php";
            
       
        
            if(isset($_POST['submit']))
            {
                $name= mysqli_real_escape_string ($con,$_POST['name']);
                $email= mysqli_real_escape_string ($con,$_POST['email']);
                $mobile= mysqli_real_escape_string ($con,$_POST['mobile']);
                $pass= mysqli_real_escape_string ($con,$_POST['pass']);
                $cpass= mysqli_real_escape_string ($con,$_POST['cpass']);
                
                $hash = password_hash("$pass",PASSWORD_BCRYPT);
                
                
                $query1 = "select * from registration where email='$email' ";
                
                $emailquery =mysqli_query($con,$query1);
                
                $count = mysqli_num_rows($emailquery);
                
                if($count > 0)
                {
                    ?>
                    <script>
                     alert("Failed! email already exist");
                    
                            </script>
                        <?php
                }
                
            else
            {
            $select = "INSERT INTO registration(name, email, mobile, password, cpassword) VALUES ('$name','$email','$mobile','$hash','$hash')";
                
            $insert = mysqli_query($con,$select);
                
                
            if($insert)
                {   ?>
                    <script>
                     alert("data inserted");
//                    location.replace("login.php");
                            </script>
                        <?php
                 }
             else
                    {
                       ?>
                        <script>
                        alert("failed");
                            </script>
                        <?php
                    }
                
            }

      }

    ?>
        
        
        
        
        
        
        
        
        
    </body>
</html>