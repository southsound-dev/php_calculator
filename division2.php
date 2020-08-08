<html>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<body>
<!--Your code goes here-->
<div id="form_container">
<div id="result">
<!-- <?php print_r($_GET)?> -->
<?="${_GET['add_first']} divided by ${_GET['add_second']} is :"?>
<h2><?=$_GET['add_first'] / $_GET['add_second']?></h2>
</div>
</div>
<br>
<a href="index.php">Reset</a>
</body>
</html>