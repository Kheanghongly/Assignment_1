<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "shop";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $id = $_GET["id"];
  $sql_product = "select * from products natural join assets where id=".$id;
  $product = $conn->query($sql_product);

  $sql_feature = "select * from features";
  $features = $conn->query($sql_feature);

  $sql_category = "select * from categories";
  $category = $conn->query($sql_category);

  $category_section = "";

  if(isset($_POST['category'])){
    $cate = $_POST['category'];

    $category_section = "select* from products natural join assets where category_id = {$cate};";
    $products = $conn->query($category_section);
  }

  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/Shop/assets/css/style.css">
  <script src="/Shop/assets/js/loadingMore.js"></script>

</head>
<body>
  <!-- Navigation Bar -->

  <?php
  include ("include/nav.php");
  ?>
  
  <!-- feature -->

  
<p class="spacing"></p>
  <!-- promotion -->
  <?php
  include ("include/promotion.php");
  ?>
  <!-- Category -->
  <p class="spacing"></p>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
      <h4 id="cate"><b>Category List</b></h4>
      <hr>
      <?php while($row2 = $category->fetch_assoc()) { ?>
  
          <div>
            <ul class="CategoryUl">
              <li>
              <form action="" method="post">
                  <input type="hidden" name="category" value="<?php echo $name_category = $row2["id"];?>">
                  <button type="submit" class="categoryButton">
                  <img src="/Shop/<?php echo $icon = $row2["icon"];?>" alt="..." class="CategoryIcon"><?php echo $name_category = $row2["name"];?>
                  </button>
              </form>
              </li>
            </ul>
          </div>
        
      <?php } ?>
      </div>
      <div class="col-md-9">
        <?php
        
            if(isset($products)){ ?>
            
              <div class="row">
              <?php  
               while($row1 = $products->fetch_assoc()) { ?>
               
                <a href="/Shop/assignment2.php/?id=<?php echo $row1["id"]; ?>">
                  <div class="col-md-4">
                    <div class="card each_product" style="width: 100%"> 
                      <img class="card-img-top product" src="<?php echo $row1["resource_path"]; ?>" alt="...">
                      <span class="discount"><?php echo $discount = $row1["discount"]; ?>%</span>
                      <div class="card-body">
                        <p class="card-text"><?php echo $row1["name"]; ?><br> <?php echo $description = $row1["description"];?>
                        <p>Original Price : <del style="color: red;"><?php echo $price = $row1["price"]; ?>$</del></p>
                        <?php $after_discount = ((100-$discount) * $price)/100;?>
                        <p>After Discount : <span class="text-success"><?php echo $after_discount; ?>$</span></p>
                        <a href="#" class="btn btn-success addCard">Cart</a>
                      </div>
                    </div>
                  </div>
                </a>
                
               
              <?php } } ?>
        <?php
            if(!isset($products)){
              while($row1 = $product->fetch_assoc()) { ?>
        <div class="row">
            <div class="card mb-3" style="width:100%;">
            <div class="row no-gutters">
              <div class="col-md-6">
                <img src="<?php echo $row1["resource_path"]; ?>" class="card-img" alt="...">
                <span class="discount ass2"><?php echo $discount = $row1["discount"]; ?>%</span>
                <div class="card-body product33">
                      <img class="select_product" src="/Shop/assets/icon/I-shirt.png" alt=""> &nbsp;&nbsp;
                      <img class="select_product" src="/Shop/assets/icon/I-shirt.png" alt=""> &nbsp;&nbsp;
                      <img class="select_product" src="/Shop/assets/icon/I-shirt.png" alt="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="card-body">
                <span><b><?php echo $row1["name"]; ?></b></span>
                <span class="price"><span><del style="color: red;"><?php echo $price = $row1["price"]; ?>$</del><?php $after_discount = ((100-$discount) * $price)/100;?></span> &nbsp; <span class="text-success"><?php echo $after_discount; ?>$</span></span>
                <p><?php echo $description = $row1["description"];?></p>
                <a href="#" class="btn btn-success card11">Cart</a>
                <div class="product44">
                  <div class="select">Male T-shirt</div> &nbsp;
                  <div class="select">Single Color</div>
                </div>
                </div>
              </div>
            </div>
            
            </div>
            
            <?php include 'include/reviews.php';?>
        
    

        

        <?php } } ?>
        
        
        
      </div>
    </div>
  </div>
  

</body>

</html>


