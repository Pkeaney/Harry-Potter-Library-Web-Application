<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- A meta tag that redirects after 5 seconds to one of my PHP tutorials-->
<meta http-equiv="refresh" content="2;url=index.php">
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

<div class="parallax"></div>
<h1>Welcome to Hogwarts University Website</h1>
<h3>You will now be redirected to the Home Page</h3>

</body>
</html>