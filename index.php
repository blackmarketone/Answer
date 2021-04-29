<?php
//include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>
<style type ="text/css">
body{
    font-familty: arial;

}
section{
    
    
}
.container{

    text-align:center;
    position:absolute;
    top:50%;
    left:50%;
    transform:translateX(-50%) translateY(-50%);
    
}
</style>

<body>
<section>
<div class="container">
<form action="index.php" method="POST">
<input type="text" name="UUID" placeholder="Find uuid">

<input type="submit"value="Search" value ="Find">

</form>
</div>
</section>
<?php
if(isset($_POST['UUID'])){

    header("Location: https://blackmarketone.github.io/Answer/".$_POST['UUID'].'.html');

}
?>
</body>
</html>
