<?php
session_start();
include 'api/connection.php';
?>

<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="css/css.css">

<head>
<style>

.parallax {
    /* The image used */
    background-image: url("img/Hogwarts_pic.jpg");

    /* Set a specific height */
    height: 200px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

    border-bottom-style: ridge;
    border-colour: #000000;
    box-shadow:0 2px 5px 0;

}

</style>
</head>
<body>

<!-- Jumbotron (sit on top) -->
<div class="Jumbotron">
<img alt="Logo" src="img/Hogwarts-logo.png"	class="w3-left" width="8%"	height="8%">
<h1 class="title" style="text-align: center; font-weight:bold;">HOGWARTS</h1>
<h3 class="subTitle" style="text-align: center">LIBRARY</h3>
</div>
<div class="Navbar">	<!-- w3-bar-item w3-button w3-mobile w3-green -->
<a href="index.php" class="w3-bar-item w3-button w3-mobile w3-white">Home</a>
<a href="accountPage.php" class="w3-bar-item w3-button w3-mobile w3-text-white">My Account</a>
<a href="searchBooks.php" class="w3-bar-item w3-button w3-mobile w3-text-white">Search Books</a>
<div class="w3-dropdown-hover w3-mobile">
<button class="w3-button w3-text-white">Our Libraries <i class="fa fa-caret-down"></i></button>
<div class="w3-dropdown-content w3-bar-block w3-dark-grey">
<a href="Gryffindor.php" class="w3-bar-item w3-button w3-mobile">Gryffindor House</a>
      <a href="Hufflepuff.php" class="w3-bar-item w3-button w3-mobile">Hufflepuff House</a>
      <a href="Ravenclaw.php" class="w3-bar-item w3-button w3-mobile">Ravenclaw House</a>
       <a href="Slytherin.php" class="w3-bar-item w3-button w3-mobile">Slytherin House</a>
</div>
</div>
</div>

<div class="parallax"></div>

<div class="w3-container w3-padding-32 w3-mobile" id="Search">
    <h2 class="w3-border-bottom w3-border-light-grey w3-padding-16">Search</h2>

     </div>


<div class="wrapper">
  <div class="container">
  <form action="search.php" method="POST">
    <input type="text" name="search" class="input" placeholder="Name? Author? Genre?">
    <input type="submit" name="submit-search" value="search" class="close-btn">
  </form>
  </div>
</div>
<br>
<br>
<h1>All Books:</h1>

<div class='book-container'>
	<?php
$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);
$queryResults = mysqli_num_rows($result);

if ($queryResults > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='book-box'>
                        <h4>" . $row['title'] . "</h4>
                        <p>" . $row['isbnNumber'] . "</p>
                        <p>" . $row['genre'] . "</p>
                        <p>" . $row['author'] . "</p>
                        <p>" . $row['status'] . "</p>
                        </div>";
    }
}

?>


</div>
    </body>
</html>
