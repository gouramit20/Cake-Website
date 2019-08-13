

<?php include 'header.php';?>

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
    					<li id="AllView"><a href="#" class="active">All</a></li>
    					<li id="ChocolateView"><a href="#" >Chocolate</a></li>
    					<li id="CheeseView"><a href="#">Cheese</a></li>
    					<li id="FruitView"><a href="#">Fruit</a></li>
    					<li id="CupcakeView"><a href="#">Cupcake</a></li>
    				</ul>
    			</div>
    		</div>
    		<div class="row">
                    <?php 
                       

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

try {
    $conn = new PDO("sqlsrv:server = tcp:cakewebsitedb.database.windows.net,1433; Database = CakeDB", "AlbinoCakeWesite", "ACWdb#321");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}


$sql = "SELECT cakeName,cakeId,cakePrice FROM Cake";
$result=$conn->query($sql);
$result->setFetchMode(PDO::FETCH_ASSOC);
while ($row = $result->fetch()) {
    
                                             
                                             echo '   <div class="col-md-6 col-lg-3 ftco-animate">
                                                    <div class="product">
                                                        <a href="product-single.html" class="img-prod"><img id="product-1" class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template">
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


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
        
        $(document).ready(function(){
                $("#ChocolateView").click(function(){

                





              $("#product-1").attr('src','images/1Chocolate_chocblackoutcake.jpg');
               $("#product-2").attr('src','images/2Chocolate_chocraspberrycake.jpg');
                $("#product-3").attr('src','images/3Chocolate_choccoconutcake.jpg');
                 $("#product-4").attr('src','images/4Chocolate_mochafudgecake.jpg');
                  $("#product-5").attr('src','images/5Chocolate_chocoreocake.jpg');
                   $("#product-6").attr('src','images/6Chocolate_blackforestcake.jpg');
                    $("#product-7").attr('src','images/7Chocolate_germanchoccake.jpg');
                     $("#product-8").attr('src','images/8Chocolate_chochazelnutlayercake.jpg');
                      $("#product-9").attr('src','images/9Chocolate_chocomintcake.jpg');
                       $("#product-10").attr('src','images/10Chocolate_chocofudgecake.jpg');
                        $("#product-11").attr('src','images/11Chocolate_darkchocolatecake.jpg');
                         $("#product-12").attr('src','images/12Chocolate_chocolatetruffleheartshapecake.jpg');

                         $("#productName-1").text("Chocblackout Cake");
                           $("#productName-2").text("Chocraspberry Cake");
                             $("#productName-3").text("Choccoconut Cake");
                               $("#productName-4").text("Mochafudge Cake");
                                 $("#productName-5").text("Chocoreo Cake");
                                   $("#productName-6").text("Blackforest Cake");
                                     $("#productName-7").text("Germanchoc Cake");
                                       $("#productName-8").text("Chochazelnut Layer Cake");
                                         $("#productName-9").text("Chocomint Cake");
                                           $("#productName-10").text("Chocofudge Cake");
                                             $("#productName-11").text("Dark Chocolate Cake");
                                               $("#productName-12").text("Chocolate Truffleheart Shape Cake");

                                                 $("#productPrice-1").text("Rs.200.00");
                                                  $("#productPrice-2").text("Rs.200.00");
                                                   $("#productPrice-3").text("Rs.200.00");
                                                    $("#productPrice-4").text("Rs.200.00");
                                                     $("#productPrice-5").text("Rs.200.00");
                                                      $("#productPrice-6").text("Rs.200.00");
                                                       $("#productPrice-7").text("Rs.200.00");
                                                        $("#productPrice-8").text("Rs.200.00");
                                                         $("#productPrice-9").text("Rs.200.00");
                                                          $("#productPrice-10").text("Rs.200.00");
                                                           $("#productPrice-11").text("Rs.200.00");
                                                            $("#productPrice-12").text("Rs.200.00");

              });
        });

           $(document).ready(function(){
                $("#CheeseView").click(function(){
                  

              $("#product-1").attr('src','images/01Cheese_MacadamiaNutCrust.jpg');
               $("#product-2").attr('src','images/02Cheese_DuffGoldmansBomb.jpg');
                $("#product-3").attr('src','images/03Cheese_Philadelphia.jpg');
                 $("#product-4").attr('src','images/04Cheese_Amaretto.jpg');
                  $("#product-5").attr('src','images/05Cheese_Stawberrycheesecake.jpg');
                   $("#product-6").attr('src','images/06Cheese_Blueberry.jpg');
                    $("#product-7").attr('src','images/07Cheese_RockRoad.jpg');
                     $("#product-8").attr('src','images/08Cheese_Ombre.jpg');
                      $("#product-9").attr('src','images/09Cheese_TomDaleysBanoffee.jpg');
                       $("#product-10").attr('src','images/10Cheese_Classic.jpg');
                        $("#product-11").attr('src','images/11Cheese_LotusBiscoff.jpg');
                         $("#product-12").attr('src','images/12Cheese_Pumpkin.jpg');

                           $("#productName-1").text("Macadamia Nut Crust Cake");
                           $("#productName-2").text("Duff Goldmans Bomb Cake");
                             $("#productName-3").text("Philadelphia Cake");
                               $("#productName-4").text("Amaretto Cake");
                                 $("#productName-5").text("Stawberry Cake");
                                   $("#productName-6").text("Blueberry Cake");
                                     $("#productName-7").text("Rock Road Cake");
                                       $("#productName-8").text("Ombre Cake");
                                         $("#productName-9").text("TomDaleys Banoffee Cake");
                                           $("#productName-10").text("Classic Cake");
                                             $("#productName-11").text("Lotus Biscoff Cake");
                                               $("#productName-12").text("Pumpkin Cake");

                                                 $("#productPrice-1").text("Rs.200.00");
                                                  $("#productPrice-2").text("Rs.200.00");
                                                   $("#productPrice-3").text("Rs.200.00");
                                                    $("#productPrice-4").text("Rs.200.00");
                                                     $("#productPrice-5").text("Rs.200.00");
                                                      $("#productPrice-6").text("Rs.200.00");
                                                       $("#productPrice-7").text("Rs.200.00");
                                                        $("#productPrice-8").text("Rs.200.00");
                                                         $("#productPrice-9").text("Rs.200.00");
                                                          $("#productPrice-10").text("Rs.200.00");
                                                           $("#productPrice-11").text("Rs.200.00");
                                                            $("#productPrice-12").text("Rs.200.00");


                });
        });

            $(document).ready(function(){
                $("#FruitView").click(function(){
                  

              $("#product-1").attr('src','images/1Fruit_freshfruitcake.jpg');
               $("#product-2").attr('src','images/2Fruit_delectablefruitheartcake.jpg');
                $("#product-3").attr('src','images/3Fruit_premiumfreshfruitscake.jpg');
                 $("#product-4").attr('src','images/4Fruit_yummyfruitcake.jpg');
                  $("#product-5").attr('src','images/5Fruit_deliciousfruitcake.jpg');
                   $("#product-6").attr('src','images/6Fruit_temptingfruitcake.jpg');
                    $("#product-7").attr('src','images/7Fruit_amazingfruitcake.jpg');
                     $("#product-8").attr('src','images/8Fruit_pineapplecake.jpg');
                      $("#product-9").attr('src','images/9Fruit_pineappleextravaganzacake.jpg');
                       $("#product-10").attr('src','images/10Fruit_mangomaharajacake.jpg');
                        $("#product-11").attr('src','images/11Fruit_mangolovercake.jpg');
                         $("#product-12").attr('src','images/12Fruit_mangocakE.jpg');

                           $("#productName-1").text("Fresh Fruit Cake");
                           $("#productName-2").text("Delectable Fruitheart Cake");
                             $("#productName-3").text("Premium Fresh Fruits Cake");
                               $("#productName-4").text("Yummy Fruit Cake");
                                 $("#productName-5").text("Delicious Fruit Cake");
                                   $("#productName-6").text("Tempting Fruit Cake");
                                     $("#productName-7").text("Amazing Fruit Cake");
                                       $("#productName-8").text("Pineapple Cake");
                                         $("#productName-9").text("Pineapple Extravaganza Cake");
                                           $("#productName-10").text("Mango Maharaja Cake");
                                             $("#productName-11").text("Mango Lover Cake");
                                               $("#productName-12").text("Yummy Licious Mango Cake");

                                                 $("#productPrice-1").text("Rs.200.00");
                                                  $("#productPrice-2").text("Rs.200.00");
                                                   $("#productPrice-3").text("Rs.200.00");
                                                    $("#productPrice-4").text("Rs.200.00");
                                                     $("#productPrice-5").text("Rs.200.00");
                                                      $("#productPrice-6").text("Rs.200.00");
                                                       $("#productPrice-7").text("Rs.200.00");
                                                        $("#productPrice-8").text("Rs.200.00");
                                                         $("#productPrice-9").text("Rs.200.00");
                                                          $("#productPrice-10").text("Rs.200.00");
                                                           $("#productPrice-11").text("Rs.200.00");
                                                            $("#productPrice-12").text("Rs.200.00");


                });
        });


            $(document).ready(function(){
                $("#CupcakeView").click(function(){
                  

              $("#product-1").attr('src','images/01CupCake_Vanilla.jpg');
               $("#product-2").attr('src','images/02CupCake_MaryBerrys.jpg');
                $("#product-3").attr('src','images/03CupCake_RoseChampagne.jpg');
                 $("#product-4").attr('src','images/04CupCake_ChaiLatte.jpg');
                  $("#product-5").attr('src','images/05CupCake_ChocolateCoveredStrawberry.jpg');
                   $("#product-6").attr('src','images/06CupCake_VictoriaSponge.jpeg');
                    $("#product-7").attr('src','images/07CupCake_Golden.jpg');
                     $("#product-8").attr('src','images/08CupCake_StrawberryRedVelvet.jpg');
                      $("#product-9").attr('src','images/09CupCake_Confetti.jpg');
                       $("#product-10").attr('src','images/10CupCake_Unicorn.jpg');
                        $("#product-11").attr('src','images/11CupCake_BananaSplit.jpg');
                         $("#product-12").attr('src','images/12CupCake_Rainbow.jpg');

                           $("#productName-1").text("Vanilla Cake");
                           $("#productName-2").text("Mary Berrys Cake");
                             $("#productName-3").text("Rose Champagne Cake");
                               $("#productName-4").text("ChaiLatte Cake");
                                 $("#productName-5").text("Chocolate Covered Strawberry Cake");
                                   $("#productName-6").text("Victoria Sponge Cake");
                                     $("#productName-7").text("Golden Cake");
                                       $("#productName-8").text("Strawberry RedVelvet Cake");
                                         $("#productName-9").text("Confetti Cake");
                                           $("#productName-10").text("Unicorn Cake");
                                             $("#productName-11").text("Banana Split Cake");
                                               $("#productName-12").text("Rainbow Cake");

                                                 $("#productPrice-1").text("Rs.200.00");
                                                  $("#productPrice-2").text("Rs.200.00");
                                                   $("#productPrice-3").text("Rs.200.00");
                                                    $("#productPrice-4").text("Rs.200.00");
                                                     $("#productPrice-5").text("Rs.200.00");
                                                      $("#productPrice-6").text("Rs.200.00");
                                                       $("#productPrice-7").text("Rs.200.00");
                                                        $("#productPrice-8").text("Rs.200.00");
                                                         $("#productPrice-9").text("Rs.200.00");
                                                          $("#productPrice-10").text("Rs.200.00");
                                                           $("#productPrice-11").text("Rs.200.00");
                                                            $("#productPrice-12").text("Rs.200.00");


                });
        });
    </script>
	</body>
</html>