  <!DOCTYPE html>
<html>
    
<?php  
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}


?>
    
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="home.css" rel="stylesheet" type="text/css">
        <link href="main.css" rel="stylesheet" type="text/css">

	</head>
    
    
	<body>
        
            <nav>
        <img class="logo" src="img/Pix-Prints-Logo.webp" alt="logo">

        <ul class="nav-links">
            <li>
                <a href="home.php">HOME</a>
            </li>
            
            <li>
                <a href="profile.php">PROFILE</a>
            </li> 
            
             <li>
                <a href="logout.php">LOGOUT</a>
            </li> 
            
        </ul>

        <div class="burger">
           <div class="line1"></div>
           <div class="line2"></div>
           <div class="line3"></div>
       </div>
 
   </nav>
        
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?php print $_SESSION['name']?>!</p>
		</div>

            
	</body>
</html>


