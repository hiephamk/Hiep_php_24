<?php
$title = "process";
include "header.php";
?>
<div class="container text-center">
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