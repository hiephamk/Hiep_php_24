<?php $title = "Ex4.php"; ?>
<?php include 'header.php'; ?>
<div class="main-page container row">
    <div class="left-side col-4">
        <h1>List of tasks:</h1>
        <ol>
            <li><a href="#Q1">Question_1</a></li>
            <li><a href="#Q2">Question_2</a></li>
            <li><a href="#Q3">Question_3</a></li>
            <li><a href="#Q4">Question_4</a></li>
            <li><a href="#Q5">Question_5</a></li>
            <li><a href="#Q6">Question_6</a></li>
            <li><a href="#Q7">Question_7</a></li>
            <li><a href="#Q8">Question_8</a></li>
        </ol>
    </div>
    <div class="col-8">
        <div id="Q2">
            <h1>2. If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide
                if
                he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user
                input).
            </h1>
            <br>
            <form action="process1.php" method="post">
                <div class="form-type-1">
                    <label class="form-label" for="">Name:</label>
                    <input class="form-input" type="text" name="name">
                </div>
                <div class="form-type-1">
                    <label class="form-label" for="">Age:</label>
                    <input class="form-input" type="text" name="age">
                </div>
                <div class="form-type-1">
                    <button class="form-button" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div id="Q3">
            <h1>
                3. Switch Case: Write a PHP script that gets the current month and prints one of the following
                responses,
                depending on whether it's August or not:
                <br>
                It's August, so it's still holiday. <br>
                Not August, this is Month-name so I don't have any holidays <br>
                Hint: You can use date(F) function to get the current month name. Check Date function from the php
                manual page.
            </h1>
            <br>
            <div class="php-styles">
                <?php
                $currentMonth = date("F");
                echo "The current month is " . $currentMonth . '<br>';
                switch ($currentMonth) {
                    case 'January':
                        echo "This is " . $currentMonth . " so I don't have any holidays.<br>";
                        break;

                    case 'February':
                        echo "This is " . $currentMonth . " so I don't have any holidays.";
                        break;
                    case 'March':
                        echo "This is " . $currentMonth . " so I don't have any holidays.";
                        break;
                    case 'April':
                        echo "This is " . $currentMonth . " so I don't have any holidays.";
                        break;
                    case 'May':
                        echo "This is " . $currentMonth . " so I don't have any holidays.";
                        break;
                    case 'June':
                        echo "This is " . $currentMonth . " so I don't have any holidays.";
                        break;
                    case 'July':
                        echo "This is " . $currentMonth . " so I don't have any holidays.";
                        break;
                    case 'August':
                        echo "It's still holiday";
                        break;
                    case 'September':
                        echo "This is " . $currentMonth . " so I don't have any holidays.";
                        break;
                    case 'October':
                        echo "This is " . $currentMonth . " so I don't have any holidays.";
                        break;
                    case 'November':
                        echo "This is " . $currentMonth . " so I don't have any holidays.";
                        break;
                    case 'December':
                        echo "This is " . $currentMonth . " so I don't have any holidays.";
                        break;
                }
                ?>
            </div class="php-styles">
        </div>
        <div id="Q4">
            <h1>
                4. For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get
                user input).
            </h1>
            <br>
            <form method="post" action="Ex4.php">
                <div class="form-type-1">
                    <label class="form-label" for="">Enter a number</label>
                    <input class="form-input" type="text" name="number">
                </div>
                <button class="form-button" type="submit">Submit</button>
            </form>

            <div class="php-styles">
                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $number = isset($_POST['number']) ? intval($_POST['number']) : 0;

                    // Print multiplication table
                    if ($number > 0) {
                        echo "<h3>Multiplication Table for $number:</h3>";
                        echo "<table border='1'>";
                        for ($i = 1; $i <= 10; $i++) {
                            echo "
                                <tr>
                                    <td>$number x $i</td>
                                    <td>=</td>
                                    <td>" . ($number * $i) . "</td>
                                </tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "<p>Please enter a valid positive number.</p>";
                    }
                }
                ?>
            </div class="php-styles">
        </div>
        <div id="Q5">
            <h1>
                5. While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user
                input)
            </h1>
            <form method="post" action="Ex4.php">
                <div class="form-type-1">
                    <label class="form-label" for="">Enter a number</label>
                    <input class="form-input" type="text" name="number_2">
                </div>
                <button class="form-button" type="submit">Submit</button>
            </form>
            <div class="php-styles">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $number_2 = isset($_POST['number_2']) ? intval($_POST['number_2']) : 0;
                    $i = 1;
                    while ($i <= $number_2) {
                        echo $i . "<br>";
                        $i++;
                    }
                }
                ?>
            </div>

        </div>
        <div id="Q6">
            <h1>
                6. Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML",
                "CSS", "PHP", "JavaScript").
            </h1>
            <div class="php-styles">
                <?php
                $myArray = array("HTML", "CSS", "PHP", "JavaScript");
                foreach ($myArray as $item) {
                    echo $item . "<br>";
                }
                ?>
            </div>
        </div>
        <br> <br>
    </div>
</div>
<?php include "footer.php" ?>