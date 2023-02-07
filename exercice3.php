<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="" method="post">
        <label for ="age">Age:</label>
        <input type ="text" id ="age" name ="age">
        <br><br>
        <input type = "submit" name="submit" value = "Soumettre">
</form>
    <?php

    if(isset($_POST['submit'])) {
        $age = $_POST['age'];
        $sexe='femme';
   

        if ($sexe == 'femme' && $age >= 21 && $age <=  40) {
            echo "<p>Bienvenue, jeune battante!!</p>";
        }
    }

    ?>



</body>
</html>