
<?php include 'header.php';?>


    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Checkout</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
						<form action="#" class="billing-form">
							<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Firt Name</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">State / Country</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="" id="" class="form-control">
		                  	<option value="">France</option>
		                    <option value="">Italy</option>
		                    <option value="">Philippines</option>
		                    <option value="">South Korea</option>
		                    <option value="">Hongkong</option>
		                    <option value="">Japan</option>
		                  </select>
		                </div>
		            	</div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Street Address</label>
	                  <input type="text" class="form-control" placeholder="House number and street name">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                  <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Town / City</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Postcode / ZIP *</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                	<div class="form-group mt-4">
										<div class="radio">
										  <label class="mr-3"><input type="radio" name="optradio"> Create an Account? </label>
										  <label><input type="radio" name="optradio"> Ship to different address</label>
										</div>
									</div>
                </div>
	            </div>
	          </form><!-- END -->
					</div>
					<div class="col-xl-5">
	          <div class="row mt-5 pt-3">




	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Cake Name &nbsp;Size &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;   Quantity &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; Price</h3>

	          			<?php 

							try {
							   $conn = new PDO("sqlsrv:server = tcp:cakewebsitedb.database.windows.net,1433; Database = CakeDB", "AlbinoCakeWesite", "ACWdb#321");
							    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							}
							catch (PDOException $e) {
							    print("Error connecting to SQL Server.");
							    die(print_r($e));
							}
							 $sql = "select cakeName,cakeSize,cakePrice as basePrice,quantity,cakePrice*quantity as TotalPrice from Cake,Cart,Customer where cakeId=fkcakeIdCart and customerId=fkcustomerIdCart and customerId=".$_SESSION['currentUserLoggedInId'];
                                        $result=$conn->query($sql);
                                        $result->setFetchMode(PDO::FETCH_ASSOC);
                                        $total=0;
                                        while ($row = $result->fetch())   
									{
										$total+=$row['basePrice']*$row['quantity'];
                 
	          				echo '	
	          					<p class="d-flex">
		    						<span>'.$row['cakeName'].'</span>
		    						<span>'.$row['cakeSize'].'</span>
		    						<span>'.$row['quantity'].'</span>
		    						<span>Rs.'.$row['basePrice']*$row['quantity'].'</span>
		    					</p>
		    					';
		    				}

		    			?>
		    					
								</div>
	          	</div>


	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Cart Total</h3>
	          			<p class="d-flex">
		    						<span>Subtotal</span>
		    						<span><?php echo ("Rs.".$total);?></span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Delivery</span>
		    						<span>$0.00</span>
		    					</p>
		    					
		    					<hr>
		    					<p class="d-flex total-price">
		    						<span>Total</span>
		    						<span><?php echo ("Rs.".$total);?></span>
		    					</p>
								</div>
	          	</div>
	          	<div class="col-md-12">
	          		<div class="cart-detail p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Payment</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
												<form action="index.php" method="POST">
													<input type="hidden" name="paid" value="done">
											   <label><input type="submit" name="btn" value="Order and Pay" class="btn btn-black py-3 px-5"></label>
											   </form>
											</div>
										</div>
									</div>
									
								</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->



<?php include 'footer.php';?>

<script type="text/javascript">
	
	     			 function checkUserLoggedInn(){
					
					if(<?php echo ("'".$_SESSION["currentUserLoggedIn"]."'");?>!="" && <?php echo ("'".$_SESSION["loggedin"]."'");?>==true){
         
					
              document.getElementById("loginButton").style.display="none";
              document.getElementById("logoutButton").style.display="display";
             

         
          return true;
      }
      else
      {
            
              document.getElementById("loginButton").style.display="display";
              document.getElementById("logoutButton").style.display="none";
             $("#loginButton").click();
      

          return false;
		}

      	
}
</script>

      </body>
</html>