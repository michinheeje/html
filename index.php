<html>
<head>
<title>사칙 연산 연습</title>
</head>
<body>
<h1>사칙 연산 연습</h1> 
<form action="<?=$_SERVER['PHP_SELF']?>" method=POST>
<input type="text" name="n1" value="<?php echo $_POST['n1']; ?>">
+
<input type="text" name="n2" value="<?php echo $_POST['n2']; ?>">
=
<input type="text" name="0" value="<?php echo $_POST['n1']+$_POST['n2']; ?>"><br>
<input type="text" name="n3" value="<?php echo $_POST['n3']; ?>">
- 
<input type="text" name="n4" value="<?php echo $_POST['n4']; ?>">
=
<input type="text" name="0" value="<?php echo $_POST['n3']-$_POST['n4']; ?>"><br>
<input type="text" name="n5" value="<?php echo $_POST['n5']; ?>">
× 
<input type="text" name="n6" value="<?php echo $_POST['n6']; ?>">
=
<input type="text" name="0" value="<?php echo $_POST['n5']*$_POST['n6']; ?>"><br>
<input type="text" name="n7" value="<?php echo $_POST['n7']; ?>">
÷
<input type="text" name="n8" value="<?php echo $_POST['n8']; ?>">
= 
<input type="text" name="0" value="<?php if($_POST['n8'] != 0){echo $_POST['n7']/$_POST['n8'];} ?>"><br>
<input type="submit" value="전송">
</form>
</body>
</html>
