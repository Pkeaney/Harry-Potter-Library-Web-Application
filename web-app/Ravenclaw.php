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
  height: 400px;

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

<div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Ravenclaw</h3>
    <p>Ravenclaw Library is one of the four main libraries in our Building.  It is the second biggest section of the library and is dedicated only to the finest selection of books this
    library has to offer, find all genres and different authors books in this book only floor.
    </p>

    <img alt="Logo" src="img/Ravenclaw.png"	class="w3-right" width="30%"	height="30%">
    <img alt="Logo" src="img/Ravenclaw-pic.png"	class="w3-left" width="60%"	height="60%">
  </div>