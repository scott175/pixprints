<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pix prints </title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
    </style>
</head>
    
<body bgcolor="020017">
    
         <?php include "setup.php";
        
    $sql = "SELECT * FROM pages ";
    $result = $conn->query($sql);
   # print $sql;
    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
        #debugging print_r($row);
        $title3=$row["title3"];
        $image9=$row["image9"];
        $image10=$row["image10"];
        $image11=$row["image11"];
        $image12=$row["image12"];
        $image13=$row["image13"];
        $image14=$row["image14"];
        $image15=$row["image15"];
        $image16=$row["image16"];
        $image17=$row["image17"];
        $image18=$row["image18"];
        $image19=$row["image19"];

    ?>
    
    <?php
        
    } else {
        echo "0 results";
    }
$conn->close();
      
    ?>

    <?php include("nav-bar.php"); ?>
    
    <div class="gallery-header">
        
        <?php echo "<a>$title3</a>"; ?>
    
    </div>
    
    <a href="shop-page.php">
    
  <div class="row"> 
  			<div class="column">
                <div class="container1">
                    <?php echo "<a>$image9</a>"; ?>
                </div>
                <div class="container2">
                    <?php echo "<a>$image10</a>"; ?>
                </div>    
                <div class="container3">
                    <?php echo "<a>$image11</a>"; ?>
                </div>
                <div class="container4">
                    <?php echo "<a>$image12</a>"; ?>
                </div>
      
                
  			</div>
  			<div class="column">
                 <div class="container5">
                    <?php echo "<a>$image13</a>"; ?>
                </div>
                
                <div class="container6">
                    <?php echo "<a>$image14</a>"; ?>
]                </div>
    
    

    			</div> 
      
      
            <div class="column">
                     
                <div class="container8">
                    <?php echo "<a>$image15</a>"; ?>
                </div>    
                     
                <div class="container9">
                    <?php echo "<a>$image16</a>"; ?>
                </div>    
                
                <div class="container10">   
                    <?php echo "<a>$image17</a>"; ?>

    			</div>  
                
            </div>    
      
      		<div class="column">
                <div class="container11">   
                    <?php echo "<a>$image18</a>"; ?>
                </div>    
                
                <div class="container12">   
                    <?php echo "<a>$image19</a>"; ?>
                </div>    
    			 
                </div>  
		</div>  
    </a>
    
    <?php include("footer.php"); ?>

    
    <script src="app.js"> </script>

</body>
</html>