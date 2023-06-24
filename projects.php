<!DOCTYPE html>
<?php include 'connection.php';?>
<head>
    <link rel="stylesheet" href="style.css">
<title>PROJECTS</title>
</head>
<header>
    <nav >
        <ul>
        <li><a href="index.php"><d>HOME</d></a></li>
        <li><a href="contacts.php"><d>CONTACT</d></a></li>
        <li><a href="about.php"><d>ABOUT ME</d></a></li>
      </ul>
    </nav>
</header>
<body>


<div class="row">
  <div class="column">
    <img src="images/oven.png" style="width:80%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/cooker.png" style="width:80%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/GUI.png" style="width:80%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
 
<?php
$query="SELECT Id ,Name, description FROM projects";
$result= mysqli_query($connection,$query);

if(!$result){
  die("Error:".mysqli_error($connection));
}
  ?>
<div>
<?php while($row = mysqli_fetch_assoc($result)) {?>
<div>
<h2><?php echo $row['Name'];?></h2>
<p><?php echo $row['description'];?></p>
</div>
<?php } ?>
</div>

<?php
mysqli_free_result($result);
mysqli_close($connection);
?>
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
</body>
</html>