<html>
    
    <head>
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
            }
        
            .container{
                display: flex;
                text-align: center;
                margin: 0 auto;
                margin-top: 10%;
                
            }
            form{
                display: inline;
                height: 130%;
                margin : 0 auto;
            }
            
        
       
    
                
    </style>
    
            
            
            
    
    </head>
    <body>
        <h1><i class="fa fa-trash"></i>&nbsp;Delete Profile</h1>
        
        <div class="del container">
        <form method="POST">
            <label>Are You Sure to DELETE PROFILE? </label><br>
            
            <label><input type="radio" name="input" value="yes">yes</label>&nbsp;&nbsp;
            <label><input type="radio" name="input" value="no">no</label>
            <br>
            <input type="submit" name="submit" value="submit">
            
        
        </form>
        </div>
    </body>
</html>
    

<?php
session_start();
$id = $_SESSION['id'];
include "connection.php";

        
        if(isset($_POST['submit']))
        {
            
            $entry = $_POST['input'];
            if($entry == "yes")
            {
                
                $delete = "DELETE FROM registration WHERE id = $id ";
                $dat=mysqli_query($con, $delete);
                
                if($dat)
                {
                    ?>
                    <script>
                    
                     alert("Profile Deleted");
                    
                            </script>
                        <?php
                    session_destroy();
                    header("location:login.php");
                }
                else
                {
                    
                    ?>
                    <script>
                     alert("Failed");
                        
                    
                            </script>
                        <?php
                }
                
            }
            
            
        }
        

?>
