<?php
$title = "process";
include "header.php";
?>
<div class="container row">
    <?php include "Left_page.php" ?>
    <div class="col-8">
        <h3>
            <?php
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            echo "Hello " . $firstname . " " . $lastname . ", You are welcome to my site";
            ?>
        </h3>
    </div>
</div>


<?php include "footer.php"; ?>