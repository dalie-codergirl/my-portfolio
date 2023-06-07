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
    <div id="location"></div>
    
<h3>Phone:0997351383 <br>
email:dalitsombhicholo@gmail.com <br>
</h3>
<h3> FORM </h3>
        <p>Fill out the form below.</p>
    <form id="form" action"/" method="get">
        <div>
            <label for="name"><w>Name</w></label><br>
            <input id="name" name="name" size="90"    type="text" required><br>
        </div>
        <div>
        <label for="password"><w>Password</w></label><br>
        <input id="password" name="password"  size="90" type="text" required><br>
    </div>
        <div>
            <label for="email"><m>EMAIL</m></label><br>
            <input id="email" name="email" size="90" row="5"  type="text" required><br>
        </div>  
        <button type="submit" size="30">Submit</button>
    </form>
 
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