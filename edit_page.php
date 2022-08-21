<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pix prints </title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <?php include"setup.php";
    print_r($_GET);
    $pageID= $_GET["id"]; 
         ?>
    
     <?php include "setup.php";
        
    $sql = "SELECT * FROM pages where id=$pageID";
    $result = $conn->query($sql);
   # print $sql;
    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
        #debugging print_r($row);
        $title1=$row["title1"];
        $para1=$row["para1"];
        $image1=$row["image1"];
    ?>
    
    <?php
        
    } else {
        echo "0 results";
    }
$conn->close();
      
    ?>
    
  
    
    
    </head>

<?php include("nav-bar.php"); ?>
    
<form action="edit_action_page.php" method="post" >
    <div class="row">
      <div class="col-25">
        <label for="pagenum">Page Number</label>
      </div>
      <div class="col-75">
    <?php print $pageID ?>
          <input type="hidden" id="pageID" name="pageID" value= "<?php print $pageID ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="title1">Title One</label>
      </div>
      <div class="col-75">
        <input type="text" id="title1" name="title1" value="<?php print $title1 ?>">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="para1">Paragraph 1</label>
      </div>
      <div class="col-75">
        <textarea id="para1" name="para1" style="height:200px"><?php print $para1 ?></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="image1">Image One</label>
      </div>
      <div class="col-75">
        <input type="text" id="image1" name="image1" value="<?php print $image1 ?>">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>


    
<?php include("footer.php"); ?>


</body>
</html>