<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1: Getting Started with PHP - Phuoc</title>
</head>
<body>

    <?php 
        $my_name = "Phuoc"; 
        echo "Hello world! My name is ".$my_name; 

        $title = "PHP is interesting.";
        echo "<h4>".$title."</h4>";

        $g1 = 5;
        $g2 = 4;
        $g3 = 5;

        echo "<table style='border: 1px solid black;'><tr><th>S.n.</th><th>Name</th><th>Grade</th></tr>";
        echo "<tr><th>1</th><th>John</th><th>".$g1."</th></tr>";
        echo "<tr><th>2</th><th>Alice</th><th>".$g2."</th></tr>";
        echo "<tr><th>3</th><th>Bob</th><th>".$g3."</th></tr></table>";

        echo "<img alt=\"Env development confirm\" src=\"./image/env_phuoc_nguyen.PNG\">";
        ?>
</body>
</html>