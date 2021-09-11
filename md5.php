<!DOCTYPE html>
<html>
<body>

<?php
    $str = "rakib_39^158";
    $checkmd5 = md5($str);
	if($checkmd5 == '794cc4da08ba3fd980a93b80657f9284')
    {
    	$name = "md rakibul hasan.";
        $userName = ucwords($name);
    	echo "<br> Hello! " .$userName. "<br> You are logIn.";
    } else {
    	echo "<br>Password is incorrect!";
    }
?>
</body>
</html>