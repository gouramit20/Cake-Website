
<?php 
        if(!isset($_SESSION)) 
    { 
       session_start(); 
                
    } 

if(isset($_POST['Signout'])){
  $_SESSION['currentUserLoggedIn']="Not Logged"; 
                $_SESSION['currentUserLoggedInId']=1; 
                $_SESSION['loggedin'] = false; 
                $_SESSION['cartCount']=0;
}


/*$conn->close();*/




if(isset($_POST['loginNow'])){
  db();

}





    
  


try{   
   $conn = new PDO("sqlsrv:server = tcp:cakewebsitedb.database.windows.net,1433; Database = CakeDB", "AlbinoCakeWesite", "ACWdb#321");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_SESSION['currentUserLoggedInId'])){
    $tempData=$_SESSION['currentUserLoggedInId'];
      if($tempData!="1"){
             $sql = "select count(*) as cartCount from Cart where fkcustomerIdCart=".$_SESSION['currentUserLoggedInId'];
             $result=$conn->query($sql);

             if($row = $result->fetch()){
              $_SESSION['cartCount']=$row['cartCount'];
             }
           }
           else
             {
                $_SESSION['currentUserLoggedIn']="Not Logged"; 
                $_SESSION['currentUserLoggedInId']=1; 
                $_SESSION['loggedin'] = false; 
                $_SESSION['cartCount']=0;
              
             }
         }
             
             }
           
catch (PDOException $e) {
     echo "<script> alert('Please Check Internet Connection!!!');</script>";  
}

if(isset($_SESSION['currentUserLoggedIn']) && $_SESSION['loggedin'] == true){
  $currentUser=$_SESSION['currentUserLoggedIn'];
}else
{
   $currentUser="no user";
}




if(isset($_POST['registerUser'])){ /*register ner user if $_POST['registerUser'] is set*/

$sql="SELECT customerId from Customer where customerEmail='".$_POST['txtemail']."'";  
$result=$conn->query($sql); 
if($row = $result->fetch()){
     echo "<script> alert('User Already Exist!!!');</script>";   
}
else{
          $sql="SELECT TOP 1 customerId  as lastId from Customer ORDER BY customerId DESC";
          $result=$conn->query($sql); 
           if($row = $result->fetch()){
            $lastId=$row['lastId']+1;
           }

            $sql = "INSERT INTO Customer( 
                 customerId
                ,customerName
                ,customerAddress
                ,customerNumber
                ,customerEmail    
                ,customerPassword) VALUES(".$lastId.",'".$_POST['txtname']."','unknown',1,'".$_POST['txtemail']."','".$_POST['password']."')";
                        
                $result=$conn->query($sql); 
}
          
}
             


  function db(){/*check if user is valid*/
      try {
   $conn = new PDO("sqlsrv:server = tcp:cakewebsitedb.database.windows.net,1433; Database = CakeDB", "AlbinoCakeWesite", "ACWdb#321");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select customerName,customerId from Customer where customerEmail='".$_POST['loginemail']."' and customerPassword='".$_POST['loginpass']."'";
              
            $result=$conn->query($sql);    

           if($row = $result->fetch()){
           
                $_SESSION['currentUserLoggedIn']=$row['customerName']; 
                $_SESSION['currentUserLoggedInId']=$row['customerId']; 
                $_SESSION['loggedin'] = true;  


               }else{
              
               echo "<script> alert('Wrong Credentials!!!');</script>";   
               }
}
catch (PDOException $e) {
     echo "<script> alert('Please Check Internet Connection!!!');</script>";  

}
     
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <style>
body {font-family: Arial, Helvetica, sans-serif;}


/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button 
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button 
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 3.5rem;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}


 .input-group {
                    margin-top:30px;
         }
         .input-group-addon
         {
             background:#fff;
             border:none;
             
         }
         .form-control {
                        border:none;
                        box-shadow:none;
                        border-radius:0px;
                        
          
         }
         .textboxes{border:none; margin-left: 20px; border-bottom: 1px solid #4db8ff;width:90%;}
         .textboxes:focus{
                           border-bottom:1px  solid #005c99;
                            outline:none;
                            box-shadow:none;    
                            
         }
         .btn1 {
                  color:white;
                  font-size: 16px;
                  font-weight: bold;
                  background:linear-gradient(to right,#4db8ff ,#005c99);
                  border-radius: 3px;
                  border: none;
                  min-width: 140px;
                  outline: none !important;
                  width:95%;
                  height:35px;
                  margin-left:10px;
                  margin-bottom: 50px;
         }
        .btn1:hover {
                    background-color:#009973;        
             }
         .nav-tabs > li > a {
             color: black;
             font-size: 20px;
         }
         .errormsg {
         
           
             color:red;
       margin-bottom:-20px;
       margin-left:45px;
            

         }
       
</style>



    <title>Cake Factory</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  
  <script type="text/javascript">  
  
         function name()
        {
            var name = document.getElementById("txtname").value;
           
            if (name == "") {
                document.getElementById("nameerror").innerHTML = "Name is Empty";
                return false;
            }
            else if(!isNaN(name))
            {
                document.getElementById("nameerror").innerHTML = "Name is invalid";
                style="display:none" 
            }
            else
            {
                document.getElementById("nameerror").innerHTML = "";
                return true;
            }
        }
        function email()
        {
           
            var email = document.getElementById("txtemail").value;
            var atposition = email.indexOf("@");
            var dotposition = email.dotposition;
            if (email == "") {
                document.getElementById("emailerror").innerHTML = "email is Empty";
                return false;

            }
            else if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= email.length) {
                document.getElementById("emailerror").innerHTML = "email is not correct";
                return false;
            }
            else {
                document.getElementById("emailerror").innerHTML = "";
                return true;
            }
           
        }
        function password()
        {
            var password = document.getElementById("password").value;
            if(password=="")
            {
                document.getElementById("passerror").innerHTML = "password is Empty";
                return false;
            }
            else {
                document.getElementById("passerror").innerHTML = "";
                return true;
            }
        }
        function conformpassword()
        {
            var password = document.getElementById("password").value;
            var confpass = document.getElementById("passwordconform").value;
            if(confpass=="")
            {
                document.getElementById("confpasserror").innerHTML = "confirm password is Empty";
                return false;
            }
            else if(password!=confpass)
            {
                document.getElementById("confpasserror").innerHTML = " password not match";
                return false;
            }
            else {
                document.getElementById("confpasserror").innerHTML = "";
                return true;
            }
        }
      
        function number()
        {
            var number = document.getElementById("txtnumber").value;
            if(number=="")
            {
                document.getElementById("numbererror").innerHTML = " number is empty";
                return false;
            }
            else if(number.length!=10)
            {
                document.getElementById("numbererror").innerHTML = " number is wrong";
                return false;
            }
            else if(isNaN(number))
            {
                document.getElementById("numbererror").innerHTML = " enter number value only";
                return false;
            }
            else {
                document.getElementById("numbererror").innerHTML = "";
                return true;
            }
        }
        function validate() {
          
            name();
            email();
            number();
            password();
            conformpassword();

            if(name()  && email() && number() && password() && conformpassword()){
                return true;
            }else{
              return false;

            }
            
          
        }

          
            
       

  
  </script>
  <script type="text/javascript">
      function loginemail()
        {
           
            var loginemail = document.getElementById("loginemail").value;
            var atposition = loginemail.indexOf("@");
            var dotposition = loginemail.dotposition;
            if (loginemail == "") {
                document.getElementById("loginemailerror").innerHTML = "email is Empty";
                return false;

            }
            else if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= loginemail.length) {
                document.getElementById("loginemailerror").innerHTML = "email is not correct";
                return false;
            }
            else {
                document.getElementById("loginemailerror").innerHTML = "";
                return true;
            }
           
        }
        function loginpassword()
        {
            var loginpassword = document.getElementById("loginpass").value;
            if(loginpassword=="")
            {
                document.getElementById("loginpasserror").innerHTML = "password is Empty";
                return false;
            }
            else {
                document.getElementById("loginpasserror").innerHTML = "";
                return true;
            }
        }

            function loginvalidate() {
          
           
             loginemail();
            loginpassword();

            if(loginemail() && loginpassword()){
                return true;
            }else{
              return false;

            }
            
          
        }
  </script>

    
  
  </head>
  <body class="goto-here">
    <div class="py-1 bg-primary">
      <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
          <div class="col-lg-12 d-block">
            <div class="row d-flex">
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                <span class="text">+ 1235 2355 87</span>
              </div>
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                <span class="text" value=""><?php echo ($_SESSION['currentUserLoggedIn']);?></span>
              </div>
              <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                <span class="text">0-5 Business days delivery &amp; Free Returns</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      
            	    <div class="container">
                    	      <a class="navbar-brand" href="index.php">Cake Factory</a>
                    	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    	        <span class="oi oi-menu"></span> Menu
                    	      </button>

            	      <div class="collapse navbar-collapse" id="ftco-nav">
            	        <ul class="navbar-nav ml-auto">
                          	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                          	          <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                                        	<a class="dropdown-item" href="shop.php?category=all">Shop</a>
                                          <a class="dropdown-item" href="cart.php">Cart</a>
                                          <a class="dropdown-item" href="checkout.php">Checkout</a>
                                        </div>
                                      </li>

                                      <li class="nav-item"><a href="orders.php" class="nav-link">Ordered</a></li>
                          	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                          	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                          	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                          	          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[<?php echo ($_SESSION['cartCount']); ?>]</a></li>
                          	          <li class="nav-item"> 
                          <button id="loginButton" onclick="document.getElementById('id01').style.display='block'" style="width:auto;margin-left: 10px;height: 50px;margin-bottom: 10px;">Login</button></li>


                          <li class="nav-item"> <a>
                                  <form action="index.php" method="POST">
                                  <input type="hidden" name="Signout"/>
                                <input type="submit" id="logoutButton" value="Logout" name="Logout" onclick="document.getElementById('id02').style.display='none'" style="width:auto;margin-left: 10px;height: 50px;margin-bottom: 10px;"/></form></a>
                        </li>



                      </ul>
                    </div>
                  </div>




  </nav>




    
    <div id="id01" class="modal">
  
  <form class="modal-content animate" style="width: 50%" name="modal" action ="" method="post">
    <div class="imgcontainer">
           <span onclick="document.getElementById('id01').style.display='none'" style="font-size: 30px;line-height: 2" class="close" title="Close Modal">&times;</span>
    
    </div>

    <div class="container">
    
                    <ul class="nav nav-pills">
                        <li class="active"><a  data-toggle="pill" href="#home" class="show">Login</a></li>
                        <li><a data-toggle="pill" href="#menu1">Signup</a></li>
                    </ul>
                    
        <div class="tab-content">
                             
                                    <div id="home" class="tab-pane fade in active show">
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return loginvalidate()" method="POST">
                                                    <div class="input-group" style="margin-top: 100px;">
                                                          <span class="input-group-addon"><i class="fas fa-user"></i></span>
                                                          <input type="text" id="loginemail" name="loginemail" placeholder="Enter Your username" class=" textboxes"/>   
                                                          <span id="loginemailerror" class="errormsg"></span> 
                                                                        
                                                    </div>
                                                    <div class="input-group">
                                                              <span class="input-group-addon"><i class="fas fa-key"></i></span>
                                                              <input type="password"  name="loginpass" id="loginpass" placeholder="Enter Your password" class=" textboxes"/>   
                                                                <span id="loginpasserror" class="errormsg"></span> 
                                                    </div>
                                                    <div class="input-group">
                                                         <input type="hidden" name="loginNow"/>        
                                                         <input type="submit" name="logbtn" value="LOGIN" onclick="return loginvalidate()"class="btn1" />       
                                                    </div> 
                                      
                                           </form>

                        
                                    </div>
                    

                          <div id="menu1" class="tab-pane fade">
                        
                              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validate()" method="POST">
                                     <div class="input-group" style="margin-top: 50px;">
                                            <span class="input-group-addon"><i class="fas fa-user"></i></span>
                                            <input type="text" name="txtname" id="txtname" placeholder="Enter Your Name" class=" textboxes"/>   
                                            <span id="nameerror" class="errormsg"></span>
                                    </div>

                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fas fa-key"></i></span>
                                            <input type="text"  name="txtemail" id="txtemail" placeholder="Enter Your Email" class=" textboxes"/>   
                                            <span id="emailerror" class="errormsg"></span>
                                    </div>

                                    <div class="input-group">
                                             <span class="input-group-addon"><i class="fas fa-key"></i></span>
                                             <input type="text"  name="txtnumber" id="txtnumber" placeholder="Enter Your Number" class=" textboxes"/>   
                                             <span id="numbererror" class="errormsg"></span>
                                    </div>

                                    <div class="input-group">
                                          <span class="input-group-addon"><i class="fas fa-key"></i></span>
                                          <input type="text"  name="password" id="password" placeholder="Enter Your password" class=" textboxes"/>   
                                          <span id="passerror" class="errormsg"></span>
                                    </div>
                                    <div class="input-group">
                                              <span class="input-group-addon"><i class="fas fa-key"></i></span>
                                               <input type="text"  name="passwordconform" id="passwordconform" placeholder="Enter Your Comfirm password" class=" textboxes"/>
                                              <span id="confpasserror" class="errormsg"></span>
                                    </div>
                                    <div class="input-group">
                                          <input type="hidden" name="registerUser"/><!-- to check if there's a new registration to save to db--> 
                                          <input type="submit" name="signbtn" value="SIGNUP"  class="btn1" /> 
                                    </div>
                              </form>
                                                      
                           </div>
    
        </div>
    
    
  </div>

    <!-- /div>  -->
<input type="submit" name="unknown" style="display: none;"/>
  </form>
</div>



  
    <!-- END nav -->




