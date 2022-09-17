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

    
</head>
    
<body bgcolor="020017">
    
    <?php include("setup.php"); ?>

    <?php include("nav-bar.php"); ?>
    
    
    <?php
        $sql = "SELECT * FROM pages where id=1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            $row = $result->fetch_assoc();
            #deugging print_r($row);
            $title1=$row["title1"];
            $title2=$row["title2"];
            $para1=$row["para1"];
            $image1=$row["image1"];
            $image2=$row["image2"];
            $image3=$row["image3"];
            $image4=$row["image4"];
            $image5=$row["image5"];
            $image6=$row["image6"];
            $image7=$row["image7"];
            $image8=$row["image"];



        
        } else {
            echo "0 results";
        }
    $conn->close(); 
    ?>
        
    
    
    <div class="gallery-header">
        
        
    <a style="color: white; margin: 450px; font-size: 100px; font-family: 'Montserrat', sans-serif;"> <?php echo "  $title1"; ?> </a>
             
    </div>

    <div class="about-us-p">
        
        <?php echo "<a>$para1</a>"; ?>
        
    </div>
    

    <body bgcolor="020017">
        
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
        
    <div class="gallery-header">
        
    <a style="color: white; margin: 435px; font-size: 100px; font-family: 'Montserrat', sans-serif;"><?php echo "$title2"; ?></a>
        
    </div>
    
        
        
  <div class="row"> 
  			<div class="column">
                
                    <img src="<?php echo "$image1"; ?>">

                    <?php echo "<a>$image2</a>"; ?>
               
  			</div>
  			<div class="column">
                
                    <?php echo "<a>$image3</a>"; ?>
                    <?php echo "<a>$image4</a>"; ?>



    			</div> 
     			 <div class="column">
                     
                    <?php echo "<a>$image5</a>"; ?>
                    <?php echo "<a>$image6</a>"; ?>



    			</div>  
      			<div class="column">
                    
                    <?php echo "<a>$image7</a>"; ?>
                    <?php echo "<a>$image8</a>"; ?>


                    <img src="img/Screen%20Shot%202022-07-07%20at%2010.45.56%20PM.png">

    			</div>  
		</div>  

    

    
        <?php include("footer.php"); ?>

    
    <script src="app.js"> </script>

</body>
    
</html>