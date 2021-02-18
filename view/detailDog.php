<?php

require_once '../autoload.php';

session_start();

$dog = $_SESSION['dog'];


?>
<html>

<body>
    <p>nom:<?php echo $dog->getNom()?></p>
    <p>age:<?php echo $dog->getAge()?></p>
</body>

</html>
<?php unset($_SESSION['dog'])?>