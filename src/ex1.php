
<?php 
$title ='Exercise 1: Getting Started with PHP';
$excercise = "This is excercise 1";
$description = "Exercise 1: Getting Started with PHP";
include "./extension/header.php";?>
<div class="container-lg content-white py-5"> 
    <div class="row">
        <div class="col-lg-12"><?php 
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
        <?php echo "<img alt=\"Env development confirm\" src=\"./image/env_phuoc_nguyen.PNG\">";?></div>
    
    </div></div>
   

        <?php include "./extension/footer.php";?>