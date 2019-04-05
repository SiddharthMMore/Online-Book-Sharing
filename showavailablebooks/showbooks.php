<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header('Location: ../login/login.php');
    }
    include_once('..\cssmenu\index.html');
    $con = mysqli_connect('localhost', 'root', '', 'omegaread');
    $userid = $_SESSION['user_id'];
    // mysqli_select_db('omegaread');
    $query = "select book_id,book_name, author, edition, genre, description, mobilenumber, email from books where user_id != '$userid'";
    $result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>

<head>
	 <link rel ="stylesheet" type="text/css" href="..\css\homestyle.css">
    <link rel ="stylesheet" type="text/css" href="..\css\bootstrap.min.css">
    <script href="../js/bootstrap.min.js"></script>
     <link rel ="stylesheet" type="text/css" href="temp.css">
    

 </head>

<body>

	<h1><span class="blue">&lt;</span>Available<span class="blue">&gt;</span> <span class="yellow">Books</pan></h1>
	<h2></h2>

    <table class="container">
    	<thead>
        <tr>
            <th>Book Name</th>
            <th>Author</th>
            <th>Edition</th>
            <th>Genre</th>
            <th>Description</th>
            <th>Mobile Number</th>
            <th>Email</th>
        </tr>
      </thead>
        <?php
        while ($rows = mysqli_fetch_assoc($result)) {
            ?>
      <tbody>
        <tr>
            <td> <?php echo $rows['book_name']; ?></td>
            <td> <?php echo $rows['author']; ?></td>
            <td> <?php echo $rows['edition']; ?></td>
            <td> <?php echo $rows['genre']; ?></td>
            <td> <?php echo $rows['description']; ?></td>
            <td> <?php echo $rows['mobilenumber']; ?></td>
            <td> <?php echo $rows['email']; ?></td>
            <?php 
            $bookid = $rows['book_id'];            
            ?>
            <html>
                <form action = "mail.php" method = "POST">
                    <td><?php
                    echo "<button type = 'submit' name = 'book_id' value =".$bookid. "> Contact</button>";
                    ?></td>
                </form>
            </html>

        </tr>


        <?php

    }
    ?>

</tbody>
    </table>


    <h2> For More details contact the Mobile number or Drop an Email on the Email Address </h2>
</body>

</html> 

<?php
include_once('..\footer\footer.html');
?>