<?php session_start(); ?>
<html>

<body>

    <form action="..\Controller\dogController.php?action=create" method="POST">

        <label>Nom</label>
        <input type="text" name="name" /><br />

        <?php if (array_key_exists('errors', $_SESSION) && array_key_exists('name', $_SESSION['errors'])) {
	?>
        <p style="color:red"><?php echo  $_SESSION['errors']['name']?>
        </p>

        <?php
}
	  ?>



        <label>Age</label>
        <?php if (array_key_exists('errors', $_SESSION) && array_key_exists('age', $_SESSION['errors'])) {
	  	?>
        <p style="color:red"> <?php echo  $_SESSION['errors']['age']?>
        </p>



        <?php
	  }
	  ?>

        <input type="number" name="age" /><br />
        <input type="submit" value="enregistrer">

    </form>

</body>

</html>