<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta charset="UTF-8">
    <title>i244 ras</title>



</head>
<body>

    <script type="text/javscript" src="js.js";></script>
    <h2 style="color:whitesmoke;size:30px">teetassi ametlik kodulekehülg</h2>
    <div>

        <h1>
                           <?php
                            echo phpversion();
                           ?>
        </h1>
        PRAKS ÜKS
        <p><a href="http://enos.itcollege.ee/~mamangus/i244/">I244 link</a></p>
    </div>

  <?php
    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";

    $conn = new mysqli($host, $user, $pass, $db);

    if($conn->connect_error){
        die("Connection fail:" . $conn->connect_error);
    }

    $sql = "Select * FROM vikat";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        echo implode(" ",$result->fetch_assoc());
        
    }


    ?>


    <img alt="See on pilt." src="http://enos.itcollege.ee/~rtammets/pildid/cup.jpg" height="420" width="420">


    <p>Kliki loendur</p>
    <button onclick="funnn()">Wat</button>


</body>
</html>