<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $a = "4.5";
        $b = 5.61;
        $c = $a + $b;
        $d = $a . $b;
    ?>
        <!-- Les résultats ont été obtenus par l'opérateur d'addition 
            pour la variable 'c' et multiplication pour la variable 'd'
        
         Les chaines de caractères sont converties automatiquement en nombres
         lorsqu'ils sont utilisés dans des opérations arithmétiques
        -->
        <table>
            <tr>
                <td>Variable</td>
                <td>Valeur</td>
            </tr>
            <tr>
                <td>a</td>
                <td><?php echo $a; ?></td>
            </tr>
            <tr>
                <td>b</td>
                <td><?php echo $b; ?></td>
            </tr>
            <tr>
                <td>c</td>
                <td><?php echo $c; ?></td>
            </tr>
            <tr>
                <td>d</td>
                <td><?php echo $d; ?></td>
            </tr>
        
</body>
</html>


<!-- Exercice 2  -->

<!-- Après l'éxécution du script , la valeur Booléenne des variables sera la suivante : 

    - $a = false 
    - $b  = true 
    - $c = false 
    -$d = true
    -$e = false
    -$f = true 
-->