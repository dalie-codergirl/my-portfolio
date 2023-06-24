<!DOCTYPE html>
<?php include 'connection.php';?>
<head>
    <link rel="stylesheet" href="style.css">
<title>CONTACTS </title>
</head>
<header>
    <nav >
        <ul>
        <li><a href="index.php"><d>HOME</d></a></li>
        <li><a href="about.php"><d>ABOUT ME</d></a></li>
        <li><a href="projects.php"><d>PROJECT</d></a></li>
      </ul>
    </nav>

    <h2>DALITSO MBICHOLO</h2>
</header>
<body>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];


    $sql = "SELECT* FROM contacts WHERE number = '$number' AND email = '$email' ";
    $answer =  $connection ->query($sql);
    if ($answer->num_rows >0){
        echo "the user already exist in database";
    }else{
    $sql = "INSERT INTO contacts (Name, Number, email) VALUES ('$name', '$number', '$email')";

    if ($connection->query($sql) === TRUE) {
        echo "<p class='message success'>Data saved successfully!</p>";
    } else {
        echo "<p class='message error'>Error: " . $sql . "<br>" . $connection->error . "</p>";
    }
    }
    $connection->close();
}

?>

<br>
<h3> For further discussions </h3>
<div class="container">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="fname">Name</label><br>
            <input type="text" id="fname" name="name" placeholder="Your name.." required><br>

            <label for="number">Phone Number</label><br>
            <input type="text" id="number" name="number" placeholder="Your number..." required><br>

            <label for="email">Email Address</label><br>
            <input type="text" id="email" name="email" placeholder="Your email address..." required><br>

            <input type="submit" value="Submit">
        </form>
    </div>

 
</body>
<footer>
    <h3>MY CONTACTS</h3>
    <h3><img src="images/call.png" width="30px">0997351383</h3> 
    <br>
    <h3><img src="images/msg .png" width="30px">dalitsombhicholo@gmail.com </h3>
    <ul>
        <li><a href="https://www.instagram.com"><img src="images/insta.png" width="30px"></a></li>
        <li><a href="https://www.linked.com"><img src="images/ln.png"width="30px"></a></li>
        <li><a href="https://www.twitter.com"><img src="images/twit.jpg"width="30px"></a></li>
        <li><a href="https://www.facebook.com"><img src="images/fb.png"width="30px"></a></li>
        <li><a href="https://www.telegram.com"><img src="images/tel.png "width="30px"></a></li>
    </ul>
</footer>
</html>