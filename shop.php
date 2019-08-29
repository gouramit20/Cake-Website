

<?php 


include 'header.php';

?>

 <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li id="AllView"><a href="shop.php?category=all"  >All</a></li>
    					<li id="ChocolateView"><a href="shop.php?category=chocolate" >Chocolate</a></li>
    					<li id="CheeseView" ><a href="shop.php?category=cheese">Cheese</a></li>
    					<li id="FruitView" ><a href="shop.php?category=fruit">Fruit</a></li>
    					<li id="CupcakeView" ><a href="shop.php?category=cupcake">Cupcake</a></li>
    				</ul>
    			</div>
    		</div>
    		<div class="row">
                    <?php 

                    if($_GET['category']=='all'){
                        all();
                    }
                     if($_GET['category']=='chocolate'){
                        chocolate();
                    }
                    if($_GET['category']=='cheese'){
                        cheese();
                    }
                    if($_GET['category']=='fruit'){
                        fruit();
                    }  
                    if($_GET['category']=='cupcake'){
                        cupcake();
                    }  

                        //$conn = mysqli_init();tr
                    /*
                    try{


                       $connectionInfo = array("UID" => "AlbinoCakeWesite@cakewebsitedb", "pwd" => "ACWdb#321", "Database" => "CakeDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
                    
                        $serverName = "tcp:cakewebsitedb.database.windows.net,1433";
                        $conn = sqlsrv_connect($serverName, $connectionInfo);

                         if ($conn == FALSE)
                                echo (sqlsrv_errors());

                    }
catch (Exception $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
*/
/*
$conn=mysqli_connect("cakewebsitedb.database.windows.net","AlbinoCakeWesite","ACWdb#321","CakeDB",1433);
echo mysqli_error();
if(!$conn)
{
    echo "asadsdas";
}

*/

     //all();                  
 

                    function all(){
                        try {
    $conn = new PDO("sqlsrv:server = tcp:cakewebsitedb.database.windows.net,1433; Database = CakeDB", "AlbinoCakeWesite", "ACWdb#321");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}



                                        //delete('deleteIfNeeded');
                                        $sql = "SELECT fkcategoryIdCake,cakeName,cakeId,cakePrice FROM Cake";
                                        $result=$conn->query($sql);
                                        $result->setFetchMode(PDO::FETCH_ASSOC);
                                        while ($row = $result->fetch()) {               
                                              echo '   <div class="col-md-6 col-lg-3 ftco-animate" id="deleteIfNeeded">
                                                    <div class="product">
                                                        <a href="product-single.php?cakeName='.$row['cakeName'].'&cakeCategory='.$row['fkcategoryIdCake'].'&cakeId='.$row['cakeId'].'&cakePrice='.$row['cakePrice'].'" class="img-prod"><img id="product-1" class="img-fluid" src="images/'.$row['fkcategoryIdCake'].'_'.$row['cakeId'].'.jpg" alt="Colorlib Template">
                                                            <span class="status">30%</span>
                                                            <div class="overlay"></div>
                                                        </a>
                                                        <div class="text py-3 pb-4 px-3 text-center">
                                                            <h3 id="'.$row['cakeId'].'"><a href="#">'.$row['cakeName'].'</a></h3>
                                                            <div class="d-flex">
                                                                <div class="pricing">
                                                                    <p class="price"><!-- <span class="mr-2 price-dc">Rs.220.00</span> -->
                                                                        <span id="productPrice'.$row['cakeId'].'" class="price-sale">'.$row['cakePrice'].'</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="bottom-area d-flex px-3">
                                                                <div class="m-auto d-flex">
                                                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                                                        <span><i class="ion-ios-menu"></i></span>
                                                                    </a>
                                                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                        <span><i class="ion-ios-cart"></i></span>
                                                                    </a>
                                                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                                                        <span><i class="ion-ios-heart"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        ';
                                        //var_dump($row);
                                        }


                                    }
                     function chocolate(){
                           try {
    $conn = new PDO("sqlsrv:server = tcp:cakewebsitedb.database.windows.net,1433; Database = CakeDB", "AlbinoCakeWesite", "ACWdb#321");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}




                                        $sql = "SELECT fkcategoryIdCake,cakeName,cakeId,cakePrice FROM Cake where fkcategoryIdCake=1";
                                        $result=$conn->query($sql);
                                        $result->setFetchMode(PDO::FETCH_ASSOC);
                                        while ($row = $result->fetch()) {       
    
                                             
                                             echo '   <div class="col-md-6 col-lg-3 ftco-animate" id="deleteIfNeeded">
                                                    <div class="product">
                                                         <a href="product-single.php?cakeName='.$row['cakeName'].'&cakeCategory='.$row['fkcategoryIdCake'].'&cakeId='.$row['cakeId'].'&cakePrice='.$row['cakePrice'].'" class="img-prod"><img id="product-1" class="img-fluid" src="images/'.$row['fkcategoryIdCake'].'_'.$row['cakeId'].'.jpg" alt="Colorlib Template">
                                                            <span class="status">30%</span>
                                                            <div class="overlay"></div>
                                                        </a>
                                                        <div class="text py-3 pb-4 px-3 text-center">
                                                            <h3 id="'.$row['cakeId'].'"><a href="#">'.$row['cakeName'].'</a></h3>
                                                            <div class="d-flex">
                                                                <div class="pricing">
                                                                    <p class="price"><!-- <span class="mr-2 price-dc">Rs.220.00</span> -->
                                                                        <span id="productPrice'.$row['cakeId'].'" class="price-sale">'.$row['cakePrice'].'</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="bottom-area d-flex px-3">
                                                                <div class="m-auto d-flex">
                                                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                                                        <span><i class="ion-ios-menu"></i></span>
                                                                    </a>
                                                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                        <span><i class="ion-ios-cart"></i></span>
                                                                    </a>
                                                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                                                        <span><i class="ion-ios-heart"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        ';
                                        //var_dump($row);
                                        }

                                        

                                    }
                                

                                


                    function fruit(){
                                                   try {
    $conn = new PDO("sqlsrv:server = tcp:cakewebsitedb.database.windows.net,1433; Database = CakeDB", "AlbinoCakeWesite", "ACWdb#321");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}



                                        $sql = "SELECT fkcategoryIdCake,cakeName,cakeId,cakePrice FROM Cake where fkcategoryIdCake=2";
                                        $result=$conn->query($sql);
                                        $result->setFetchMode(PDO::FETCH_ASSOC);
                                        while ($row = $result->fetch()) {               
                                           echo '   <div class="col-md-6 col-lg-3 ftco-animate" id="deleteIfNeeded">
                                                    <div class="product">
                                                         <a href="product-single.php?cakeName='.$row['cakeName'].'&cakeCategory='.$row['fkcategoryIdCake'].'&cakeId='.$row['cakeId'].'&cakePrice='.$row['cakePrice'].'" class="img-prod"><img id="product-1" class="img-fluid" src="images/'.$row['fkcategoryIdCake'].'_'.$row['cakeId'].'.jpg" alt="Colorlib Template">
                                                            <span class="status">30%</span>
                                                            <div class="overlay"></div>
                                                        </a>
                                                        <div class="text py-3 pb-4 px-3 text-center">
                                                            <h3 id="'.$row['cakeId'].'"><a href="#">'.$row['cakeName'].'</a></h3>
                                                            <div class="d-flex">
                                                                <div class="pricing">
                                                                    <p class="price"><!-- <span class="mr-2 price-dc">Rs.220.00</span> -->
                                                                        <span id="productPrice'.$row['cakeId'].'" class="price-sale">'.$row['cakePrice'].'</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="bottom-area d-flex px-3">
                                                                <div class="m-auto d-flex">
                                                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                                                        <span><i class="ion-ios-menu"></i></span>
                                                                    </a>
                                                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                        <span><i class="ion-ios-cart"></i></span>
                                                                    </a>
                                                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                                                        <span><i class="ion-ios-heart"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        ';
                                        //var_dump($row);
                                        }

                                    }


                    function cheese(){
                                                   try {
    $conn = new PDO("sqlsrv:server = tcp:cakewebsitedb.database.windows.net,1433; Database = CakeDB", "AlbinoCakeWesite", "ACWdb#321");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}



                                        $sql = "SELECT fkcategoryIdCake,cakeName,cakeId,cakePrice FROM Cake where fkcategoryIdCake=3";
                                        $result=$conn->query($sql);
                                        $result->setFetchMode(PDO::FETCH_ASSOC);
                                        while ($row = $result->fetch()) {               
                                             
                                             echo '   <div class="col-md-6 col-lg-3 ftco-animate" id="deleteIfNeeded">
                                                    <div class="product">
                                                         <a href="product-single.php?cakeName='.$row['cakeName'].'&cakeCategory='.$row['fkcategoryIdCake'].'&cakeId='.$row['cakeId'].'&cakePrice='.$row['cakePrice'].'" class="img-prod"><img id="product-1" class="img-fluid" src="images/'.$row['fkcategoryIdCake'].'_'.$row['cakeId'].'.jpg" alt="Colorlib Template">
                                                            <span class="status">30%</span>
                                                            <div class="overlay"></div>
                                                        </a>
                                                        <div class="text py-3 pb-4 px-3 text-center">
                                                            <h3 id="'.$row['cakeId'].'"><a href="#">'.$row['cakeName'].'</a></h3>
                                                            <div class="d-flex">
                                                                <div class="pricing">
                                                                    <p class="price"><!-- <span class="mr-2 price-dc">Rs.220.00</span> -->
                                                                        <span id="productPrice'.$row['cakeId'].'" class="price-sale">'.$row['cakePrice'].'</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="bottom-area d-flex px-3">
                                                                <div class="m-auto d-flex">
                                                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                                                        <span><i class="ion-ios-menu"></i></span>
                                                                    </a>
                                                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                        <span><i class="ion-ios-cart"></i></span>
                                                                    </a>
                                                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                                                        <span><i class="ion-ios-heart"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        ';
                                        //var_dump($row);
                                        }

                                    }


                    function cupcake(){
                                                   try {
    $conn = new PDO("sqlsrv:server = tcp:cakewebsitedb.database.windows.net,1433; Database = CakeDB", "AlbinoCakeWesite", "ACWdb#321");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}



                                        $sql = "SELECT fkcategoryIdCake,cakeName,cakeId,cakePrice FROM Cake where fkcategoryIdCake=4";
                                        $result=$conn->query($sql);
                                        $result->setFetchMode(PDO::FETCH_ASSOC);
                                        while ($row = $result->fetch()) {               
                                             
                                           echo '   <div class="col-md-6 col-lg-3 ftco-animate" id="deleteIfNeeded">
                                                    <div class="product">
                                                         <a href="product-single.php?cakeName='.$row['cakeName'].'&cakeCategory='.$row['fkcategoryIdCake'].'&cakeId='.$row['cakeId'].'&cakePrice='.$row['cakePrice'].'" class="img-prod"><img id="product-1" class="img-fluid" src="images/'.$row['fkcategoryIdCake'].'_'.$row['cakeId'].'.jpg" alt="Colorlib Template">
                                                            <span class="status">30%</span>
                                                            <div class="overlay"></div>
                                                        </a>
                                                        <div class="text py-3 pb-4 px-3 text-center">
                                                            <h3 id="'.$row['cakeId'].'"><a href="#">'.$row['cakeName'].'</a></h3>
                                                            <div class="d-flex">
                                                                <div class="pricing">
                                                                    <p class="price"><!-- <span class="mr-2 price-dc">Rs.220.00</span> -->
                                                                        <span id="productPrice'.$row['cakeId'].'" class="price-sale">'.$row['cakePrice'].'</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="bottom-area d-flex px-3">
                                                                <div class="m-auto d-flex">
                                                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                                                        <span><i class="ion-ios-menu"></i></span>
                                                                    </a>
                                                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                        <span><i class="ion-ios-cart"></i></span>
                                                                    </a>
                                                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                                                        <span><i class="ion-ios-heart"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        ';
                                        //var_dump($row);
                                        }

                                    }
                                       // $conn->close();

                        //Close the connectio
                        //nmysqli_close($conn);

                    ?>
                
    	<!-- 	<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>  -->
    	</div>
    </section>


<?php include 'footer.php';?>

	</body>
</html>