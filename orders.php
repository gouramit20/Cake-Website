
<?php 

//save add to cart
try {
   $conn = new PDO("sqlsrv:server = tcp:cakewebsitedb.database.windows.net,1433; Database = CakeDB", "AlbinoCakeWesite", "ACWdb#321");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}


include 'header.php';

?>



 <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Orders</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        
						        <th>Date</th>
						        <th>&nbsp;</th>
						        <th>Product name</th>
						        <th>Price</th>
                    <th>Size</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>

						    		<?php 

                



                                        $sql = "select customerOrderDate,categoryId,cakeId,cakeName,cakeSize,cakePrice as basePrice,quantity,cakePrice*quantity as TotalPrice from Cake,CustomerOrder,Customer,Category where cakeId=fkcakeIdOrder and customerId=fkcustomerIdOrder and customerName='".$_SESSION['currentUserLoggedIn']."' and categoryId=fkcategoryIdCake order by customerOrderDate desc";
                                        $result=$conn->query($sql);
                                        $result->setFetchMode(PDO::FETCH_ASSOC);
                                        $total=0;
                                        while ($row = $result->fetch())   
									{
							    	
										$total+=$row['TotalPrice'];
									    echo '	<tr class="text-center">
										        <td >
													'.$row['customerOrderDate'].'
										        
										        </td>
										        
										        <td class="image-prod"><div class="img" style="background-image:url(images/'.$row['categoryId'].'_'.$row['cakeId'].'.jpg);"></div></td>
										        
										        <td class="product-name">
										        	<h3>'.$row['cakeName'].'</h3>
										        </td>
										        
										        <td class="price">'.$row['basePrice'].'</td>

							                    <td class="Size">
							                      <select name="size">

    												<option selected="selected" value="'.$row['cakeSize'].'">'.$row['cakeSize'].'</option>
							                        
							                      </select>
							                  
							                    </td><!-- drop down added -->
										        
										        <td class="quantity">
										        	<div class="input-group mb-3">
									             	<input type="text" name="quantity" class="quantity form-control input-number" value="'.$row['quantity'].'" min="1" max="100">
									          	</div>
									          	</td>
									        	<td class="total">'.$row['TotalPrice'].'</td>

									     		 </tr><!-- END TR-->
								      		';
								  	}

						    	?>
						      
						      

						      
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		
			</div>
		</section>




<?php include 'footer.php';?>


<script type="text/javascript">
	checkUserLoggedInn();
	     			 function checkUserLoggedInn(){
					
					if(<?php echo ("'".$_SESSION["currentUserLoggedIn"]."'");?>!="Not Logged" && <?php echo ("'".$_SESSION["loggedin"]."'");?>==true){
         
					
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