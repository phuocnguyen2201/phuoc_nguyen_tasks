
<?php 
$title ='Exercise 4: Control flow and loops';
$excercise = "This is excercise 4";
$description = "Exercise 4: Control flow and loops";
include "./extension/header.php";?>
<div class="content-white">
    <div class="container-lg py-5">
        <div class="row">
            <div class=col-lg-12>
                <h1 class="pt-4">If - else</h1>

                <form class="py-3" name="form-if-else" method="POST">
                    <div class="form-group row pb-3 ">
                        <label for="inputFirstName" class="col-sm-2 col-form-label">First Name:</label>
                        <div class="col-sm-10">
                        <input type="text" name='name' class="form-control" id="inputFirstName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAge" class="col-sm-2 col-form-label">Age:</label>
                        <div class="col-sm-10">
                        <input type="number" name='age' class="form-control" id="inputAge">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row" style="text-align: left;">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10"><input class="btn-bottom" type="submit" name="form-if-else" value="Submit"></div>
                    </div>
                </form>
                <?php 
                    
                    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form-if-else'])){

                        $age = $_POST['age'];

                        if($age >= 18)
                            echo "<p>You are eligible for voting.</p>";
                        else
                            echo "<p>You are not eligible for voting.</p>";
                    }

                ?>

                <h1 class="pt-4">Switch Case</h1>

                <form class="py-3" name="form-switchcase" method="POST">
                    <div class="form-group row pb-3 ">
                        <label for="inputDate" class="col-sm-2 col-form-label">Date:</label>
                        <div class="col-sm-10">
                        <input type="date" name='date' class="form-control" id="inputDate">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row" style="text-align: left;">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10"><input class="btn-bottom" type="submit" name="form-switchcase" value="Submit"></div>
                    </div>
                </form>
                <?php 
                
                if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form-switchcase'])){

                    $date = $_POST['date'];
                    $month = date("m", strtotime($date));
                    $dateObj = DateTime::createFromFormat('!m', $month);
                    $monthName = $dateObj->format('F');

                    echo "<p>This month is <strong>".$monthName."</strong></p>";
                    switch($monthName){
                        case "August":
                            echo "<p>It's August, so it's still holiday.</p>";
                            break;
                        default:
                            echo "<p>Not August, this is Month-name so I don't have any holidays.</p>";
                            break;
                    }
                }

                ?>
                <h1 class="pt-4">For Loop and While loop</h1>

                <form class="py-3" name="form-for-while" method="POST">
                    <div class="form-group row pb-3 ">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Number:</label>
                        <div class="col-sm-10">
                        <input type="number" name='number' class="form-control" id="inputNumber" min="1" max="10">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row" style="text-align: left;">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10"><input class="btn-bottom" type="submit" name="form-for-while" value="Submit"></div>
                    </div>
                </form>
                <?php 

                if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form-for-while'])){

                    $number = $_POST['number'];
                  
                    for($i = 1; $i <= 10; $i++){
                        echo "<p>".$i." X ".$number." = ".$i*$number."</p>";
                    }
                    echo "<h1>While loop</h1>";
                    $starter = 1;
                    while($number > 0){
                        echo "<p>".$starter."</p>";
                        $number--;
                        $starter++;
                    }
                }
                ?>
                <h1 class="pt-4">Foreach</h1>

                <form class="py-3" name="form-foreach" method="POST">
                    <div class="form-group row pb-3 ">
                        <label for="inputFirstElement" class="col-sm-2 col-form-label">First Element:</label>
                        <div class="col-sm-10">
                        <input type="text" name='first' class="form-control" id="inputFirstElement">
                        </div>
                    </div>
                    <div class="form-group row pb-3">
                        <label for="inputSecondElement" class="col-sm-2 col-form-label">Second Element:</label>
                        <div class="col-sm-10">
                        <input type="text" name='second' class="form-control" id="inputSecondElement">
                        </div>
                    </div>
                    <div class="form-group row pb-3 ">
                        <label for="inputThirdElement" class="col-sm-2 col-form-label">Third Element:</label>
                        <div class="col-sm-10">
                        <input type="text" name='third' class="form-control" id="inputThirdElement">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row" style="text-align: left;">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10"><input class="btn-bottom" type="submit" name="form-foreach" value="Submit"></div>
                    </div>
                </form>
                <?php 

                if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form-foreach'])){

                    $first = $_POST['first'];
                    $second = $_POST['second'];
                    $third = $_POST['third'];
                    
                    $array = array($first, $second, $third);
                    echo "<ul>";
                    foreach($array as $item){
                        echo "<li><strong>".$item."</strong></li>";
                    }
                    echo "<ul>";
                }
                ?>
        </div></div>
    </div>
</div>
<?php include "./extension/footer.php";?>