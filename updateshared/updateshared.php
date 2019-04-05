<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ../login/login.php');
}


$con = mysqli_connect('localhost', 'root', '', 'omegaread');
$userid = $_SESSION['user_id'];
// mysqli_select_db('omegaread');
$query = "select book_id,book_name, author, edition, genre, description from books where user_id = '$userid'";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="..\css\homestyle.css">
    <link rel="stylesheet" type="text/css" href="..\css\bootstrap.min.css">
    <script href="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/temp.css">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../cssmenu/styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
    <script src="../cssmenu/script.js"></script>
    <title>Update Shared</title>

</head>

<body>
    <!-- header -->
    <div id='cssmenu'>
        <ul>
            <li class='active'><a href='../homepage/homepage.php'><span>Home</span></a></li>
            <li><a href='#'><span>My Account</span></a></li>
            <li><a href='../cssmenu/Aboutpagesreeja/aboutpage.html'><span>About Us</span></a></li>
            <li class='last'><a href='../login/logout.php'><span>Logout</span></a></li>
        </ul>
    </div>
    <!-- header end -->


    <h1><span class="blue">&lt;</span>Update<span class="blue">&gt;</span> <span class="yellow">Books</span></h1>
    <h2></h2>

    <table class="container">
        <thead>
            <tr>
                <th>Book Name</th>
                <th>Author</th>
                <th>Edition</th>
                <th>Genre</th>
                <th>Description</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <?php
        if(!mysqli_num_rows($result)){
            echo "<h2> You haven't shared any book</h2>";
        }
        while ($rows = mysqli_fetch_assoc($result)) {
            ?>
        <tbody>
            <tr>
                <td> <?php echo $rows['book_name']; ?></td>
                <td> <?php echo $rows['author']; ?></td>
                <td> <?php echo $rows['edition']; ?></td>
                <td> <?php echo $rows['genre']; ?></td>
                <td> <?php echo $rows['description']; ?></td>
                <?php 
                $bookid = $rows['book_id'];
                ?>
                <html>
                <form action="updateordelete.php" method="POST">
                    <td><?php
                        echo '<button  type = "submit" name = "update" value ="' . $bookid . '">&#x270D</button>';
                        ?></td>
                    <td><?php
                        echo '<button  type = "submit" name = "delete" value ="' . $bookid . '">&#x274C</button>';
                        ?></td>
                </form>

                </html>

            </tr>


            <?php

        }
        ?>

        </tbody>
    </table>

</body>

</html>

<?php
include_once('..\footer\footer.html');
?> 