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
    
    <style>
    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
    </style>
    
</head>
    
    <body bgcolor="white">

    
     <?php include "setup.php";
        
    $sql = "SELECT * FROM pages ";
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
    

<?php include("nav-bar.php"); ?>
    
   <table id="customers">
       
  <tr>
    <th><?php print $title1; ?>
      <a href='edit_page.php?id=<?php print $pageID; ?>'>Edit</a></th>
    <th><?php print $para1; ?></th>
    <th><?php print $page1; ?></th>
  </tr>
  <tr>
    <td><?php print $title1; ?></td>
    <td><?php print $para1; ?></td>
    <td><?php print $page1; ?></td>
  </tr>


</table>


    
<?php include("footer.php"); ?>


</body>
</html>