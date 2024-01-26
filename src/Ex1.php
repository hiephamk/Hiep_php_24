<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1: Getting Started with PHP - Hiep</title>
</head>
<body>
    <h3> 3.1 Write PHP code to output the following message: Hello world! My name is "Hiep"
    </h3>
    <?php
    echo "Hello world! My name is \"Hiep\"";
    ?>
    <h3>
    Create a PHP variable named $title and assign it the value "PHP is interesting." Then, use this variable as the content within an (heading 4) element.
    </h3>
    <?php
        $title = "PHP is interesting.";
        echo "<h4>$title</h4>";
    ?>
    <h3>
    Define three variables: $g1 = 5, $g2 = 4, and $g3 = 5. 
    These variables represent the grades of three students in the course. 
    To display this information, create an HTML table within your PHP code. 
    The table should be structured with columns 
    for Serial Number (S.n.), Name, and Grade, and it should look like this:
    </h3>
    <?php
        $g1 = 5;
        $g2 = 4;
        $g3 = 5;

    ?>

</body>
</html>