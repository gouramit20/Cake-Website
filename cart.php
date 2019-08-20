
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



                                        $sql = "INSERT into Cart VALUES('".$_POST['selectedSize']."',".$_POST['quantity'].",".$_GET['currentUserId'].",".$_GET['cakeId'].")";
                                        $result=$conn->query($sql);



include 'header.php';

?>



 <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
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
						        <th>&nbsp;</th>
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

                                               try {
    $conn = new PDO("sqlsrv:server = tcp:cakewebsitedb.database.windows.net,1433; Database = CakeDB", "AlbinoCakeWesite", "ACWdb#321");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}



                                        $sql = "select categoryId,cakeId,cakeName,cakeSize,cakePrice as basePrice,quantity,cakePrice*quantity as TotalPrice from Cake,Cart,Customer,Category where cakeId=fkcakeIdCart and customerId=fkcustomerIdCart and customerName='Albino Braganza' and categoryId=fkcategoryIdCake";
                                        $result=$conn->query($sql);
                                        $result->setFetchMode(PDO::FETCH_ASSOC);
                                        $total=0;
                                        while ($row = $result->fetch())   
									{
							    	
										$total+=$row['TotalPrice'];
									    echo '	<tr class="text-center">
										        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
										        
										        <td class="image-prod"><div class="img" style="background-image:url(images/'.$row['categoryId'].'_'.$row['cakeId'].'.jpg);"></div></td>
										        
										        <td class="product-name">
										        	<h3>'.$row['cakeName'].'</h3>
										        	<p>Far far away, behind the word mountains, far from the countries</p>
										        </td>
										        
										        <td class="price">'.$row['basePrice'].'</td>

							                    <td class="Size">
							                      <select name="size">

    												<option selected="selected" value="'.$row['cakeSize'].'">'.$row['cakeSize'].'</option>
							                        <option class="dropdown-item" value="Small">Small(1 KG)</option>
							                        <option class="dropdown-item" value="Medium">Medium(1.5 KG)</option>
							                        <option class="dropdown-item" value="Large">Large(2 KG)</option>
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
    		<div class="row justify-content-end">
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Coupon Code</h3>
    					<p>Enter your coupon code if you have one</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Coupon code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Estimate shipping and tax</h3>
    					<p>Enter your destination to get a shipping estimate</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Country</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">State/Province</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">Zip/Postal Code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>$20.60</span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>$0.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>$3.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>$17.60</span>
    					</p>
    				</div>
    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
			</div>
		</section>




<?php include 'footer.php';?>

      </body>
</html>