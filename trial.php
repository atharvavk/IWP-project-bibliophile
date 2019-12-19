<html>
<head></head>
<body>
<form method="post">
   <input type="submit" name="<?php echo $pTest=12 ?>" value="submit" id="submit"/>
</form>

<? php

    if (isset($_POST[$pTest])) {

        echo 'hi';

    }

?>
</body>
</html>