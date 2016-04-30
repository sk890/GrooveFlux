<?php
    require_once("html/header_unsecure.html");
    require_once("html/navbar_unsecure.html");  
?>
        <div  style="margin-top:10%">
            <?php
            $email= $_POST["email"];
            $comment= $_POST["comment"];
            $servername = "localhost";
            $username = "admin";
            $password = "root";
            $dbname = "GrooveFlux";


            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "INSERT INTO contact (Email,Comment)
            VALUES ('{$email}','{$comment}')";

            if ($conn->query($sql) === TRUE) {
                echo "<h1 align=\"center\">Thank You For Your Comment</h1>";
            } else {
                echo "<h1 align=\"center\">Error: " . $sql . "<br>" . $conn->error."</h1>";
            }

            $conn->close();
            ?>
        </div>
    </body>
</html>