<?php
session_start();

if(isset($_SESSION['username']))
{
    $name= $_SESSION['username'];
	echo "<script>alert('hello $name');</script>";
}

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
  
  
    
    
    
    
    
    <link rel="stylesheet" href="style.css">
</head>    
    
    <body>
        
        <div class="nav visible-xs visible-sm visible-md">
            <div class="dropdown" id="firstdrop">
        
        <button class="dropdown-toggle" data-toggle="dropdown" id="first"><span class="fa fa-bars"></span></button>
        <ul class="nav-content dropdown-menu">
            <li class="present" role="presentation"><a href="update.php"><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp; Profile</a></li>
        
            <li class="present" role="presentation"><a href="https://www.redbus.in/"><i class="fa fa-bus"></i>&nbsp;&nbsp;Book Ticket (Bus) &nbsp;&nbsp; </a></li>
            <li class="present" role="presentation"><a href="https://www.irctc.co.in/nget/train-search"><i class="fa fa-train"></i>&nbsp;&nbsp;Book Ticket (Train) &nbsp;&nbsp; </a></li>
            <li class="present" role="presentation"><a href="https://www.makemytrip.com/flights/"><i class="fa fa-plane"></i>&nbsp;&nbsp;Book Ticket (Flight) &nbsp;&nbsp; </a></li>
            <li role="presentation"><a href="https://facebook.com"><i class="fab fa-facebook " >&nbsp;&nbsp;Facebook</i></a></li>
            <li role="presentation"><a href="https://twitter.com/login?lang=en"><i class="fab fa-twitter " ></i>&nbsp;&nbsp;Twitter</a></li>
            <li role="presentation" id="contact-us"><a href="#"><i class="fa fa-phone "> &nbsp;&nbsp;Mobile</i>
                         <div id="mob">         1234567890
                         </div></a>
                     </li>
            
            <li class="present" role="presentation"><a href="delete.php"><i class="fa fa-trash"></i>&nbsp;&nbsp; Delete Profile</a></li>
            
            <li class="present" role="presentation"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp; Logout</a></li>
                
                
             
        
            
            
            
        
                  
             </ul>
             </div>
    </div>
           
           
      
            
      
        
        
        
        
         
        <div class="head">
        <h1> Tours and Travels</h1>
            <q>Life Is Short And World is Wide </q>
        </div>
        
        <div class="nav visible-lg">
         <ul class="nav nav-pills" role="navigation">
         <li role="presentation"><a href="update.php"><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp; Profile</a></li>
            

             <li role="presentation" class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-subway"></i>&nbsp;&nbsp;Book Ticket<span class="caret"></span></a>
                 <ul role="navigation" class="dropdown-menu">
                     <li role="presentation"><a href="https://www.redbus.in/"><i class="fa fa-bus fa-2x" ></i>&nbsp;&nbsp;Bus</a></li>
                     <li role="presentation"><a href="https://www.irctc.co.in/nget/train-search"><i class="fa fa-train fa-2x" ></i>&nbsp;&nbsp;Train</a></li>
                     <li role="presentation"><a href="https://www.makemytrip.com/flights/"><i class="fa fa-plane fa-2x" ></i>&nbsp;&nbsp;Flight</a></li>
                 </ul>
             
             </li>
              <li role="presentation" class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-address-book " ></i>&nbsp;&nbsp;Contact US<span class="caret"></span></a>
                 <ul role="navigation" class="dropdown-menu">
                     <li role="presentation"><a href="https://facebook.com"><i class="fab fa-facebook fa-2x" ></i>&nbsp;&nbsp;Facebook</a></li>
                     <li role="presentation"><a href="https://twitter.com/login?lang=en"><i class="fab fa-twitter fa-2x" ></i>&nbsp;&nbsp;Twitter</a></li>
                     <li role="presentation" id="contact-us"><a href="#"><i class="fa fa-phone fa-2x"> &nbsp;&nbsp;Mobile</i>
                         <div id="mob">         1234567890
                         </div></a>
                     </li>
                     
                   
             
                     
                 </ul>
             
             </li>
             
              <li role="presentation"><a href="delete.php"><i class="fa fa-trash"></i>&nbsp;&nbsp; Delete Profile</a></li>
             
             <li role="presentation"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp; Logout</a></li>
             
        </ul>    
            </div>    
    
           <div class="plans">
               <img class="img-box" src="images/plan.jfif">
           </div>   
        
        
        <div class="india-details">
            <h3> Tourist Spots In India</h3>
               <a href="jaipur.html"> <div id="Jaipur" class="col-xs-6 col-lg-3" onclick="Jaipur()">
                    <p>Jaipur</p>
                    <img class="img-box" src="images/jaipur.jfif">
                   </div> </a> 
             
                <a href="kashmir.html"><div id="Kashmir" class="col-xs-6 col-lg-3">
                        <p> Kashmir</p>
                        <img class="img-box" src="images/kashmir.jfif">    

                    </div> </a>
        
            
             <a href="kerala.html"><div id="Kerala" class="col-xs-6 col-lg-3 ">
                    <p> Kerala</p>
                    <img class="img-box" src="images/kerala.jfif">    

             </div></a>
             <a href="kochi.html"><div id="Kochi" class="col-xs-6 col-lg-3 ">
                     <p> Kochi</p>
                    <img class="img-box" src="images/kochi.jfif">    

                 </div> </a>
              
             <a href="meghalaya.html"> <div id="Meghalaya" class="col-xs-6 col-lg-3 ">
                        <p> Meghalaya</p>
                        <img class="img-box" src="images/meghalaya.jfif">    

                 </div> </a>
               
            <a href="munnar.html"> <div id="Munnar" class="col-xs-6 col-lg-3 ">
                        <p> Munnar</p>
                        <img class="img-box" src="images/munnar.jfif">    

                </div></a> 

            <a href="himachal.html"> <div id="Himachal" class="col-xs-6 col-lg-3 ">
                        <p> Himachal</p>
                <img class="img-box" src="images/himachal.jfif"> 


                </div> </a>
               
                <a href="goa.html"> <div id="Goa" class="col-xs-6 col-lg-3 ">
                        <p> Goa</p>
                    <img class="img-box" src="images/goa.jfif">    

                    </div> </a>
            
                    </div>
        
        <div >
            <p>&nbsp;</p>     
        </div>    
    <div class="allspecial">    
        <div class="special" >
            <h3>Special Discount Trip<br><br>1</h3>
            <div class="lasimg col-xs-4 col-lg-6">
                <img src="images/vinales.jpg">
                
            </div>
            <div class="lasdet col-xs-8 col-lg-6">
                <h4 >Vinales</h4>
                <p>Viñales is a beautiful and lush valley in Pinar del Río province of Cuba, with a population of around 10,000. It's about 26 kilometers north of the city of Pinar del Río, and was declared a UNESCO World Heritage Site.<br> <a href="https://www.makemytrip.com/flights/" class="ticket"  >book ticket</a></p>
                

            </div>
        </div>
        
        <div class="special" style="background-color: blueviolet"  >
            <h3>Special Discount Trip<br><br>2</h3>
            <div class="lasimg col-xs-4 col-lg-6">
                <img src="images/las.jfif">
                
            </div>
            <div class="lasdet col-xs-8 col-lg-6" style="background-color: blueviolet"  >
                <h4 >Las-Vegas</h4>
                <p>Nicknamed the ‘Entertainment Capital of the World,' ‘Sin City’ and ‘City of Lights,' Las Vegas is truly the place where dreams come true. The city is known for its casinos, luxury hotels, fine dining restaurants, entertainment events, and nightlife. <br> <a href="https://www.makemytrip.com/flights/" class="ticket"  >book ticket</a></p>
                
                
            </div>
        </div>
       
        <div class="special" style="background-color: chocolate"  >
            <h3>Special Discount Trip<br><br>3</h3>
            <div class="lasimg col-xs-4 col-lg-6">
                <img src="images/canberra.jfif">
                
            </div>
            <div class="lasdet col-xs-8 col-lg-6" style="background-color:chocolate"  >
                <h4 >Canberra</h4>
                <p>Lately Canberra has been staking a claim for the title of Australia's coolest city – and we’re not just talking winter temperatures. Where else can you find superb dining and world-class cultural experiences only a short stroll from wildlife-filled bushland reserves and serene lakeshore views? <br> <a href="https://www.makemytrip.com/flights/" class="ticket"  >book ticket</a></p>
                

            </div>
        </div>
     </div>
        
       <footer>
           <div class="col-xs-6">
                <h5>Toll Free Number</h5><br>
               1800xxxxxx , 1800yyyyyy
           </div>
           <div class="col-xs-6">
               <h5>Social Media</h5>
                <div class="col-xs-6">
                 <a id="fb" href="#"><i class="fab fa-facebook fa-2x "  ></i></a>
               </div>
                <div class="col-xs-6">
                 <a id="twitter" href="#"><i class="fab fa-twitter fa-2x" ></i></a>
               </div>
               <div class="col-xs-6">
                <a id="insta" href="#"><i class="fab fa-instagram fa-2x"  ></i></a>
               </div>
                <div class="col-xs-6">
                    <a id="in" href="#"><i class="fab fa-linkedin fa-2x" ></i></a>
               </div>
           
           </div>
           <p>&nbsp;</p>
           <div class="mail">Send us mail regarding quey at &nbsp;<br><i class="fa fa-envelope"></i> xyz@gmail.com</div>
           
        </footer>   
            
       
        
           
    </body>
   
</html>
        


        
        