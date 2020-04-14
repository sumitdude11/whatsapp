<html>
<head>
<title>whatsapp</title>
</head>
<script type="text/javascript">

</script>
<body>

<form method="GET">
Type mobile number: <input type="text" name="s1">
Type message: <input type="text" name="s2">

<button type="submit" onclick="b()">submit</button>
</form>
<?php
  error_reporting(0); 
$a = $_GET['s1'];
$d= $_GET['s2'];
$b="https://wa.me/";
$z=$b.$a;
$e="?text=";
$c=$z.$e;
$ee=$c.$d;
$p=$ee;
?>
*After submitting form click on this link.
<a href='<?php echo $p ?>' target='_blank' id="r">link</a> 

</body>
</html>
