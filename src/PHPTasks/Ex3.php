<?php
$title = "Ex3.php";
include 'header.php';
?>
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
    <div class="right-side col-8">
        <div id="Q2">
            <h1>
                2. Form Creation: Create a simple HTML form to collect the user’s
                Firstname and Lastname. Use the echo statement
                to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an <h3>
            </h1>
            <form method="post" action="process.php">
                First Name: <input type="text" name="firstname"><br><br>
                Last Name: <input type="text" name="lastname"><br><br>
                <input type="submit" value="Submit"> <br><br>
            </form>
        </div>
        <br>
        <div id="Q4">
            <h1>
                4. HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done
                a
                table in Exercise 1. If you wish, you can use the same table.
            </h1>
            <div>
                <?php
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
                        <td>1</td>
                        <td>John</td>
                        <td>
                            <?php
                            echo $g1
                                ?>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alice</td>
                        <td>
                            <?php
                            echo $g2
                                ?>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Bob</td>
                        <td>
                            <?php
                            echo $g3
                                ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <div id="Q5">
            <h1>
                5. String Variables: Write a PHP script with two string variables ($str1 = " Hello"; $str2="World" ;).
                Join them together and print the length of the string.
            </h1>
            <br>
            <?php
            $str1 = "Hello";
            $str2 = "World";
            $concatStr = $str1 . $str2;
            $strLength = strlen($concatStr);
            echo "$concatStr <br>";
            echo "The length of the string is: " . $strLength;
            ?>
        </div>
        <br>
        <div id="Q6">
            <h1>
                6. Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these
                numbers and an echo statement to output your answer.
            </h1>
            <br>
            <?php
            $num1 = 298;
            $num2 = 234.0;
            $num3 = 46.0;
            echo intval($num1) . "<br>";
            echo floatval($num2) . "<br>";
            echo doubleval($num3) . "<br>";
            echo is_integer($num1) . "<br>";
            echo is_float($num2) . "<br>";
            echo is_double($num3) . "<br>";
            ?>
        </div>
        <br>
        <div id="Q7">
            <h1>
                7. Browser Detection: Write a PHP script to detect the browser being used to view your pages.
                Hint: Use predefined variables: $_SERVER.
            </h1>
            <br>
            <?php
            $browserDetection = $_SERVER['HTTP_USER_AGENT'];
            echo "The browser is using to view the page is: " . $browserDetection;
            ?>
        </div>
        <br>
        <div id="Q8">
            <h1>8. File Modification Time: Write a PHP script in the footer section of your universal footer to display
                the
                last modification time of a file. Hint: Use predefined variable $_SERVER, basename function to get the
                filename, filetime function to get the last modified time & date function to print the date and time
            </h1>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>