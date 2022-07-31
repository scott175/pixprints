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

    <?php include("nav-bar.php"); ?>
    
    <div class="gallery-header">
    <a style="color: white; margin: 570px; font-size: 100px; font-family: 'Montserrat', sans-serif;"> Gallery</a>
    </div>
    
    <a href="shop-page.php">
    
  <div class="row"> 
  			<div class="column">
                <div class="container1">
    				<img class="box" src="img/PIX_9965-Edit-2.jpg">  
                </div>
                <div class="container2">
    				<img class="box1" src="img/DSC_5611.jpg">
                </div>    
                <div class="container3">
                    <img class="box2" src="img/P1030285.jpg">
                </div>
                <div class="container4">
                    <img class="box3" src="img/DJI_0484.jpg">
                </div>
      
                
  			</div>
  			<div class="column">
                 <div class="container5">
       				 <img class="box4" src="img/PIX_6584.jpg">
                </div>
                
                <div class="container6">
                    <img class="box5" src="img/DSC_5707.jpg">
                </div>
    
                <div class="container7">
                    <img class="box6" src="img/DSC_5707.jpg">
                </div>    

    			</div> 
      
      
            <div class="column">
                     
                <div class="container8">
        			<img class="box7" src="img/DSC_5658.jpg">
                </div>    
                     
                <div class="container9">
                    <img class="box8" src="img/DJI_0566.jpg">
                </div>    
                
                <div class="container10">   
                    <img class="box9" src="img/DSC_5655.jpg">    
    			</div>  
                
            </div>    
      
      		<div class="column">
                <div class="container11">   
       				 <img class="box10" src="img/DJI_0412.jpg">
                </div>    
                
                <div class="container12">   
                    <img class="box11" src="img/IMG_6561.jpg">
                </div>    
    			 
                </div>  
		</div>  
    </a>
    
    <?php include("footer.php"); ?>

    
    <script src="app.js"> </script>

</body>
</html>