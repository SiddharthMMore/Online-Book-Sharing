<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: ../login/login.php');
}

include_once('..\cssmenu\index.html');
?>

<!DOCTYPE html>

<html>
<style>
html { 
  background: url(background.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

h2,h3,p{
	color: gold;
}
</style>
   <head>
    <title>Omegaread</title>
    
    <link rel ="stylesheet" type="text/css" href="..\css\homestyle.css">
    <link rel ="stylesheet" type="text/css" href="..\css\bootstrap.min.css">
    </head>
    <body background="background.jpg">
    <!-- <img src = "background.jpg" type = "background" width = 100% height = 100%/> -->
     <!-- <form action = "C:\Users\DHARMESH\Desktop\bibliophile\signin.html" method="GET">
            <input class="SignIn" value="SignIn/Sign up" type="submit" />  
     </form>
     <input class="Select1 " value="Sell" type="submit" />  
    <input class="Select2" value="Share/Buy" type="submit" /> 
    <input type ="textbox"placeholder="search book">
    <button>search</button> -->
    <script href="../js/bootstrap.min.js"></script>
    <!-- Header -->

    <section id="home">

        <div id="home-content">
            <div id="home-content-inner" class="text-center">
                <div id="home-heading">
                    <h1 id="home-heading-1">Omegaread</h1><br>
                    <h2 id="home-heading-2">Stairway to Books Heaven</h2>
                </div>
                <div id="home-text">
                    <p>Select your Stairway</p>
                </div>

                <div id="home-btn">
                    <a class="btn btn-primary btn-lg active" href="../showavailablebooks/showbooks.php"role="button" title="Sell" >Show available books</a>
                    <a class="btn btn-primary btn-lg active" role="button" title="Share" href="../updateshared/updateshared.php">Update Shared</a>
                    <a class="btn btn-primary btn-lg active" role="button" title="Buy" href="../shareinsertbook/insertbook.php">Share</a>
                </div>
            </div>
        </div>

    </section>
    
    </body>

   

</html>

<?php
include_once('..\footer\footer.html');
?>