<?php
$title = "process";
include "header.php";
?>
<div class="container text-center">
    <h3>
        <?php
        $name = $_POST["name"];
        $age = $_POST["age"];
        if ($age >= 18) {
            echo "Mr/Ms " . $name . ", You are eligible for voting!";
        } else {
            echo "Mr/Ms " . $name . ", You are not eligible for voting!";
        }

        ?>
    </h3>
</div>
</div>


<?php include "footer.php"; ?>