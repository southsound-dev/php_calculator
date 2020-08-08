<html>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<body>
<!--Your code goes here-->
<h1>PHP Calculator</h1>
<div id="form_container">

<div id="form1">
<h3>Addition</h3>
<form method="get" action="addition.php">
First Number: <input type="number" name="add_first"><br>
Second Number: <input type="number" name="add_second"><br>
<button type="submit">Add</button>
</form>
</div>
<div id="form2">
<h3>Division</h3>
<form method="get" action="division.php">
First Number: <input type="number" name="div_first"><br>
Second Number: <input type="number" name="div_second"><br>
<button type="submit">Add</button>
</form>
</div>
</div>
<div id="form3">
<h3>Calculator</h3>
<form method="get" action="addition.php">
First Number: <input type="number" name="add_first"><br>
Second Number: <input type="number" name="add_second"><br>
<button type="submit">+</button>
<button type="submit" formaction="division2.php">:</button>
</form>
</div>



<a href="index.php">Reset</a>
</body>
</html>