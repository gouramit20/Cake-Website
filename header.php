<?php 


?>

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
            

         }
</style>









    <title>Vegefoods - Free Bootstrap 4 Template by Colorlib</title>
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
						    <span class="text">youremail@email.com</span>
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
	      <a class="navbar-brand" href="index.html">Vegefoods</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.html">Shop</a>
              	<a class="dropdown-item" href="wishlist.html">Wishlist</a>
                <a class="dropdown-item" href="product-single.html">Single Product</a>
                <a class="dropdown-item" href="cart.html">Cart</a>
                <a class="dropdown-item" href="checkout.html">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	          <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
	          <li class="nav-item"> 
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;margin-left: 10px;height: 50px;margin-bottom: 10px;">Login</button></a></li>

	        </ul>
	      </div>
	    </div>




	  </nav>
	  <div id="id01" class="modal">
  
  <form class="modal-content animate" style="width: 50%" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" style="font-size: 30px;line-height: 2" class="close" title="Close Modal">&times;</span>
    
    </div>

    <div class="container">
    
 <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Login</a></li>
    <li><a data-toggle="pill" href="#menu1">Signup</a></li>
    
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
      <div class="input-group" style="margin-top: 100px;">
                <span class="input-group-addon"><i class="fas fa-user"></i></span>
            <input type="text" placeholder="Enter Your username" class=" textboxes"/>   
                           <div id="passerror" class="errormsg"></div>
                  </div>
                  <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-key"></i></span>
            <input type="text"  name="txtlogname" placeholder="Enter Your password" class=" textboxes"/>   
               <div id="passerror" class="errormsg"></div>
                  </div>
                  <div class="input-group">
                
           <input type="submit" name="logbtn" value="LOGIN" class="btn1"/>   
                        
                  </div>
      
      
      
    </div>
    <div id="menu1" class="tab-pane fade">
      
       <div class="input-group" style="margin-top: 50px;">
                <span class="input-group-addon"><i class="fas fa-user"></i></span>
            <input type="text" placeholder="Enter Your Name" class=" textboxes"/>   
                           <div id="passerror" class="errormsg"></div>
                  </div>
                  <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-key"></i></span>
            <input type="text"  name="txtlogname" placeholder="Enter Your Email" class=" textboxes"/>   
               <div id="passerror" class="errormsg"></div>
                  </div>
                  <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-key"></i></span>
            <input type="text"  name="txtlogname" placeholder="Enter Your Number" class=" textboxes"/>   
               <div id="passerror" class="errormsg"></div>
                  </div>
                  <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-key"></i></span>
            <input type="text"  name="txtlogname" placeholder="Enter Your password" class=" textboxes"/>   
               <div id="passerror" class="errormsg"></div>
                  </div>
                  <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-key"></i></span>
            <input type="text"  name="txtlogname" placeholder="Enter Your Comfirm password" class=" textboxes"/>   
               <div id="passerror" class="errormsg"></div>
                  </div>
                  <div class="input-group">
                
           <input type="submit" name="logbtn" value="SIGNUP" class="btn1"/>   
                        
                  </div>
    
    </div>
    
    
  </div>

    </div>

   
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

	
    <!-- END nav -->




