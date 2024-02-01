<footer class="card-footer d-flex justify-content-between bg-warning" id="footer">
    <div>
        <img class="img-fluid float-end" src="img/HAMK_Logo_text_small_FIN_NEGA-300x67.png" alt="" />
    </div>
    <div class="text-left text-primary">
        <?php
        //get file_name of current page
        $filename = basename($_SERVER['PHP_SELF']);
        // get last modified time
        $lastModifiedTime = filemtime($filename);

        $formattedLastModified = date("F j, Y, g:i a", $lastModifiedTime);
        ?>
        <ul style="color: rgb(21, 5, 241)">
            <li><span>Designed by Hiep Huynh</span></li>

            <!-- Show the result at footer -->
            <li>
                <span>
                    <?php
                    echo "File_Name: $filename <br>";
                    ?>
                </span>
            </li>
            <li>
                <span>
                    <?php
                    echo "Last Modified: $formattedLastModified";
                    ?>
                </span>
            </li>
        </ul>
    </div>
    <div>
        <ul>
            <li>
                <a href=" mailto:hiep23000@student.hamk.fi"><span>Email: hiep23000@student.hamk.fi</span></a>
            </li>
            <li>
                <a href="tel:38748374"><span>Mobile Phone: +358.40.1234567</span></a>
            </li>
        </ul>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>