<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "shop";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

    date_default_timezone_set('Asia/Phnom_Penh');

  if(isset($_POST["submit22"])){

    $comment = $_POST["comment"];
    $date = $_POST["date"];
    $product_id = $_POST["product_id"];
    
    //Insert comment to database
    
    $sql_reviews = "INSERT INTO reviews (  `content`,  `written_at`, `product_id` ) VALUE (  '$comment','$date','$product_id')";
    $reviews = $conn->query($sql_reviews);}
     
    //Get product.id = reviews.prodcut_id 

    $sql_review = "SELECT * FROM reviews JOIN products WHERE reviews.product_id = products.id order by written_at DESC";
    $review = $conn->query($sql_review);
  
    $product_id = $_GET["id"];
    $sql_comment = "SELECT * FROM reviews NATURAL JOIN products WHERE reviews.product_id = {$product_id} order by written_at DESC";
    $comment = $conn->query($sql_comment);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        
        <div class="row">
          <div>
            <h3>Comments</h3>
            <?php if(isset($product_id)){?>
              <div>
              <?php while($com = $comment->fetch_assoc()){ ?>
                  <div>
                    <?php echo $com["content"]?> <?php echo $com["written_at"]?>
                  </div>
             
                
             <?php }?>
              </div>
            <?php }?>
            
            
            <?php
              echo '
            <form action="" method="POST">
              <input type="hidden" name="date" value="'.date('Y-m-d H:i:s').'">
              <input type="hidden" name="product_id" value=" '.$_GET['id'].' "> 
              <textarea name="comment" rows="4" cols="100%"></textarea><br>  
              <input type="submit" value="Send" name="submit22">
              <input type="reset" value="Discard" name="discard">
            </form>
          </div>';
          ?>
        </div>
</body>
</html>