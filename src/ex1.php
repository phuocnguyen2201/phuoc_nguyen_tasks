<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1: Getting Started with PHP - Phuoc</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        </style>
</head>
<body>

    <?php 
        $my_name = "Phuoc"; 
        echo "<h3>Hello world! My name is \"$my_name\"<h3>"; 

        $title = "PHP is interesting.";
        echo "<h4>".$title."</h4>";

        $g1 = 5;
        $g2 = 4;
        $g3 = 5;

        ?>
          <table>
            <tr>
                <th>S.n.</th>
                <th>Name</th>
                <th>Grade</th>
            </tr>
            <tr>
                <th>1</th>
                <th>John</th>
                <th><?php echo $g1; ?></th>
            </tr>
            <tr>
                <th>2</th>
                <th>Alice</th>
                <th><?php echo $g2; ?></th>
            </tr>
            <tr>
                <th>3</th>
                <th>Bob</th>
                <th><?php echo $g3; ?></th>
            </tr>
            </table>
        <?php echo "<img alt=\"Env development confirm\" src=\"./image/env_phuoc_nguyen.PNG\">";?>
</body>
</html>