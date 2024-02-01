<?php
$title = "Ex3.php";
include 'header.php';
?>
<div class="main-page container row">
    <?php include "Left_page.php"; ?>
    <div class="right-side col-8">
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
        <h1>
            4. HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a
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
        <br>
        <div>
            <h1>
                5. String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";).
                Join
                them together and print the length of the string.
            </h1>
            <?php

            ?>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>