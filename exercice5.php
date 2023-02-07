<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Correction php tableau</title>
</head>
<body>


    <!-- boucle While -->
<table>
    <thead>
        <tr>
            <th>Itération</th>
            <th>Nombre aléatoire</th>
            <th>Nombre cible</th>
            <th>Résultat</th>
        </tr>
    </thead>
<tbody>
    <?php
        // définition des variables '$x' avec la valeur 789 et une autre variable '$count' avec la valeur 0.
        $x= 789;
        $count = 0;
        // Boucle while qui continue de s'éxécuter tant que la condition n'est pas remplie
        while(true) {
            $rand = rand(0, 1000);
            $count++;
            if ($rand == $x){
                break;
            }
        }
    ?>
    <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $rand; ?></td>
        <td><?php echo $x; ?></td>
        <td><?php echo ($rand == $x) ? "Match" : " "; ?></td>
    </tr>
</tbody>
</table>


    <!-- boucle FOR -->
<table>
<thead>
    <tr>
        <th>Itération</th>
        <th>Nombre aléatoire</th>
        <th>Nombre cible</th>
        <th>Résultat</th>
    </tr>
</thead>
<tbody>
    <?php
        $x = 789;
        $count = 0;

        for($count = 0;; $count++) {
            $rand= rand(0, 1000);
            if ($rand == $x) {
                break;
            }
        }
    ?>
    <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $rand; ?></td>
        <td><?php echo $x; ?></td>
        <td><?php echo ($rand == $x) ? "Match" : " "; ?></td>
    </tr>
</tbody>
</table>
</body>
</html>