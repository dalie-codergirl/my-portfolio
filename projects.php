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
    <h3> PROJECTS</h3>
    <input type="text" id="searchBar" placeholder="Search...." size="60">
  <button id="SearchButton" onclick="doSearch()">Search</button><br>

   

    <input type="checkbox" id="filterA" onclick="filterProjects()">
    <label for="filterA">Filter 1</label>
    <input type="checkbox" id="filterB" onclick="filterProjects()">
    <label for="filterB">Filter 2</label>
      <dl id="itemList">

      <dt data-filter ="A"></dt>

    <section id="section1">
 <h3>SOLAR COOKER</h3>
    <p>~In 2020 when i was in form 3 i took part in a school project where we created a solar cooker. It used solar energy to heat up the oven and therefore creatin necessary amount of temperature to heat up the food.  </p>
    <img src="images/cooker.png"  alt="solar cooker"><br>
</section>

<section id="section2">
    <dt data-filter ="B"></dt>
    <h3>SOLAR HEATER</h3>
    <p>~In 2022 during my form 4 we had a competition we other secondary schools, i also took part in a project where we created a heater we using some basic handmade materials to come up with the project.</p>
    <img src="images/oven.png"  alt="solar heater"><br>
    <a href="http://www.scienceduddies.com"><t>Click here to view the project details.</a></t><br>
</section>
solar cooker<br>
<progress value="70" max="100"></progress>
<br>
solar heater<br>
<progress value="100" max="100"></progress>

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