<?php 
$title ='Exercise 7: Control flow and loops';
$excercise = "This is excercise 7";
$description = "Exercise 7: Control flow and loops";
include "../individual_tasks/extension/header.php";
include "../individual_tasks/extension/db.php";
include "process.php";?>
<div class="content-white">
    <div class="row">
        <div class="col-lg-12">
        <h2>Input Your Information Below:</h2>
            <form name="form1" method="post" action="">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="fname">First Name:</label>
                            <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
                        </div>
                        <div class="col">
                            <label for="lname">Last Name:</label>
                            <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required>
                        </div>
                        <div class="col">
                            <label for="groupid">Group ID:</label>
                            <select class="form-control" id="groupid" name="groupid">
                                <option value="BBCAP19">BBCAP19</option>
                                <option value="BBCAP20">BBCAP20</option>
                                <option value="BBCAP21">BBCAP21</option>
                                <option value="BBCAP22">BBCAP22</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
            <?php

                // SQL query to retrieve data from the 'studentsinfo' table
                $sql = "SELECT * FROM studentsinfo";

                // Execute the SQL query and store the result
                $result = exec_select($sql);

                // Check if there are any results
                if ($result->num_rows > 0) {
                    echo "<table class='table py-5'>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>City</th>
                                    <th>Group ID</th>
                                </tr>
                            </thead>
                            <tbody>";

                    // Loop through the result set and display data in rows
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td><a href='updatesingle.php?id={$row['id']}'>{$row['id']}</a></td>
                                <td>{$row['first_name']}</td>
                                <td>{$row['last_name']}</td>
                                <td>{$row['city']}</td>
                                <td>{$row['groupId']}</td>
                            </tr>";
                    }

                    echo "</tbody></table>";
                } else {
                    // Display a message if no results are found
                    echo "No results";
                }
                ?>
        </div>
    </div>
</div>
<?php include "../individual_tasks/extension/footer.php";?>